<?php
//處理新增資料的請求
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

$sql="insert into students (`uni_id`, `class_num`, `name`, `birthday`, `nat_id`, `addr`, `parent`, `tel`, `dept`, `grad_at`) values('$uni_id', '$class_num', '$name', '$birthday', '$nat_id', '$addr', '$parent', '$tel', '$dept', '$grad_at')";

echo $pdo->exec($sql);


?>