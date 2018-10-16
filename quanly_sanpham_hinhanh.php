     <!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script language="javascript">
	function deleteConfirm(){
		if(confirm("Bạn có chắc chắn muốn xóa!")){
			return true;
		}
		else{
			return false;
		}
	}
	
</script>
 <?php
 include_once('dbconnect.php');
 if(isset($_GET['ma']))
 {
	 $sp_ma = $_GET['ma'];
	 $sql = "select sp_ten from sanpham where sp_ma='$sp_ma'" ;
	 $rs = mysqli_query	($conn, $sql);
	 $row = mysqli_fetch_row($rs);
	 $ten = $row[0];
 }
 else
 {
	 echo '<meta http-equiv="refresh" content="0;URL=quanly_sanpham.php"/>';
 }


		 
if(isset($_GET['mahinh']))
 {
	 $mahinh = $_GET["mahinh"];
	 $ketqua = mysqli_query($conn,"Select * from hinhsanpham where hsp_ma=$mahinh");
		$row= mysqli_fetch_array($ketqua,MYSQLI_ASSOC);
	 $filecanxoa = $row['hsp_tentaptin'];
	 $sp_ma=$row['sp_ma'];
	 unlink("product-imgs/".$filecanxoa);
	 mysqli_query($conn,"Delete from hinhsanpham where hsp_ma=$mahinh");
	 echo '<meta http-equiv="refresh" content="0;URL=quanly_sanpham_hinhanh.php?ma='.$sp_ma.'"/>';
 }
 	 ?>
 	<h2>Quản lý hình ảnh sản phẩm</h2>
		<div class="container">
			 	<form  id="frmHinhAnh" class="form-horizontal" name="frmHinhAnh" method="post" action="" enctype="multipart/form-data" role="form">
					<div class="form-group">
                        <label for="txtTen" class="col-sm-2 control-label">Mã sản phẩm(*):  </label>
						<div class="col-sm-10">
							<input type="text" name="txtMa" id="txtMa" class="form-control" placeholder="Mã sản phẩm" value='<?php echo $sp_ma; ?>' readonly="readonly"/>
						</div>
            		</div>	
                    <div class="form-group">    
                        <label for="txtTen" class="col-sm-2 control-label">Tên sản phẩm(*):  </label>
						<div class="col-sm-10">
						     <input type="text" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $ten; ?>' readonly="readonly"/> 
						</div>
                    </div>    
                     <div class="form-group">    
                        <label for="" class="col-sm-2 control-label">Hình ảnh(*):  </label>
						<div class="col-sm-10">
							<input type="file" name="fileHinhAnh" id="fileHinhAnh" class="form-control"/>
                            <input type="submit"  class="btn btn-primary" name="btnLuu" id="btnLuu" value="Lưu hình ảnh"/>        
						</div>
                     </div>       
 
                    <!--Danh sach hinh anh-->
                     <div class="col-sm-offset-2 col-sm-12">
						<div class="col-sm-1">
                        	<label class="control-label">STT</label>
                        </div>
                        <div class="col-sm-2">
                        	<label class="control-label">Hình ảnh</label>
                        </div>
                        <div class="col-sm-1">
                        	<label class="control-label">Xóa</label>
                        </div>
                    </div> <!-- <div class="col-sm-offset-2 col-sm-12">1 hang bang hinh anh-->
                   <!--Row du lieu-->
                   <?php
		  				$query = "select hsp_ma, hsp_tentaptin from hinhsanpham where sp_ma=".$sp_ma;
						$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
						$stt = 1;
						while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
						{
					?>
							<div class='col-sm-offset-2 col-sm-12'>
							  <div class='col-sm-1'>
								<?php echo $stt; ?>
								</div>
							  <div class='col-sm-2'>
								<img src="product-imgs/<?php echo $row['hsp_tentaptin']; ?>" width="100px"/>
							  </div>
							  <div class='col-sm-3'>
								  <a onclick="return deleteConfirm()" 
                                  href="quanly_sanpham_hinhanh.php?mahinh=<?php echo $row['hsp_ma'];  ?>">
								  <img src='images/delete.png' border='0' /></a>
							  </div>
                              
							</div>
                            <div class='col-sm-offset-2 col-sm-4'>
                           		<div><hr /></div>
                           </div>
                          <?php
								$stt++;
						}
		  				?>
				<!-- <div class="form-group"> -Danh sach hinh anh-->

                   <div class="col-sm-offset-2 col-sm-12">
                   		<div class="col-sm-1">
						     <a href="quanly_sanpham.php"> Đóng</a>
                        </div>
              		</div>
 <?php 
 
 if(isset($_POST['btnLuu']))
 {
	 $sp_ma = $_POST['txtMa'];
	 $taptin = $_FILES['fileHinhAnh'] ;
	 if($taptin['type']=="image/jpg" || $taptin['type']=="image/jpeg" || $taptin['type']=="image/png" || $taptin['type']=="image/gif")
	 {
		 if(  $taptin['type']<=644000)
		 {
			 $tentaptin=$sp_ma."_".$taptin['name'];
			 copy($taptin['tmp_name'],"product-imgs/".$tentaptin);
			 $sqlstring="insert into hinhsanpham(hsp_tentaptin, sp_ma) values('$tentaptin', '$sp_ma')";
			 $rs=mysqli_query($conn,$sqlstring);
			 if($rs)
			 {
				 echo "<script>alert('Uploaded :3');</script>";
				 echo '<meta http-equiv="refresh" content="0;URL=quanly_sanpham_hinhanh.php?ma='.$sp_ma.'"/>';
			 }
			 else
			 {
				  echo "<script>alert('Sorry can not Upload :v');</script>";
				  echo '<meta http-equiv="refresh" content="0;URL=quanly_sanpham_hinhanh.php?ma='.$sp_ma.'"/>';
			 }
		 }
		 else
		 {
			 echo "Your image too large";
		 }
	 }
		 else
		 {
			 echo "This is not image file";
		 }
		 }
		 
		 

 ?>
				</form>
		</div><!--<div class="container">-->


