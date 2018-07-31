<?php
/**
 * 
 */
namespace app\api\controller;


class Factory
{

    private static $Factory;

    private function __construct()
    {

    }

    public static function getInstance($className, $options = null)
    {
        if (!isset(self::$Factory[$className]) || !self::$Factory[$className]) {
            self::$Factory[$className] = new $className($options);
         //self::$Factory[$className]只是一个存放对象的容器,也可以 self::$Factory
         //em:$a; $a['aa']=1111; echo $a['aa'];//输出1111
        }
        return self::$Factory[$className];
    }
}
