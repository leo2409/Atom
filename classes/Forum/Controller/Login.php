<?php
namespace Forum\Controller;

class Login {
    private $authentication;

    public function __construct(\Framework\Authentication $authentication) {
        $this->authentication = $authentication;
    }

    public function loginForm() {
        return [
            'template' => 'login.html.php',
            'title' => 'log In'
        ];
    }

    public function error() {
        return [
            'template' => 'login.html.php',
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
            header('location: index.php?route=login/success');
        } else {
            return [
                'template' => 'login.html.php',
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

    public function success() {
        return[
            'template' => 'login_success.html.php',
            'title' => 'Login Sucessful'
        ];
    }

    public function logout() {
        unset($_SESSION['password']);
        unset($_SESSION['username']);
        return[
            'template' => 'logout.html.php',
            'title' => 'Logout'
        ];
    }
 }
?>