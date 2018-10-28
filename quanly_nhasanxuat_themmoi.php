    <!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  		include_once("dbconnect.php");		
		if(isset($_POST["btnThemMoi"]))
		{
				$ten = $_POST["txtTen"];
		
				$loi="";
				if($ten=="")
				{
					$loi.="<li>Mời nhập tên nhà sản xuất</li>";
				}
				if($loi!="")
				{
					echo "<ul>$loi</ul>";
				}
				else
				{
					$sq="Select * from nhasanxuat where nsx_ten='$ten'";
					$result = mysqli_query($conn,$sq);
					if(mysqli_num_rows($result)==0)
					{
						
					   mysqli_query($conn, "INSERT INTO nhasanxuat (nsx_ten) VALUES ('$ten')");
					   echo '<meta http-equiv="refresh" content="0;URL=quanly_nhasanxuat.php"/>';
					}
					else
					{
						echo "<li>Trùng tên nhà sản xuất";
					}
				}

		}
        ?>
<div class="container">
	<h2>Thêm nhà sản xuất</h2>

	 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					<div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Tên nhà sản xuất (*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtTen" id="txtTen" class="form-control" placeholder="Tên nhà sản xuất" value='<?php echo isset($_POST["txtTen"])?($_POST["txtTen"]):"";?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnThemMoi" id="btnThemMoi" value="Thêm mới"/>
                              <input type="button" class="btn btn-primary" name="btnBoQua"  id="btnBoQua" value="Bỏ qua" onclick="window.location='quanly_nhasanxuat.php'" />
                              	
						</div>
					</div>
                 
				</form>
		</div>
