<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 15:52
 */

namespace app\ctrl\demo;


use core\cooly;

class demoCtrl extends cooly {
   public function index(){
       $this -> display('demo/index.html');
   }
}