<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/1
 * Time: 06:44
 */

namespace core\lib\drive\log;


use core\lib\config;

class fileLog
{
    public $path;
    public function __construct(){
        $conf = config::get('OPTIONS','log');
        $this -> path = $conf['PATH'];
    }

    /**
     * 1、检查缓存文件是否存在
     *   新建文件
     * 2、写入数据
     */

    /**
     * 文件log
     * @param $message string log
     * @param string $file string 文件名
     * @return bool|int
     */
    public function log($message,$file = 'log'){
        $time = date('YmdH', time());
        $logDir = $this -> path . $time;
        if(!is_dir($logDir)){
           mkdir($logDir,'0777',true);
        }
        // 按小时写入log
        $file = $logDir . '/' . sha1($file).'.log';
        $message = date('Y-m-d H:i:s',time()) .' : '. json_encode($message);
        return file_put_contents($file,$message . PHP_EOL,FILE_APPEND);
    }

}