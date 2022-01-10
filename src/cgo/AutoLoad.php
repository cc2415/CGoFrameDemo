<?php
namespace cgo;

class AutoLoad
{
    public static function load($className)
    {
        echo $className . PHP_EOL;
        $fileName = str_replace('\\','/', DIR.'\\..\\'. $className).'.php';
        if(is_file($fileName)){
            require $fileName;
        }else{
            echo '----'.$fileName .' is not exist';die;
        }
    }
}