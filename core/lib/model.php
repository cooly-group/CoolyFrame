<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/1
 * Time: 09:05
 */

namespace core\lib;


class model extends \Medoo\Medoo
{
    // 联接数据库
    public function __construct(){
        $option = config::all('database');
        parent::__construct($option);
    }
}