<?php
namespace App\Lib;


class FrontController
{
	// where not found controller and action
	const NOT_FOUND_ACTION = 'notFoundAction';
    const NOT_FOUND_CONTROLLER = 'App\Controllers\\NotFoundController';
    // variable to get controller, action and params
    private $_controller = 'Index';
    private $_action = 'default';
    private $_params = array();
    private $_template;
    public function __construct(Template $template)
    {
        $this->_template = $template;
        $this->_parseUrl();
    }

    private function _parseUrl()
    {
    	$url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/'));

    	//        to get controller from url
        if(isset($url[0]) && $url[0] != '')
        {
            $this->_controller = $url[0];
        }

        //to get action from url
        if(isset($url[1]) && $url[1] != '')
        {
            $this->_action = $url[1];

        }
        //to get params from url
        if(isset($url[2]) && $url[2] != '')
        {
            $this->_params = explode('/', $url[2]);
        }
    }
    public function dispatch()
    {
        $controllerClassName = 'App\\Controllers\\'. ucfirst($this->_controller).'Controller';
        if (!class_exists($controllerClassName)) {
            $controllerClassName = self::NOT_FOUND_CONTROLLER;
        }
        $controller = new $controllerClassName();


        
        $actionName = $this->_action . 'Action';
        if (!method_exists($controller,$actionName))
        {
            $this->_action = $actionName = self::NOT_FOUND_ACTION;
        }

       

        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->setTemplate($this->_template);
        call_user_func_array(array($controller,$actionName),[]);
        

        
    }
}

