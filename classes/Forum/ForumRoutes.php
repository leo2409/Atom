<?php
namespace Forum;

class ForumRoutes implements \Framework\Interfaces\RoutesInterface{
    private $userTable;
    private $postTable;
    private $authentication;

    public function __construct() {
        include_once __DIR__ . '/../../includes/DatabaseConnection.php';
        $this->userTable = new \Framework\DatabaseTable($pdo, 'atom.user', 'id');
        $this->postTable = new \Framework\DatabaseTable($pdo, 'atom.post', 'id');
        $this->authentication = new \Framework\Authentication($this->userTable, 'email', 'password');
    }

    public function getRoute(): array {
        $postController = new \Forum\Controller\Post($this->postTable, $this->userTable, $this->authentication);
        $userController = new \Forum\Controller\Register($this->userTable);
        $loginController = new \Forum\Controller\Login($this->authentication);
        $routes = [

            #REGISTER
            'user/register' => [
                'GET' => [
                    'controller' => $userController,
                    'action' => 'registrationForm',
                ],
                'POST' => [
                    'controller' => $userController,
                    'action' => 'registrationUser',
                ]
            ],
            'user/success' => [
                'GET' => [
                    'controller' => $userController,
                    'action' => 'success',
                ]
            ],

            # LOGIN
            'login' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'loginForm',
                ],
                'POST' => [
                    'controller' => $loginController,
                    'action' => 'processlogin',
                ]
            ],
            'login/error' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'error',
                ],
                'POST' => [
                    'controller' => $loginController,
                    'action' => 'processlogin',
                ]
            ],
            'logout' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'logout',
                ]
            ],


            # HOME
            'home' => [
                'GET' => [
                    'controller' => $postController,
                    'action' => 'home',
                ],
                'login' => true
            ],

            # POST
            'post/delete' => [
                'GET' => [
                    'controller' => $postController,
                    'action' => 'delete',
                ],
                'login' => true
            ],
            'post/edit' => [
                'POST' => [
                    'controller' => $postController,
                    'action' => 'saveEdit',
                ],
                'GET' => [
                    'controller' => $postController,
                    'action' => 'edit',
                ],
                'login' => true
            ],

        ];
        return $routes;
      }

      public function getAuthentication(): \Framework\Authentication{
          return $this->authentication;
      }
}
?>