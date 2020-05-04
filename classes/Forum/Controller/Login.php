<?php
namespace Forum\Controller;

class Login {
    private $authentication;

    public function __construct(\Framework\Authentication $authentication) {
        $this->authentication = $authentication;
    }

    public function loginForm() {
        return [
            'templates' => [  
                'template' => 'login.html.php',
            ],
            'title' => 'log In'
        ];
    }

    public function error() {
        return [
            'templates' => [  
                'template' => 'login.html.php',
            ],
            'title' => 'login',
            'variables' => [
                'error' => [
                    'notLogged' => true,
                ]
            ]
        ];
    }

    public function processLogin() {
        if ($this->authentication->login($_POST['email'], $_POST['password'])) {
            header('location: index.php?route=home&firstA=true');
        } else {
            return [
                'templates' => [
                    'template' => 'login.html.php',
                ],
                'title' => 'Log In',
                'variables' => [
                    'error' => [
                        'authentication' => 'invalid username/password.'
                    ],
                    'user' => [
                        'email' => $_POST['email']
                    ]
                ]
            ];
        };
    }

    public function logout() {
        unset($_SESSION['password']);
        unset($_SESSION['username']);
        return[
            'templates' => [
                'template' => 'logout.html.php',
            ],
            'title' => 'Logout'
        ];
    }
 }
?>