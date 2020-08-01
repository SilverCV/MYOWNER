<?php
$conn = new mysqli("localhost","root","jsl123","user");
$sql = "select * from usr where name ='".$_POST['username']."' and passwd='".$_POST['passwd']."'";
$result = mysqli_query($conn,$sql);
if($result->num_rows>0){
	while($row = mysqli_fetch_array($result))
	{
		echo "登录成功<br />";
		echo "账户：".$row['name']."<br /> 密码:".$row['passwd'];

	}
}else{
	echo "不存在";
}
$conn->close();
?>
