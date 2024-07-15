<?php 

class Database { 
    private $host;
    private $username;
    private $password;
    private $dbName;
    private $conn; 
    public function __construct(){
         $this->establishConnection();
    }

    public function establishConnection(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbName = 'mtariri';
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);
        if(!mysqli_error($this->conn)) { 
            $status = true;
            echo "Connection established successfully";
        }else { 
            $status = false;
            echo " An error occurred";
        }
        return $status;
    }
}