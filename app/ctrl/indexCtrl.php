<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 08:46
 */
namespace app\ctrl;
use core\cooly;
use \app\model\demoC;

class indexCtrl extends cooly {
    public function index()
    {
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