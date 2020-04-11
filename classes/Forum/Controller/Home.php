<?php
namespace Forum\Controller;

class Home {
    public function home() {
        return [
            'title' => 'Home',
            'template' => 'home.html.php',
        ];
    }
}
?>