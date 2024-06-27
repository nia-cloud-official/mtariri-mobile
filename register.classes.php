<?php


class Account { 
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $gender;
    private $address;
    public $city;
    private $state;
    private $phoneNumber;
    public $postal;
    private $email;
    private $beneficiary;
    private $relationship;
    private $beneficiaryphonenumber;
    private $beneficiaryemailaddress;
    private $coverAmount;
    private $paymentFrequency;
    private $policyStartdate;
    private $defaultPassword = "Password";

    public function generateDefaultPassword() { 
        $salt = str_shuffle($this->defaultPassword);
        $password =  crypt("mtariri", $salt);
        return $password;
    }

    public function __construct($firstName, $lastName, $phoneNumber , $email) { 
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $password = $this->generateDefaultPassword();
        $this->__createUserAccount($email , $password , $phoneNumber);
    }

    public function __createUserAccount(string $email , $password , $phoneNumber) { 
       $conn = new Database;
       $conn->__construct();
    }
     
}

class Database { 
    private $databaseName = "mtariri";
    private $host = "localhost";
    private $user = "milto"; 
    private $password = "lola";

    public function __construct() { 
        $conn = new mysqli($this->host, $this->user, $this->password, $this->databaseName);
        if(!mysqli_connect_error()){ 
            echo "Connected Successfully";
        }else { 
            echo "An error occurred while connecting to the database";
        }
    }
}

$mili = new Account("Milton","Vafana","0715212928","miltonhyndrex@gmail.com");