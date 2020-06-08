<?php


namespace App;

use App\controllers\DefaultController;

class Application
{
    private const DEFAULT_CONTROLLER = DefaultController::class;
    private const DEFAULT_ACTION = "index";

    private $config;
    private static $instance = null;

    private $controller = null;
    private $action = null;
    private $params = [];

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Create new controller instance
     *
     * @param mixed $controller
     */
    public function setController(?string $controller)
    {

        if ($controller === null) {
            $this->controller = self::DEFAULT_CONTROLLER;
            return $this;
        }

        //UserController
        $controller = ucfirst(strtolower($controller) . "Controller"); //  . "Controller"
        $fullControllerName = "App\\controllers\\" . $controller;

        // validate that class exists
        if (class_exists($fullControllerName) === false) {
            throw new \InvalidArgumentException("Controller { $fullControllerName } not found");
        }
        $this->controller = $fullControllerName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set action from controller
     */
    public function setAction(?string $action)
    {
        if ($action === null) {
            $this->action = self::DEFAULT_ACTION;
            return $this;
        }
        // validate that action exists in $this->controller | ReflectionClass -> hasMethod
        $this->action = strtolower($action);
        return $this;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     * @return Application
     */
    public function setParams(array $params)
    {
        $this->params = $params;
        return $this;
    }

    public static function getInstance(array $config = [])
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    private function __construct(array $config = [])
    {
        $this->config = $config;
    }


    private function parseUri()
    {
        $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), "/");

        $data = [];
        parse_str($path, $data); // $data is passed by reference and modified inside parse_str function

        $this->setController($data['controller'] ?? null);
        unset($data['controller']);
        $this->setAction($data['action'] ?? null);
        unset($data['action']);
        $this->setParams($data ?? []);

    }

    public function run()
    {
        $this->parseUri();
        $result = call_user_func_array([new $this->controller, $this->action], $this->params);
//var_dump($result);


        if ($result === false || $result === null) {

@            header("Location: " . VIEWS_PATH . "default/404.php");
//            throw new \RuntimeException("Something went wrong");
        }
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

}