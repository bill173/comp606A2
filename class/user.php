<?php

class user{

  // private properties of this class
  // cannot be 
  private $id = null;
  private $username = "";
  private $email = "";
  private $password = "";
  private $mobile = "";
 
  
  // constructor to create new  object
  public function __construct($id, $username, $password,$email,$mobile){
    $this->id = $id;
    $this->username = $username;
    
    $this->password = $password;
    $this->email = $email;
   
    $this->mobile = $mobile;
  }

  public static function create($mysqli,  $username, $password,$email,$mobile){
    // create a new job record in user table and if successful 
    // create a  object and return it otherwise return false;
    $result = false;
    $sql = sprintf("insert into user(username, password,email,mobile) values( '%s', '%s', '%s','%s')", $username,$password,$email,$mobile);
   
    $qresult = $mysqli->query($sql);
    if ($qresult){
      $id = $mysqli->insert_id;
      $job = new user($id,  $username, $password,$email,$mobile);      
      $result = $job;
    }
    return $result;
  }



  public static function find($mysqli,$username,$password){
    // search usertable and locate record with id
    // get that record and create object 
    // return object OR false if we cannot find it
    $result = false;
    $sql = sprintf("select * from user where username='%s' and password='%s'", $username,$password);
   
    $qresult = $mysqli->query($sql);
    if ($qresult){
      if ($qresult->num_rows == 1){
        $row = $qresult->fetch_assoc();
        $job = new user($row['id'], $row['username'], $row['password'], $row['email'],$row['mobile']);
        $result = $job;
      }
    }
    return $result;
  } 

  public static function find1($mysqli,$id){
    // search usertable and locate record with id
    // get that record and create object 
    // return object OR false if we cannot find it
    $result = false;
    $sql = sprintf("select * from user where username='%s'", $id);
    $qresult = $mysqli->query($sql);
    if ($qresult){
      if ($qresult->num_rows == 1){
        $row = $qresult->fetch_assoc();
        $job = new user($row['id'], $row['username'], $row['password'], $row['email'],$row['mobile']);
        $result = $job;
      }
    }
    return $result;
  } 



   


  // ------ setter methods -------
  public function setId($id){
    $this->$id = $id;
  }
  public function setUsername($username){
    $result = true;
    if (is_string($username)){
      $this->username = $username;
    } else $result = false;
    return $result;
  }
  public function setPassword($password){
    $result = true;
    if (is_string($password)){
      $this->password = $password;
    } else $result = false;
    return $result;
  }
  public function setEmail($email){
    $result = true;
    if (is_string($email)){
      $this->email = $email;
    } else $result = false;
    return $result;
  }  
  
  
  public function setMobile($mobile){
    $this->$mobile= $mobile;
  }  
  
  // ------- getter methods ----------
  public function getUsername(){    
    return $this->username;
  }
  public function getPassword(){    
    return $this->password;
  }
  public function getEmail(){
    return $this->email;
  }  
 

  public function getMobile(){
    return $this->mobile;
  }  
 

  // method for debugging  object instance
  public function debug(){
    echo "<pre><code>";
    var_dump($this);
    echo "</code></pre>";
  }

}

?>
