<?php
// 打印内容
function p($var){
    if(is_bool($var)){
        var_dump($var);
    }else if (is_null($var)){
        var_dump(NULL);
    }else{
        print_r($var);
    }
}