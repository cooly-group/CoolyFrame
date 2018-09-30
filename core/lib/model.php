<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 12:03
 */

namespace core\lib;

use core\lib\config;
class model extends \PDO
{
    public function __construct()
    {
//        $dsn = 'mysql:host=localhost;dbname=demo';
//        $username = 'root';
//        $passwd = '123456';
        $dsn = config::get('DSN','datebase');
        $username = config::get('USER','datebase');
        $passwd = config::get('PSD','datebase');
//        $database = config::all('database');

        try{
            parent::__construct($dsn, $username, $passwd);
        }catch (\PDOException $e){
            p($e -> getMessage());
        }
    }
}