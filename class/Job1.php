<?php
class Job1{
//设置类私有属性
private $dbname;
private $sql;
private $link;
private $host;
private $user;
private $pwd;
private $charset;

//设置构造函数,初始化
public function __construct($dbname,$host="localhost",$user="Rafael",$pwd="",$charset="SET NAMES UTF8")
{
    $this->dbname=$dbname;
    $this->host=$host;
    $this->user=$user;
    $this->pwd=$pwd;
    $this->charset=$charset;

    $this->connect();
}
//设置方法,链接数据库,并设置字符集
private function connect()
{
    $this->link=@mysqli_connect($this->host,$this->user,$this->pwd,$this->dbname)or die("连接失败".$this->error($this->link));
//        if($this->link)
//        {
//            echo "yes";
//        }
    mysqli_query($this->link,$this->charset);
}
//设置SQL执行方法
public function query($sql)
{
    return mysqli_query($this->link,$sql);

}

function fetch($rt)
{
    return mysqli_fetch_assoc($rt);
}


//SQL查询
public function select($tablename,$where="",$column="",$inner="",$order="",$limit="",$group="")
{
    $tablename=self::getTableName($tablename);
    $sql="select ".$column." from ".$tablename;
    
    

    if($inner)
    {
        $sql.="$inner";
    }
    if($where)
    {
        $sql.=" where $where";
    }



    if($order)
    {
        $sql.=" order by $order";
    }
    if($limit)
    {
        $sql.=" limit $limit";
    }
    if($group)
    {
        $sql.=" group by $group";
    }
//
      // echo $sql;
    //die;
    return $this->query($sql);

}


private function getTableName($tablename)
{
    return $tablename;
}


 //SQL获取一条信息
 public function get_one($tablename,$where="",$column="*")
 {
     $tablename=self::getTableName($tablename);
     $sql="select ". $column ." from ". $tablename;
   


     if($where)
     {
         $sql.=" where $where";
     }

      //echo $sql;
        //die;

     $rt=$this->query($sql);
//
     $row=$this->fetch($rt);

     return $row;

 }
 public function get_all($tablename,$where="",$column="*",$inner="",$order="",$limit="",$group="")
 {
//        $tablename=self::getTableName($tablename);
     $res=$this->select($tablename,$where,$column,$inner,$order,$limit,$group);
     $arr=array();
     while($row=$this->fetch($res))
     {
         $arr[]=$row;
     }

     return $arr;


 }


 
   //back_info返回信息方法
   function back_info($msg,$url)
   {
       echo '<script>alert("'.$msg.'");window.location.href="'.$url.'";</script>';die;
   }



     //SQL增加
     public function insertdata($tablename,$data)
     {
         $tablename=self::getTableName($tablename);
 //               echo "字段名".$k."---字段值".$v."<br>";
         foreach($data as $k=>$v)
         {
             if(is_null($v))
             {
                 $fields[]=$k;//把提取来的字段名,传递给$fields
                 $values[]='null';
             }else
             {
                 $fields[]="`".$k."`";//加入重音符,防止被注入
                 $values[]="'".$v."'";//给字段的值加入单引号
             }
         }
 
 
         //数组拆分成字符串
         $fieldlist=implode(',',$fields);
         $valuelist=implode(',',$values);
         //执行SQL语句
         $sql="insert into ".$tablename."(".$fieldlist.") values(".$valuelist.")";
     
 
         return $this->query($sql);
     }
     //SQL修改
     public function updatedata($tablename,$data,$where)
     {
         $tablename=self::getTableName($tablename);
 //            判断是否是数组
         if(is_array($data)){
 //            如果是数组,执行循环取值
             foreach($data as $k=>$v) {
 
                 if (is_null($v)) {
                     $datalist[] = $k."=null";//把提取来的字段名,传递给$fields
                 } else {
                     $datalist[] = "`" . $k . "`='".$v."'";//加入重音符,防止被注入
 
                 }
             }
 
         }
         //数组拆分成字符串
         $data=implode(',',$datalist);
 
         //执行SQL语句
         $sql="update ".$tablename." set ".$data ." where ". $where;
 
 //        echo $sql;
 //        die;
         return $this->query($sql);
     }

}
