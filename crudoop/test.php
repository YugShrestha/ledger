<?php
include("database.php");
$obj= new query;
$condition_arr=array('id'=>1);
//$result=$obj->insertData("user",$condition_arr);
//$result=$obj->getData();
$result=$obj->deleteData('user',$condition_arr );


?>