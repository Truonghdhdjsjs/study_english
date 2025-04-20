<?php
namespace Src\Core;

class App {
    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->GetUrl();

        // Controller
        if (isset($url[0]) && file_exists(__DIR__ . "/../Controller/{$url[0]}.php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once __DIR__ . "/../Controller/{$this->controller}.php";
        $controllerClass = "Src\\Controller\\".$this->controller;
        $this->controller = new $controllerClass;

        // Action
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->action = $url[1];
            unset($url[1]);
        }

        // Parameters
        $this->params = $url ? array_values($url) : [];

        // Call Controller Action with Parameters
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function GetUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
