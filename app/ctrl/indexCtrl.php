<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 08:46
 */
namespace app\ctrl;

use core\cooly;
use core\lib\cache;

class indexCtrl extends cooly {
    public function index()
    {
        cache::init();
//        cache::setCache('php',"2345");
//        cache::setCache('php1',"2345");
//        cache::setCache('php3',"2345");
//        $d = cache::getCache('php');
//        dump($d);
        $d = cache::deleteAllCache();
//        dump($d);

        $data = "hello";
        $this -> assign("title","标题");
        $this -> assign('data',$data);
        $this -> display("index.html");
    }

    public function test(){
        $data = "test";
        $this -> assign("title","标题");
        $this -> assign('data',$data);
        $this -> display("test.html");
    }
}