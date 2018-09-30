<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 15:52
 */

namespace app\ctrl\demo;


class demoCtrl extends \core\cooly {
   public function index(){
       $this -> display('demo/index.html');
   }
}