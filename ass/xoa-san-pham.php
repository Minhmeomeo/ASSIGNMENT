<?php
require("includes/config.php");

$MaSP = $_GET['MaSP'];

if($MaSP != ''){
	mysql_query("delete from sanpham where MaSP='$MaSP'");
	header("location:san-pham.php");
	exit();
}
?>