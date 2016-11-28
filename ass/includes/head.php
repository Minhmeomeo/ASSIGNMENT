<?php
require("includes/config.php");

echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">' .
"\n" . '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi">' .
"\n" . '<head>' .
"\n" . '<title>PHONE SHOP</title>' . 
"\n" . '<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8"/>' .
"\n" . '<meta http-equiv="Content-Style-Type" content="text/css" />' .
"\n" . '<meta http-equiv="Content-Language" content="vi" />' .
"\n" . '<meta name="robots" content="noodp,index,follow" />' . 
"\n" . '<meta name="language" content="Vietnamese" />' .
"\n" . '<link rel="stylesheet" href="css/style.css" type="text/css" />' .
"\n" . '<link rel="shortcut icon" href="' . $set['homeurl'] . '/images/favicon.ico" />' .
"\n" . '<meta name="revisit-after" content="1 days" />' .
"\n" . '</head>' .
"\n" . '<body>' . "\n";

echo '<div class="header">minhntph04144</div>';

echo '<nav id="nav-1">
	<a class="link-1" href="khach-hang.php">Khách Hàng</a>
	<a class="link-1" href="hoa-don.php">Hóa Đơn</a>
	<a class="link-1" href="chi-tiet-hoa-don.php">Chi Tiết Hóa Đơn</a>
	<a class="link-1" href="san-pham.php">Sản Phẩm</a>
	<a class="link-1" href="index.php">Loại Sản Phẩm</a>
</nav>';

?>