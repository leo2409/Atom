<?php
namespace Forum;

class ForumRoutes implements \Framework\RoutesInterface{
      public function getRoute() {
        include_once __DIR__ . '/../../includes/DatabaseConnection.php';
        $userTable = new \Framework\DatabaseTable($pdo, 'atom.user', 'id');
        $postTable = new \Framework\DatabaseTable($pdo, 'atom.post', 'id');
        $postController = new \Forum\Controller\Post($postTable);
        $userController = new \Forum\Controller\Register($userTable);
        $homeController = new \Forum\Controller\Home();
        $routes = [
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
                ],
            ],
            'home' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'home',
                ],
            ]
        ];
        return $routes;
      }
}
?>