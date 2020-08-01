<?php
$conn = new mysqli("localhost","root","jsl123","user");
$sql = "select * from usr";
$result = mysqli_query($conn,$sql);
if($result->num_rows>0){
	while($row = mysqli_fetch_array($result))
	{
		echo "账户：".$row['name']."<br /> 密码:".$row['passwd']."<br />";

	}
}else{
	echo "不存在";
}
$conn->close();
?>
