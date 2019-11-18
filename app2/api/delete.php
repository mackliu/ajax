<?php
//處理刪除資料的請求
include_once "base.php";

$id=$_POST['id'];
$sql="delete from students where uni_id='$id'";

echo $pdo->exec($sql);
echo "你刪除的是學號".$id."的學生";


?>