<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/4
 * Time: 15:46
 */
namespace Settings;

class Router
{
    public static function init(\Yaf_Dispatcher $dispatcher)
    {
        $router = $dispatcher->getRouter();

        $router->addRoute(
            'test-route',
            new \Yaf_Route_Regex(
                '#^/test/([0-9]+)$#',
                ['controller' => 'Index', 'action' => 'testRoute'],
                ['1' => 'city'],
                []
            )
        );
    }
}
