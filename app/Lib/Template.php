<?php
namespace App\Lib;


class Template
{
    private $_templateParts;
    private $_action_view_file;
    private $_data;
    public function __construct(array $parts)
    {
        $this->_templateParts = $parts;
    }
    public function setActionViewFile($actionViewPath)
    {
        $this->_action_view_file = $actionViewPath;
    }
    public function setAppData($data)
    {
        $this->_data =$data;
    }
    private function renderTemplateHeaderStart()
    {
//        extract($this->_data);
        require_once TEMPLATE_PATH . DS . 'templateheaderstart.php';
    }
    private function renderTemplateHeaderEnd()
    {
//        extract($this->_data);
        require_once TEMPLATE_PATH . DS . 'templateheaderend.php';
    }
    private function renderTemplateFooter()
    {
        require_once TEMPLATE_PATH . DS . 'templatefooter.php';
    }
    private function renderBlocks()
    {

        if (!array_key_exists('template',$this->_templateParts))
        {
            trigger_error('sorry you have to define the template blocks',E_USER_WARNING);
        }else{
            $parts = $this->_templateParts['template'];
            if (!empty($parts))
            {
                extract($this->_data);
                foreach ($parts as $partKey => $file)
                {
                    if ($partKey === ':view')
                    {
                        require_once $this->_action_view_file;
                    }else{
                        require_once $file;
                    }

                }
            }

        }

    }
    private function renderHeaderResources()
    {
        $outPut = '';
        if (!array_key_exists('header_resources',$this->_templateParts))
        {
            trigger_error('sorry you have to define the header_resources',E_USER_WARNING);
        }else{
            $resources = $this->_templateParts['header_resources'];
//            generate css
            $css = $resources['css'];
            if (!empty($resources))
            {
                foreach ($css as $cssKey => $file)
                {
                    $outPut .= '<link type="text/css" rel="stylesheet" href="'.$file.'"/>';
                }
            }
//            generate JS
            $js = $resources['js'];
            if (!empty($js))
            {
                foreach ($js as $jsKey => $file)
                {
                    $outPut .= '<script src="'.$file.'"></script>';
                }
            }

        }
        echo $outPut;
    }
    private function renderFooterResources()
    {
        $outPut = '';
        if (!array_key_exists('footer_resources',$this->_templateParts))
        {
            trigger_error('sorry you have to define the footer_resources',E_USER_WARNING);
        }else{
            $resources = $this->_templateParts['footer_resources'];
//            generate JS
            if (!empty($resources))
            {
                foreach ($resources as $jsKey => $file)
                {
                    $outPut .= '<script src="'.$file.'"></script>';
                }
            }

        }
        echo $outPut;
    }
    public function renderApp()
    {

        $this->renderTemplateHeaderStart();
        $this->renderHeaderResources();
        $this->renderTemplateHeaderEnd();
        $this->renderBlocks();
        $this->renderFooterResources();
        $this->renderTemplateFooter();
    }
}