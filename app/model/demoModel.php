<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/1
 * Time: 09:15
 */

namespace app\model;


use core\lib\model;

class demoModel extends model
{
    public $table = 'demo';
    public function lists(){
        $ret = $this -> select( $this -> table,"*");
        return $ret;
    }
}