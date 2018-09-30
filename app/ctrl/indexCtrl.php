<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 08:46
 */
namespace app\ctrl;

use core;
class indexCtrl extends \core\cooly {
    public function index()
    {
        $title = 'tttt';
        $name = 'nnnn';
        $this -> assign('title', $title);
        $this -> assign('name' , $name);
        $this -> display('index.html');
    }
}