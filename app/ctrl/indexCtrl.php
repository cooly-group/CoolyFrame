<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 08:46
 */
namespace app\ctrl;


use core\lib\drive\log\fileLog;
use core\lib\log;

class indexCtrl extends \core\cooly {
    public function index()
    {
//        $c = \core\lib\config::get('METHOD','route');
//        $d = \core\lib\config::get('CTRL','route');
//        print_r($c);
//        print_r($d);
//        $q = new \core\lib\model();
//        $ret = $q -> query('select * from demo');
//        p($ret -> fetchAll());

        $title = 'tttt1234576';
        $name = 'nnnn';
        $this -> assign('title', $title);
        $this -> assign('name' , $name);
        $this -> display('index.html');
    }
}