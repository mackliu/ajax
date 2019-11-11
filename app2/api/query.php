<?php
//處理查詢資料的請求
$dsn="mysql:host=localhost;charset=utf8;dbname=ajax";
$pdo=new PDO($dsn,"root","mack");

$class='1'. sprintf("%02d",$_GET["class"]);
/* echo $class;
echo "<br>"; */
//撈出班級學生
$sql="select * from students where substring(`class_num`,1,3)='$class'";
$rows=$pdo->query($sql)->fetchAll();

echo "<tr>";
echo "<td>座號</td>";
echo "<td>姓名</td>";
echo "<td>科系</td>";
echo "<td>生日</td>";
echo "<td>學號</td>";
echo "</tr>";



foreach($rows as $r){
    echo "<tr>";
    echo "<td>".mb_substr($r['class_num'],3,2,"utf8")."</td>";
    echo "<td>".$r['name']."</td>";
    echo "<td>".$r['dept']."</td>";
    echo "<td>".$r['birthday']."</td>";
    echo "<td>".$r['uni_id']."</td>";
    echo "</tr>";
}
?>