<?php
namespace Forum\Controller;

class Post {
    private $postTable;
    private $userTable;

    public function __construct(\Framework\DatabaseTable $postTable, \Framework\DatabaseTable $userTable) {
        $this->postTable = $postTable;
        $this->userTable = $userTable;
    }

    public function home() {
        return [
            'title' => 'Home',
            'template' => 'home.html.php',
        ];
    }

    public function edit() {
        $title = 'Edit Post';
        if (isset($_POST['id'])) {
            $post = findById($_POST['id']);
        }
        return [
            'title' => $title,
            'template' => 'postForm.html.php',
            'variable' => [
                'post' => $post ?? NULL,
            ],
        ];
    }

    public function saveEdit() {
        $fields = $_POST['post'];
        
        $joke['jokedate'] = new DateTime();
        
    }
}
?>