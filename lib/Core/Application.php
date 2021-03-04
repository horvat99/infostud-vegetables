<?php

namespace Core;
use Controller\ShopController;

class Application
{
    protected $controller ='ShopController';
    protected $action = 'index';
    protected $prams =[];

    public function __construct()
    {
        $this->validateURL();
        $this->prepareURL();
        if (file_exists(CONTROLLER. $this->controller . '.php')){
            $this->controller = new ShopController();
            if (method_exists($this->controller,$this->action)){
                call_user_func_array([$this->controller,$this->action],$this->prams);
            }
        }
    }


    protected function prepareURL()
    {
        $request = trim($_SERVER['REQUEST_URI'],'/');
        if (!empty($request)){
            $url = explode('/',$request);
            $this->controller = isset($url[0]) ? $url[0].'Controller' : 'ShopController';
            $this->action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0],$url[1]);
            $this->prams = !empty($url) ? array_values($url) : [];
        }

    }

    private function validateURL()
    {
        $filePath = (ltrim($_SERVER["REQUEST_URI"], '/'));
        if (!empty($filePath)){
            $path = ltrim(__DIR__.DIRECTORY_SEPARATOR.$filePath,'/');
            $pathArray = explode('/',$path);
            $file = $pathArray[count($pathArray)-1];
            if (is_numeric($file))
            {
                $file = $pathArray[count($pathArray)-2];
            }
            $fol = VIEW .'Shop/'. $file.'.php';
            if (!file_exists($fol))
            {
                echo '<h4 style="font-size: 5em; text-align: center">Error 404 not found</h4>';
            }
        }
    }
}