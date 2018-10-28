     <!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <?php
    include_once("dbconnect.php");
	if(isset($_GET["ma"]))
			{
				$ma = $_GET["ma"];
				$result = mysqli_query($conn, "SELECT nsx_ten FROM nhasanxuat WHERE nsx_ma=$ma");
				$row = mysqli_fetch_row($result);
				$ten = $row[0];

	?>
<div class="container">
	<h2>Cập nhật Nhà sản xuất</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					<div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Tên Nhà sản xuất (*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtTen" id="txtTen" class="form-control" placeholder="Tên Nhà sản xuất" value='<?php echo $ten; ?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnCapNhat" id="btnCapNhat" value="Cập nhật"/>
                              <input type="button" class="btn btn-primary" name="btnBoQua"  id="btnBoQua" value="Bỏ qua" onclick="window.location='quanly_nhasanxuat.php'" />                              	
						</div>
					</div>
				</form>
	</div>
    <?php
	}
	else
	{
		echo '<meta http-equiv="refresh" content="0;URL=quanly_nhasanxuat.php"/>';
	}
	?>

	<?php
    //Kiểm tra có phải submit form hay không?
    if(isset($_POST["btnCapNhat"]))
    {
        $ten = $_POST["txtTen"];
        $loi="";
        if($ten=="")
        {
            $loi.="<li>Mời nhập tên Nhà sản xuất</li>";
        }
        if($loi!="")
        {
            echo "<ul>$loi</ul>";
        }
        else
        {	
        mysqli_query($conn, "UPDATE nhasanxuat SET nsx_ten = '$ten' WHERE nsx_ma=$ma");
        echo '<meta http-equiv="refresh" content="0;URL=quanly_nhasanxuat.php"/>';
        }
    
    }
    ?>
      