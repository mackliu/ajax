<?php

include_once "base.php";

$uni_id=$_GET['uni_id'];
$sql="select * from students where uni_id='$uni_id'";

//取出學生資料
$stu=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);


//轉成json格式
echo json_encode($stu);


?>
