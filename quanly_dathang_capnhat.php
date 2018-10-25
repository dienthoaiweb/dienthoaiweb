     <!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <?php
    include_once("dbconnect.php");
	if(isset($_GET["ma"]))
			{
				$ma = $_GET["ma"];
				$result = mysqli_query($conn, "SELECT lsp_ten, lsp_mota FROM loaisanpham WHERE lsp_ma=$ma");
				$row = mysqli_fetch_row($result);
				$ten = $row[0];
				$moTa =$row[1];

	?>
<div class="container">
	<h2>Cập nhật đơn đặt hàng</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					<div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Ngày lập:  </label>
							<div class="col-sm-10">
							      <input type="date" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $ten; ?>'>
							</div>
					</div>
                    <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Ngày giao:  </label>
							<div class="col-sm-10">
							      <input type="date" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $ten; ?>'>
							</div>
					</div>
                    <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Nơi giao:  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $ten; ?>'>
                                  
							</div>
					</div>
                    <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Trang thái thanh toán  </label>
							<div class="col-sm-10">
							      <input type="checkbox" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $ten; ?>'>
							</div>
					</div>
                    <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Hình thức thanh toán:  </label>
							<div class="col-sm-10">
							      <input type="date" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $ten; ?>'>
							</div>
					</div>
                    <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Tên đăng nhập  </label>
							<div class="col-sm-10">
							      <input type="date" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $ten; ?>'>
							</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnCapNhat" id="btnCapNhat" value="Cập nhật"/>
                              <input type="button" class="btn btn-primary" name="btnBoQua"  id="btnBoQua" value="Bỏ qua" onclick="window.location='quanlyloaisanpham'" />                              	
						</div>
					</div>
				</form>
	</div>
    <?php
	}
	else
	{
		echo '<meta http-equiv="refresh" content="0;URL=quanly_dathang_capnhat.php"/>';
	}
	?>

	<?php
    //Kiểm tra có phải submit form hay không?
    if(isset($_POST["btnCapNhat"]))
    {
        $ten = $_POST["txtTen"];
        $moTa = $_POST["txtMoTa"];
        $loi="";
        if($ten=="")
        {
            $loi.="<li>Mời nhập tên loại sản phẩm</li>";
        }
        if($loi!="")
        {
            echo "<ul>$loi</ul>";
        }
        else
        {	
        mysqli_query($conn, "UPDATE loaisanpham SET lsp_ten = '$ten', lsp_mota='$moTa' WHERE lsp_ma=$ma");
        echo '<meta http-equiv="refresh" content="0;URL=quanly_dathang.php"/>';
        }
    
    }
    ?>
      