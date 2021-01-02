<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnect
 *
 * @author Vaibhav
 */
class DBConnect {
    private $db = NULL;

    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "root";
    const DB_NAME = "donor";

    public function __construct() {
        $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_SERVER;
        try {
            $this->db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            die("Connection failed! Possible solution: Change your mySQL username to 'root' and password to 'root' or go to project folder BDManagement/users/php/DBConnect.php and change DB_USER and DB_PASSWORD variable inside DBConnect class according to your mySQL username and password.");
        }
        return $this->db;
    }
    
    public function getDonorsByBloodType($bloodType){
        $stmt = $this->db->prepare("SELECT * FROM donors WHERE b_type LIKE ?");
        $stmt->execute(["%".$bloodType."%"]);
        return $stmt->fetchAll();
    }
    public function registerUser($firstName,$lastName,$email,$dob,$gender,$b_type,$address,$city,$mobile){
        $stmt = $this->db->prepare("INSERT INTO users (first_name,last_name,email,dob,gender,b_type,address,city,mobile) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->execute([$firstName,$lastName,$email,$dob,$gender,$b_type,$address,$city,$mobile]);
        return true;
    }
     public function addEmployee($username,$password,$firstName,$lastName,$mobile,$birthDay){
        $stmt = $this->db->prepare("INSERT INTO employees (f_name,l_name,username,password,b_day,mobile_nr)"
                . "VALUES (?,?,?,?,?,?)");
        if($stmt->execute([$firstName,$lastName,$username,$password,$birthDay,$mobile]))
            return true;
        else
            return $this->db->errorInfo();
    }
    public function getUsers(){
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    
    
    
}
