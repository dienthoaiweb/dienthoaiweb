<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
if(isset($_GET["taikhoan"])&&isset($_GET["ma"]))
{
	$taikhoan=$_GET["taikhoan"];
	$ma=$_GET["ma"];
	$result=mysqli_query($conn,"select * from khachhang where kh_tendangnhap='$taikhoan' and kh_makichhoat='$ma'") ;
	if(mysqli_num_rows($result)>0)
	{
		mysqli_query($conn,"update khachhang set kh_trangthai=1 where kh_tendangnhap ='$taikhoan'") ;
		echo"Chúc mừng bạn kích hoạt thành công ! Bây giờ bạn đã có thể đăng nhập!";
	}	
	else
	{
		echo"Mã kích hoạt không đúng!";
	}
}
?>
</body>
</html>