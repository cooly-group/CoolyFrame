<?php
// 公共方法
/**
 * 打印内容 测试方法
 * @param $var
 */
function p($var){
    if(is_bool($var)){
        var_dump($var);
    }else if (is_null($var)){
        var_dump(NULL);
    }else{
        print_r($var);
    }
}