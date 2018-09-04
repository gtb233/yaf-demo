<?php

/**
 * @name IndexController
 * @author gaotanbin
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf_Controller_Abstract
{

    public function init()
    {
        Helpers\VarDumper::dump('init');
    }

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/yaf-item/index/index/index/name/gaotanbin 的时候, 你就会发现不同
     */
    public function indexAction($name = "Stranger")
    {
        $req = $this->getRequest();
        //1. fetch query
        $get = $req->getQuery("get", "default value");
        $get2 = $req->get('get', 'get2');
        $uri = $req->getRequestUri();

        \Helpers\VarDumper::dump($get, $get2, $uri);

        $controllerName = $req->getControllerName();
        $moduleName = $req->getModuleName();
        $methodName = $req->getMethod();
        echo $req->controller . '-' . $req->action;

        \Helpers\VarDumper::dump($controllerName, $moduleName, $methodName);


        /*$url = 'http://username:password@hostname/path?arg=value&test=123#anchor';
        helpers\VarDumper::dump(parse_url($url));*/

        //Helpers\VarDumper::dump(Yaf_Application::app()->getConfig()->toArray());

        //2. fetch model
        $model = new SampleModel();

        //3. assign
        $this->getView()->assign("content", $model->selectSample());
        $this->getView()->assign("name", $name);

        //4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return TRUE;
    }

    public function testRouteAction()
    {
        $req = $this->getRequest();

        $cityQ = $req->get('city');
        $cityP = $req->getParam('city');
        \Helpers\VarDumper::dump($cityQ, $cityP);

        return false;
    }
}
