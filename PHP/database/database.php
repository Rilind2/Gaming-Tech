<?php
class Database
{
    private $servername = 'DIDI-PC\SQLEXPRESS';
    private $user = 'DesktopUser';
    private $password = 'did2000';
    private $databaseName = 'GamingTech';

    public $pdo;
  
    public function __construct()
    {
        
        try {
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            }
            $link = new PDO("sqlsrv:Server=$this->servername;Database=$this->databaseName", $this->user, $this->password);
            $this->pdo=$link;
        } catch (PDOException $e) {
            die("ERROR ".$e.getMessage());
            
        }
        
    }
}



