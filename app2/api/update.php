<?php
//處理更新資料的請求
include_once "base.php";

$uni_id=$_POST["uni_id"];
$class_num=$_POST["class_num"];
$name=$_POST["name"];
$birthday=$_POST["birthday"];
$nat_id=$_POST["nat_id"];
$addr=$_POST["addr"];
$parent=$_POST["parent"];
$tel=$_POST["tel"];
$dept=$_POST["dept"];
$grad_at=$_POST["grad_at"];

$sql="update students 
      set
         `uni_id`='$uni_id', 
         `class_num`='$class_num', 
         `name`='$name', 
         `birthday`='$birthday', 
         `nat_id`='$nat_id', 
         `addr`='$addr', 
         `parent`='$parent', 
         `tel`='$tel', 
         `dept`='$dept', 
         `grad_at`='$grad_at'
      where
         uni_id='$uni_id'";

echo $pdo->exec($sql);

?>