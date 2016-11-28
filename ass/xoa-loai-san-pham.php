<?php
require("includes/config.php");

$malsp = $_GET['malsp'];

if($malsp != ''){
	mysql_query("delete from loaisanpham where MaLSP='$malsp'");
	header("location:index.php");
	exit();
}
?>