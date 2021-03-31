<?php

class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="last_form";
    public $mysqli;
    
    public function __construct(){
      return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);   
    }
    public function contact_us($data){
      echo'test';
        $fname=$data['name'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['message'];
        $q="INSERT INTO `contact_uss`  (`full_name`, `email`, `phone`, `message`) VALUES ('$fname', '$email', '$phone', '$message')";
        return $this->mysqli->query($q);

    }
    
}

?>