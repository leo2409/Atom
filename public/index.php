<?php
try {
    include_once __DIR__ . '/../includes/AutoLoader.php';

    $route = $_GET['route'] ?? 'home';
    
    $method = $_SERVER['REQUEST_METHOD'];

    $entryPoint = new \Framework\EntryPoint($route,  new \Forum\ForumRoutes(), $method);
    
    $entryPoint->run();
} catch (\PDOException $e) {
    $title = 'An error has occurred';
    $output = 'the operation was not successful: <br/>' . $e->getMessage() . ' in ' 
    . $e->getFile() . ': ' . $e->getLine();
    include __DIR__ . '/../layout/layout.html.php';
}
?>