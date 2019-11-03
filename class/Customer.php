

<?php

class Customer{

  // private properties of this class
  // cannot be 
  private $id = null;
  private $jobname = "";
  private $wid = "";
  private $location = "";
  private $description = "";
  private $cost = "";
  private $dop = null;
  private $dov = null;
  private $username = "";
  private $mobile = "";
  
  // constructor to create new job object
  public function __construct($id, $jobname,  $location,$description,$cost,$dop, $dov,$username,$mobile){
    $this->id = $id;
    $this->jobname = $jobname;
    
    $this->location = $location;
    $this->description = $description;
    $this->cost = $cost;
    $this->dop = $dop;
    $this->dov = $dov;
    $this->username = $username;
    $this->mobile = $mobile;
  }

  public static function create($mysqli, $jobname,  $location,$description,$cost,$dop, $dov,$username,$mobile){
    // create a new job record in customer table and if successful 
    // create a job object and return it otherwise return false;
    $result = false;
    $sql = sprintf("insert into customer(jobname,  location,description,cost,dop, dov,username,mobile) values( '%s', '%s', '%s','%s', '%s', '%s', '%s','%s')", $jobname,  $location,$description,$cost,$dop, $dov,$username,$mobile);
   
    $qresult = $mysqli->query($sql);
    if ($qresult){
      $id = $mysqli->insert_id;
      $job = new Customer($id, $jobname, $location,$description,$cost,$dop, $dov,$username,$mobile);      
      $result = $job;
    }
    return $result;
  }



  public static function find($mysqli,$id){
    // search customer table and locate record with id
    // get that record and create customer object 
    // return customer object OR false if we cannot find it
    $result = false;
    $sql = sprintf("select * from customer where id=%s", $id);
    $qresult = $mysqli->query($sql);
    if ($qresult){
      if ($qresult->num_rows == 1){
        $row = $qresult->fetch_assoc();
        $job = new Customer($row['id'], $row['jobname'], $row['location'], $row['description'],$row['cost'],$row['dop'],$row['dov'],$row['username'],$row['mobile']);
        $result = $job;
      }
    }
    return $result;
  } 

  public static function getAll($mysqli){
    // get all jobs and return as a collection of job objects
  
    $sql = "select * from customer";
    
    
    $result = $mysqli->query($sql); 
    
   
    $arr=array();
    
      
      while($row = $result->fetch_assoc()){
      
       $arr[] = $row;
      
            
      }
   
      return $arr;


  
  }
  public static function getPostedJob($mysqli, $username){
   // get all posted jobs and return as a collection of job objects
    
    $sql = "select * from customer where username = '$username'";
   
  
    $result = $mysqli->query($sql); 
    
   
    $arr=array();
    
      
      while($row = $result->fetch_assoc()){
      
       $arr[] = $row;
      
            
      }
   
      return $arr;

  } 


   


  // ------ setter methods -------
  public function setId($id){
    $this->$id = $id;
  }
  public function setJobname($jobname){
    $result = true;
    if (is_string($jobname)){
      $this->jobname = $jobname;
    } else $result = false;
    return $result;
  }
  public function setUsername($username){
    $result = true;
    if (is_string($username)){
      $this->username = $username;
    } else $result = false;
    return $result;
  }
  public function setLocation($location){
    $result = true;
    if (is_string($location)){
      $this->location = $location;
    } else $result = false;
    return $result;
  }  
  public function setWid($wid): bool{
    $result = false;
    if (is_string($wid) && strlen($wid) == 8){
      $this->wid = $wid;
      $result = true;
    } 
    return $result;
  }
   
  public function setDop($dop){
    // accepts string representing the date and creates a date 
    $this->dop = date_create($dop);
  }
  public function setDov($dov){
   // date of validation
    $this->dov = $dov;
  }
  public function setDescription($description){
    $this->$description= $description;
  }  
  
  public function setMobile($mobile){
    $this->$mobile= $mobile;
  }  
  public function setCost($cost){
    $this->$cost= $cost;
  }  
  // ------- getter methods ----------
  public function getUsername(){    
    return $this->username;
  }
  public function getJobname(){    
    return $this->jobname;
  }
  public function getLocation(){
    return $this->location;
  }  
  public function getDop(){
    // accepts string representing the date and creates a date 
    return  $this->dop;
  }
  public function getDov(){
   // date of validation
    return $this->dov ;
  }
  public function getDescription(){
    return $this->description;
  }  

  public function getMobile(){
    return $this->mobile;
  }  
  public function getCost(){
    return $this->cost;
  }  

  public function getId(){
    return $this->id;
  }

  // method for debugging  object instance
  public function debug(){
    echo "<pre><code>";
    var_dump($this);
    echo "</code></pre>";
  }

}

?>
