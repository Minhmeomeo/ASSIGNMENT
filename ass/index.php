<?php
require("includes/config.php");
require("includes/head.php");

$tenlsptim = $_POST['tenlsptim'];
$tenlsp = $_POST['tenlsp'];

if(isset($_POST['ok'])){
	if($tenlsp != ''){
		mysql_query("insert into loaisanpham(TenLSP) values('$tenlsp')");
		echo "<div class='loithe'> Thêm Tên Loại Sản Phẩm ".$tenlsp." Thành Công :)</div>";
	}
}

?>

<form action="index.php" method="post" enctype="multipart/form-data">
  <div class="wrap">
		<div class="avatar">
			Loại Sản Phẩm
		</div>
		<input type="text" name="tenlsp" placeholder="Tên Loại Sản Phẩm" required value="<?php echo $_POST['tenlsp']; ?>">
			<br/>
		<button type="submit" name="ok">Thêm</button>
	</div>
</form>

<br/>

<script>
function xacnhan(){
	if(!window.confirm("Bạn có muốn xóa không?")){
		return false;
	}else{
		return true;
	}	
}
</script>

<link rel="stylesheet" href="css/stylesearch.css" type="text/css" />

<form action="index.php" method="post" enctype="multipart/form-data">
	<div class="field" id="searchform">
	  <input type="text" name="tenlsptim" placeholder="Nhập Tên Loại Sản Phẩm Cần Tìm?" />
	  <button type="submit" name="oktim">Tìm Kiếm</button>
	</div>
</form>

<script class="cssdeck" src="js/jquery.min.js"></script>

<table width="100%" align="center">
	<tr>
		<th>Mã Loại Sản Phẩm</th>
        <th>Tên Loại Sản Phẩm</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
	
<?php
	if(isset($_POST['oktim'])){
		$sql="select * from loaisanpham where TenLSP like '%$tenlsptim%' order by MaLSP ASC";
		$query=mysql_query($sql);
	}else{
		$sql="select * from loaisanpham order by MaLSP ASC";
		$query=mysql_query($sql);
	}
	if(mysql_num_rows($query) == 0){
		echo "<tr>";
		echo "<td colspan='13'><b>Không Có Dữ Liệu!</b></td>";
		echo "</tr>";
	}else{
		while($data=mysql_fetch_assoc($query)){
			echo "<tr>";
				echo "<td>$data[MaLSP]</td>";
				echo "<td>$data[TenLSP]</td>";
				echo "<td><a href='sua-loai-san-pham.php?malsp=$data[MaLSP]'>Sửa</a></td>";
				echo "<td><a href='xoa-loai-san-pham.php?malsp=$data[MaLSP]' onclick='return xacnhan();'>Xóa</a></td>";
			echo "</tr>";
		}
	}
?>
	
</table>

<script src="js/index.js"></script>

<?php
require("includes/end.php");
?>