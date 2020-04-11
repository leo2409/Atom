<?php
namespace Forum\Controller;

class Register {
    private $userTable;

    public function __construct($userTable) {
        $this->userTable = $userTable;
    }

    public function registrationForm() {
        $title = 'Register an account';
        return [
            'title' => $title,
            'template' => 'register_form.html.php'
        ];
    }

    public function registrationUser() {
        $user = $_POST['user'];
        $error = [];
        $valid = true;
        if (empty($user['username'])) {
            $valid = false;
            $error[] = 'username cannot be blank';
        }
        if (empty($user['password'])) {
            $valid = false;
            $error[] = 'password cannot be blank';
        }
        if (empty($user['name'])) {
            $valid = false;
            $error[] = 'name cannot be blank';
        }
        if (empty($user['email'])) {
            $valid = false;
            $error[] = 'email cannot be blank';
        } else if (filter_var($user['email'],FILTER_VALIDATE_EMAIL) == false) {
            $valid = false;
            $error[] = 'invalid email address';
        } else {
            $user['email'] = strtolower($user['email']);
            $res = $this->userTable->find('email', $user['email']);
            if (count($res) > 0) {
                $valid = false;
                $error[] = 'that email address is already registered';
            }
        }

        if ($valid == true) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            $this->userTable->save($user);
            header('location: index.php?route=user/success');
        } else {
            return [
                'template' => 'register_form.html.php',
                'title' => 'Register an account',
                'variables' => [
                    'errors' => $error,
                    'user' => $user,
                ]
            ];
        }
    }

    public function success() {
        $title = 'Registration seccussful';
        return [
            'title' => $title,
            'template' => 'register_success.html.php'
        ];
    }
}
?>