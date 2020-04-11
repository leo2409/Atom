<?php
namespace Framework;

class EntryPoint {
    private $url;
    private $method;
    private $routes;

    public function __construct(string $url, \Framework\RoutesInterface $routes, string $method) {
        $this->url = $url;
        $this->method = $method;
        $this->routes = $routes;
        $this->urlCheck($this->url);
    }

    private function urlCheck($route) {
        if ($route !== strtolower($route)) {
            http_response_code(301);
            header('location: ' . strtolower($route));
        }
    }

    private function loadTemplate($templateName, $variables = [] ) {
        extract($variables);
        ob_start();
        include __DIR__ . '/../../templates/' . $templateName;
        return ob_get_clean();
    }

    public function run() {
        $route = $this->routes->getRoute();
        $controller = $route[$this->url][$this->method]['controller'];
        $action = $route[$this->url][$this->method]['action'];
        $page = $controller->$action();
        $title = $page['title'];
        if (isset($page['variables'])) {
            $output = $this->loadTemplate($page['template'], $page['variables']);
        } else {
            $output = $this->loadTemplate($page['template']);
        }
        include __DIR__ . '/../../layout/layout.html.php';
    }
}
?>