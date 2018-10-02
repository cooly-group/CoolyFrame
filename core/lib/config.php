<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 15:47
 */

namespace core\lib;


class config
{
    // 配置静态变量
    static public $config = array();
    static public $customize;
    /**
     * 文件单个缓存获取
     * @param $name string 缓存名称
     * @param $file string 缓存文件名称
     * @return mixed
     * @throws \Exception
     */
    static public function get($name, $file){
        /**
         * 1 检查缓存文件是否存在
         * 2、检查缓存是否存在
         * 3、获取缓存，设置缓存
         */
        if(empty($file)){
            if(isset(self::$customize)){
                return self::$customize;
            }else {
                $path = APP . '/config.php';
                if (is_file($path)) {
                    $conf = include $path;
                    if (isset($conf[$name])) {
                        self::$customize = $conf;
                        return $conf[$name];
                    } else {
                        throw new \Exception('当前不存在缓存' . $name);
                    }
                } else {
                    throw new \Exception('当前不存在缓存文件config.php' );
                }
            }
        }

        if(isset(self::$config[$file])){
            return self::$config[$file][$name];
        }else{
            $path = CORE . '/config/' . $file .'.php';
            if(is_file($path)){
                $conf = include $path;
                if(isset($conf[$name])){
                    self::$config[$file] = $conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('当前不存在缓存' .$name);
                }
            }else{
                throw new \Exception('当前不存在缓存文件' . $file);
            }
        }
    }

    /**
     * 当前文件所有配置项
     * @param $file string 文件名
     * @return mixed
     * @throws \Exception
     */
    static public function all($file){
        if(isset(self::$config[$file])){
            return self::$config[$file];
        }else{
            $path = CORE . '/config/' . $file .'.php';
            if(is_file($path)){
                $conf = include $path;
                self::$config[$file] = $conf;
                return $conf;
            }else{
                throw new \Exception('当前不存在缓存文件' . $file);
            }
        }
    }

}