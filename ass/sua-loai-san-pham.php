<?php
require("includes/config.php");
require("includes/head.php");

$malsp = $_POST['malsp'];
$tenlsp = $_POST['tenlsp'];

if(isset($_POST['ok'])){
	if($malsp != '' && $tenlsp != ''){
		mysql_query("update loaisanpham set TenLSP='$tenlsp' where MaLSP='$malsp'");
		header("location:index.php");
		exit();
	}
}
$sql="select * from loaisanpham where MaLSP='$_GET[malsp]'";
$query=mysql_query($sql);
$data=mysql_fetch_assoc($query);
?>

<form action="sua-loai-san-pham.php" method="post" enctype="multipart/form-data">
  <div class="wrap">
		<div class="avatar">
			Loại Sản Phẩm
		</div>
		<input type="text" name="malsp" placeholder="Mã Loại Sản Phẩm" required readonly="false" value="<?php echo $_GET['malsp']." (Không Sửa)"; ?>" style="color:#888888;">
		<div class="bar">
			<i></i>
		</div>
		<input type="text" name="tenlsp" placeholder="Tên Loại Sản Phẩm" required value="<?php echo $data['TenLSP']; ?>">
			<br/>
		<button type="submit" name="ok">Sửa</button>
	</div>
</form>

<?php
require("includes/end.php");
?>