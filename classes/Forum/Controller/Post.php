<?php
namespace Forum\Controller;

class Post {
    private $postTable;
    private $userTable;
    private $authentication;

    public function __construct(\Framework\DatabaseTable $postTable, \Framework\DatabaseTable $userTable, \Framework\Authentication $authentication) {
        $this->postTable = $postTable;
        $this->userTable = $userTable;
        $this->authentication = $authentication;
    }

    public function home() {
        $posts = [];
        $posts = $this->homePosts();
        $user = $this->authentication->getUser();
        if (isset($_GET['firstA'])) {
            $templates = [
                'login_success.html.php',
                'home.html.php',
            ];
        } else {
            $templates = [
                'home.html.php',
            ];
        }
        return [
            'title' => 'Home',
            'templates' =>$templates,
            'variables' => [
                'posts' => $posts ?? NULL,
                'user' => $user,
            ],
        ];
    }

    public function edit() {
        $title = 'Edit Post';
        $user = $this->authentication->getUser();
        if (isset($_GET['id'])) {
            $post = $this->postTable->findById($_GET['id']);
        }
        return [
            'title' => $title,
            'templates' => [
                'template' => 'postForm.html.php',
            ],
            'variables' => [
                'post' => $post ?? NULL,
                'userid' => $user['id'] ?? NULL,
            ],
        ];
    }

    public function saveEdit() {
        $user = $this->authentication->getUser();

        if (!empty($_POST['post']['id'])) {
            $postA = $this->postTable->findById($_POST['post']['id']);

            if ($user['id'] != $postA['user_id']) {
                return;
            }
        }

        $fields = $_POST['post'];
        $fields['date'] = new \DateTime();
        $fields['user_id'] = $user['id'];

        $this->postTable->save($fields);
        header('location: index.php?route=home');
    }

    public function delete() {
        $user = $this->authentication->getUser();
        $post = $this->postTable->findById($_GET['id']);

        if ($post['user_id'] != $user['id']) {
            return;
        }

        $this->postTable->remove($_GET['id']);

        header('location: index.php?route=home');
    }

    private function homePosts() 
    {
      $sql = 'SELECT post.id,post.title,post.body,post.date,post.user_id,user.username FROM atom.post,atom.user where post.user_id = user.id ORDER BY post.date DESC;';
      $result = $this->postTable->query($sql);
      return $result->fetchAll();
    } 
}
?>