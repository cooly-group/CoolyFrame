<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 08:46
 */
namespace app\ctrl;
use core\cooly;
use \app\model\demoModel;

class indexCtrl extends cooly {
    public function index()
    {
       $demo = new demoModel();
        dump($demo -> lists());
    }
}