<?php

$roomNo = $_GET['roomNo'];
$type = $_GET['type'];
$link=mysqli_connect('localhost','root','');
if(!$link){
	exit('数据库连接失败');
}
mysqli_set_charset($link,'utf8');
mysqli_select_db($link,'hotel');
$sql = "select * from price where price='$price'";
$obj = mysqli_query($link, $sql); 
$rows=mysqli_fetch_assoc($obj);
$price = $rows['price'];
$sql = "update room set type='$type' where roomNo='$roomNo'";
$res = mysqli_query($link,$sql);
if($res && mysqli_affected_rows($link)){
	echo "<script> alert('修改成功');parent.location.href='http://localhost:8080/logistics.php'; </script>"; 
}else{
	echo "<script> alert('修改失败');parent.location.href='http://localhost:8080/logistics.php'; </script>"; 
}
mysqli_close($link);