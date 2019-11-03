<?php

class Tradesmen{

  // private properties of this class
  // cannot be 
  private $tid = null;
  private $tname = "";
  private $wid = "";
  private $sex = "";
  private $age = "";
  private $totalcost = "";
  private $laborcost = "";
  private $materialcost = "";
  private $tvaliddate = "";
  private $mobile = "";
  private $status = "";
  
  // constructor to create new job object
  public function __construct($tid, $tname,  $wid,$sex,$age,$totalcost, $laborcost,$materialcost,$tvaliddate,$mobile,$status){
    $this->tid = $tid;
    $this->tname = $tname;
    $this->wid=$wid;
    $this->sex = $sex;
    $this->age = $age;
    $this->totalcost = $totalcost;
    $this->laborcost = $laborcost;
    $this->materialcost = $materialcost;
    $this->tvaliddate = $tvaliddate;
    $this->mobile = $mobile;
    $this->status = $status;
  }

  public static function create($mysqli, $tname,  $wid,$sex,$age,$totalcost, $laborcost,$materialcost,$tvaliddate,$mobile,$status){
    // create a new job record in customer table and if successful 
    // create a job object and return it otherwise return false;
    $result = false;
    $sql = sprintf("insert into tradesmen(tname, wid,sex,age,totalcost, laborcost,materialcost,tvaliddate,mobile) values( '%s', '%s', '%s','%s', '%s', '%s', '%s','%s','%s')", $tname,  $wid,$sex,$age,$totalcost, $laborcost,$materialcost,$tvaliddate,$mobile);
    $qresult = $mysqli->query($sql);
    if ($qresult){
      $tid = "";
      $job = new Tradesmen($tid, $tname,  $wid,$sex,$age,$totalcost, $laborcost,$materialcost,$tvaliddate,$mobile,$status);      
      $result = $job;
    }
    return $result;
  }


  public static function confirm($mysqli,$tname,  $wid,$sex="",$age="",$totalcost="", $laborcost="",$materialcost="",$tvaliddate="",$mobile="",$status){
    // create a new job record in customer table and if successful 
    // create a job object and return it otherwise return false;
    $result = false;
    $sql = sprintf("update tradesmen set `status`='%s' where wid = '$wid' and tname = '$tname' ", $status) ;
    
 
   
    $qresult = $mysqli->query($sql);
    if ($qresult){
      $tid="";
      $job = new Tradesmen($tid, $tname,  $wid,$sex,$age,$totalcost, $laborcost,$materialcost,$tvaliddate,$mobile,$status);      
      $result = $job;
    }
    return $result;
  }


  public static function find($mysqli,$id){
    // search customer table and locate record with id
    // get that record and create customer object 
    // return customer object OR false if we cannot find it
    $result = false;
    $sql = sprintf("select * from tradesmen where id=%s", $id);
    $qresult = $mysqli->query($sql);
    if ($qresult){
      if ($qresult->num_rows == 1){
        $row = $qresult->fetch_assoc();
        $job = new Tradesmen($row['id'], $row['jobname'], $row['location'], $row['description'],$row['cost'],$row['dop'],$row['dov'],$row['username'],$row['mobile']);
        $result = $job;
      }
    }
    return $result;
  } 

  public static function getAll($mysqli){
    // get all jobs and return as a collection of job objects
  
    $sql = "select * from tradesmen";
    
    
    $result = $mysqli->query($sql); 
    
   
    $arr=array();
    
      
      while($row = $result->fetch_assoc()){
      
       $arr[] = $row;
      
            
      }
   
      return $arr;


  
  }
  public static function getApplyedJob($mysqli, $tname){
   // get all posted jobs and return as a collection of job objects
    
    $sql = "select * from tradesmen where tname = '$tname'";
    
  
    $result = $mysqli->query($sql); 
   
    
   
    $arr=array();
    
      
      while($row = $result->fetch_assoc()){
      
       $arr[] = $row;
      
            
      }
   
      return $arr;

  } 


  public static function getApplyedDetail($mysqli, $wid){
    // get all posted jobs and return as a collection of job objects
     
     $sql = "select * from tradesmen where wid = $wid";
    
     
      
     $result = $mysqli->query($sql); 
    
     
    
     $arr=array();
     
       
       while($row = $result->fetch_assoc()){
       
        $arr[] = $row;
       
             
       }
    
       return $arr;
 
   } 
 


  // ------ setter methods -------
  public function setTid($tid){
    $this->$tid = $tid;
  }
  public function setTname($tname){
    $result = true;
    if (is_string($tname)){
      $this->tname = $tname;
    } else $result = false;
    return $result;
  }
  public function setSex($sex){
    $result = true;
    if (is_string($sex)){
      $this->sex = $sex;
    } else $result = false;
    return $result;
  }
  public function setAge($age){
    $result = true;
    if (is_string($age)){
      $this->age = $age;
    } else $result = false;
    return $result;
  }  
  public function setWid($wid){
    $result = false;
    if (is_string($wid)){
      $this->wid = $wid;
    } else $result = true;
    
    return $result;
  }
   
  public function setTotalcost($totalcost){
    // accepts string representing the date and creates a date 
    $this->totalcost = $totalcost;
  }
  public function setLaborcost($laborcost){
   // date of validation
    $this->laborcost = $laborcost;
  }
  public function setMaterialcost($materialcost){
    $this->materialcost= $materialcost;
  }  
  
  public function setMobile($mobile){
    $this->mobile= $mobile;
  }  
  public function setTvaliddate($tvaliddate){
    $this->$tvaliddate= $tvaliddate;
  }  
  // ------- getter methods ----------
  public function getTname(){    
    return $this->tname;
  }
  public function getSex(){    
    return $this->sex;
  }
  public function getAge(){
    return $this->age;
  }  
  public function getWid(){
   
    return  $this->wid;
  }
  public function getTotalcost(){
  
    return $this->totalcost ;
  }
  public function getLaborcost(){
    return $this->laborcost;
  }  

  public function getMaterialcost(){
    return $this->materialcost;
  }  
  public function getTvaliddate(){
    return $this->tvaliddate;
  }  

  public function getTid(){
    return $this->tid;
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
