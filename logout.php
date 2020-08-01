<?php
$conn = new mysqli("localhost","root","jsl123","user");
$sql = "delete from usr where name ='".$_POST['username']."' and passwd='".$_POST['passwd']."'";
$result = mysqli_query($conn,$sql);
if($result){
	echo "删除成功<br />";
}else{
	echo "删除失败<br />";
}
$conn->close();
?>
