<?php
class database{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $dbname="crud";

    protected function connect(){
       $this->server;
       $this->usernmae;
       $this->password;
       $this->dbname;
       $conn= new mysqli($this->server,$this->username,$this->password,$this->dbname);
       return $conn;

    }
    
        
    }
    class query extends database{
        public function getData(){
            $sql="select * from  user ";
            $result=$this->connect()->query($sql);
            if($result->num_rows>0){
                $arr=array();
              while($row=$result->fetch_assoc()){
                $arr[]=$row;
                 
                 
              }
              return $arr;
            }else{
                 return 0; 
            }
        }

        public function insertData($table,$condition_array){
          if($condition_array!=""){
            foreach($condition_array as $key=>$value){
              $fieldArr[]=$key;
              $valueArr[]=$value;
            }
             $field=implode(",",$fieldArr);
             $value=implode("','",$valueArr);
             $value="'".$value."'";
             
           $sql="insert into $table($field) values($value) ";
           die($sql);
            
            $result=$this->connect()->query($sql);
          }

        
        }
        public function deleteData($table,$condition_array){
          if($condition_array!=''){
            $sql="delete from $table where ";
            $c=count($condition_array);
            $i=1;
            foreach($condition_array as $key=>$val){
              if($i==$c){
                $sql.="$key='$val'";
              }else{ 
               $sql.="$key='$val' and ";
              }
              $i++;
            }
            $result=$this->connect()->query($sql);
          }

        }
    }

?>