<?php

/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 10/20/15
 * Time: 11:26 AM
 */

class DB
{
    protected $dbuser;
    protected $dbpassword;
    protected $dbname;
    protected $dbhost;
    protected $charset;
    protected $collate;

    public $pdo;
    public $lastquery;
    protected $connected;
    public $result;
    public $error;



    public function __construct($dbuser, $dbpassword, $dbname, $dbhost) {
        register_shutdown_function(array($this, '__destruct'));

        $this->dbuser = $dbuser;
        $this->dbpassword = $dbpassword;
        $this->dbname = $dbname;
        $this->dbhost = $dbhost;

        $this->connected = $this->db_connect();
    }

    public function __destruct() {
        $this->pdo = null;
        return true;
    }

    public function db_connect() {
        try
        {
            $this->pdo = new PDO("mysql:host=$this->dbhost;mysql:dbname=$this->dbname;charset=utf8mb4", $this->dbuser, $this->dbpassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        }
        catch (PDOException $e)
        {
            $this->error = $e->getMessage();
            return false;
        }
        return true;
    }
}

global $db;

$db = new db(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
