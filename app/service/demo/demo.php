<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 15:51
 */

namespace core\service;


class demo
{
    public function show(){
        $query = new \core\lib\model();
        $sql = 'select * from demo';
//       $sql = 'update demo set name= "xiaoming" where id = 3 ';
//        $sql = 'insert into demo (name) value(1)';
//        $sql = 'delete from demo where id = 1';
        $ret = $query -> query($sql);
       p($ret -> fetchAll());
    }
}