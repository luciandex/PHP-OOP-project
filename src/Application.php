<?php


namespace App;

use App\controllers\DefaultController;
use http\Exception\InvalidArgumentException;

class Application
{
    private const DEFAULT_CONTROLLER = DefaultController::class;
    private const DEFAULT_ACTION = "index";

    private static $instance = null;

    private $config;
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
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
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

    /**
     * @param array $config
     * @return Application|null
     */
    public static function getInstance(array $config = [])
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }


    /**
     *** Create new controller instance ***
     * @param mixed $controller
     */
    public function setController(?string $controller)
    {
        if ($controller === null) {
            $this->controller = self::DEFAULT_CONTROLLER;
            return $this;
        }

        //SetController
        $controller = ucfirst(strtolower($controller) . "Controller");
        $fullControllerName = "App\\controllers\\" . $controller;

        if (class_exists($fullControllerName) === false) {
            (new DefaultController())->errorPage404();
            throw new InvalidArgumentException("Page $this->controller not found");
        }

        $this->controller = $fullControllerName;
        return $this;

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

        $checkAction = new \ReflectionClass($this->controller);

        if ($checkAction->hasMethod($this->action)) {
            $this->action = strtolower($action);
            throw new InvalidArgumentException("That move can not be processed");
        }

        return $this;
    }


    private function parseUri()
    {
        $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), "/");
        $data = [];
        parse_str($path, $data);

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

        if ($result === false || $this->controller === null) {
            (new DefaultController())->errorPage404();
            throw new \RuntimeException("$this->controller was not found or not possible to initiate");
        }
    }

    /**
     * Application constructor.
     * @param array $config
     */
    private function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Application clone
     */
    private function __clone()
    {
    }

    /**
     * Application wakeup
     */
    private function __wakeup()
    {
    }

}