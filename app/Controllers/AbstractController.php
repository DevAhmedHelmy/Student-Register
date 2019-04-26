<?php

namespace App\Controllers;
use App\Lib\FrontController;
class AbstractController
{
    protected $_controller;
    protected $_action;
    protected $_params;
    protected $_template;
    protected $_data = [];
    public function notFoundAction()
    {
        echo "this not found Action (not found page)";
    }
    public function setController($controller)
    {
        $this->_controller = $controller;
    }
    public function setAction($action)
    {
        $this->_action = $action;
    }
    public function setParams($params)
    {
        $this->_params = $params;
    }
     public function setTemplate($template)
    {
        $this->_template = $template;
    }
    protected function _view()
    {

        if ($this->_action == FrontController::NOT_FOUND_ACTION)
        {
            require_once VIEWS_PATH . '/notfound' . DS .'notfound.view.php';
        }else{
//            $view = VIEWS_PATH . DS . $this->_controller . DS . $this->_action . '.view.php';
            $view = VIEWS_PATH . DS . strtolower($this->_controller)  . DS . $this->_action . '.view.php';

            if (file_exists($view))
            {
                
                $this->_template->setActionViewFile($view);
                $this->_template->setAppData($this->_data);
                $this->_template->renderApp();

            }else{
                require_once VIEWS_PATH . '/notfound' . DS .'notview.view.php';
            }
        }

    }
}