<?php

/**
 * @name Bootstrap
 * @author gaotanbin
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{

    public function _initConfig()
    {
        //把配置保存起来
        $arrConfig = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $arrConfig);

        if (!function_exists('classAutoLoader')) {
            function classAutoLoader($class)
            {
                $class = strtolower($class);
                $classFile = APP_PATH . '/library/' . $class . '.php';
                if (is_file($classFile) && !class_exists($class)) include $classFile;
            }
        }
        spl_autoload_register('classAutoLoader');
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher)
    {
        //注册一个插件
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的路由协议,默认使用简单路由
    }

    public function _initView(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的view控制器，例如smarty,firekylin
    }

    public function _initLoader(Yaf_Dispatcher $dispatcher)
    {
        Yaf_Loader::getInstance()->registerLocalNameSpace([
            "Helpers",
        ]);
    }
}