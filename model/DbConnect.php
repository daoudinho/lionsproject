<?php


class DbConnect
{
    protected $db;
    function __construct()
    {
        try
        {
                $db = new PDO("mysql:host=".DB_URL.";dbname=".DB_NAME.";port=3306;charset=utf8",ADMIN_LOG, ADMIN_ACCESS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $this->db = $db;
        }
        catch (Exception $e)
        {
            echo "Error connection to DB".PHP_EOL;
            die('PDO ERROR:'. $e->getMessage().PHP_EOL);
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}