<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/2
 * Time: 07:57
 */

namespace core\lib;

use \Whoops\Run;
use \Whoops\Handler\PrettyPageHandler;

class debug
{
    private $whoops;
    private $option;
    public function __construct(){
        $this -> whoops = new Run();
        $this -> option = new PrettyPageHandler();

    }

    // 基础框架报错
    public function init(){
        $this -> option  -> setPageTitle("框架出错了");
        $this -> whoops ->pushHandler($this -> option);
        $this -> whoops ->register();
    }
}