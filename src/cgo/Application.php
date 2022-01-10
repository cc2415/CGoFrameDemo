<?php

namespace cgo;
class Application
{
    /**
     * @var string
     */
    protected string $path;

    public function __construct($path)
    {
        $this->path = $path;
        //自动加载
        require_once $path . '/AutoLoad.php';
        echo $path.'/AutoLoad.php'.PHP_EOL;
        spl_autoload_register(array('AutoLoad', 'autoload'));
    }


    public function run()
    {
        return true;
    }
}