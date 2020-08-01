<?php
$conn = new mysqli("localhost","root","jsl123","user");
$sql = "update usr set  passwd='".$_POST['passwd']."' where name ='".$_POST['username']."'";
$look = "select * from usr where name ='".$_POST['username']."'";
$result = mysqli_query($conn,$look);
mysqli_query($conn,$sql);
if($result->num_rows > 0){
	echo "修改成功";
}else{
	echo "不存在";
}
$conn->close();
?>
