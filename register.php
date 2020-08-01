<?php
$conn = new mysqli("localhost","root","jsl123");
$sql = "create database if not exists user;";
$sql .= "use user;";
$sql .= "create table if not exists usr(name char(12) not null,passwd char(20) not null);";
$sql .= "insert into usr(name,passwd) values ('".$_POST['username']."','".$_POST['passwd']."');";
$result = mysqli_multi_query($conn,$sql);
if($result){
	echo "插入成功<br />";
}else{
	echo "插入失败<br />";
}
$conn->close();
?>
