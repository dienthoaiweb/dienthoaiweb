<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include_once ('dbconnect.php');

mysqli_query ($conn, "INSERT TO hinhthucthanhtoan (httt_ten) VALUE ('Tien mat')")
or die (mysqli_connect_error());

mysqli_query ($conn, "INSERT TO hinhthucthanhtoan (httt_ten) VALUE ('Chuyen khoan')")
or die (mysqli_connect_error());

mysqli_query ($conn, "INSERT TO hinhthucthanhtoan (httt_ten) VALUE ('Paypal')")
or die (mysqli_connect_error());
?>
</body>
</html>