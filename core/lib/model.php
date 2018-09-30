<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/9/30
 * Time: 12:03
 */

namespace core\lib;


class model extends \PDO
{
    public function __construct($dsn, $username, $passwd, $options)
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = '';
        try{
            parent::__construct($dsn, $username, $passwd);
        }catch (\PDOException $e){
            p($e -> getMessage());
        }
    }
}