<?php
namespace Forum\Controller;

class Post {
    private $postTable;

    public function __construct(\Framework\DatabaseTable $postTable) {
        $this->postTable = $postTable;
    }

    public function home() {
        return [
            'title' => 'Home',
            'template' => 'home.html.php',
        ];
    }

    public function edit() {
        $title = 'Post';
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

    public function information() {
        return [
            'template' => ''
        ];
    }
    
}
?>