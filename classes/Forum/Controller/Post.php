<?php
namespace Forum\Controller;

class Post {
    private $postTable;

    public function __construct(\Framework\DatabaseTable $postTable) {
        $this->postTable = $postTable;
    }

    public function home() {
        return [
            'template' => 'roba',
            'title' => 'home',
        ];
    }

    
}
?>