<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/1
 * Time: 10:54
 */

namespace core\lib\drive\cache;

use core\lib\config;
class fileCache
{
    public $path;
    public $file;
    public function __construct(){
        $conf = Config::get('OPTIONS','cache');
        $this -> path = $conf['PATH'];
    }

    /**
     * 文件写入缓存
     * @param $name string 缓存名称
     * @param $value string 缓存值
     * @return bool|int|mixed
     * @throws \Exception
     */
    public function setCache($name,$value = ''){
        if(!is_dir($this -> path)){
            mkdir($this -> path, '0777',true);
        }
        if(!isset($name)){
            throw new \Exception("缓存名称不存在");
        }
        $file = $this -> path . sha1($name) . '.txt';
        return file_put_contents($file,json_encode($value));
    }

    /**
     * 获取指定缓存
     * @param $name string 缓存名称
     * @return mixed
     * @throws \Exception
     */
    public function getCache($name){
        $file = $this -> path . sha1($name) . '.txt';
        if(is_file($file)){
            $data = file_get_contents($file);
            return json_decode($data,true);
        }else{
            throw new \Exception("缓存不存在" .$name);
        }
    }

    /**
     * 删除指定缓存
     * @param $name
     * @return bool
     * @throws \Exception
     */
    public function deleteCache($name){
        $file = $this -> path . sha1($name) . '.txt';
        if(is_file($file)){
            return unlink($file);
        }else{
            throw new \Exception("缓存不存在" .$name);
        }
    }

    /**
     * 删除所有缓存
     * @throws \Exception
     */
    public function deleteAllCache(){
        $files = array();
        if(is_dir($this -> path)){
            $handler = opendir($this -> path);
            while (($filename = readdir($handler)) !== false){
                if($filename != '.' && $filename != '..'){
                    $files[] = $filename;
                }
            }

            foreach ($files as $item) {
                try {
                    $file = $this -> path . $item;
                    unlink($file);
                }catch (\Exception $e){
                    throw new \Exception("文件删除失败" . $item);
                }
            }
            closedir($handler);
        }else{
            throw new \Exception("删除失败，缓存文件夹不存在");
        }
    }
}