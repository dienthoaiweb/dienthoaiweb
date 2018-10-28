<?php
include_once("dbconnect.php");
$query="SELECT kh_email, kh_ten, kh_diachi, kh_dienthoai FROM khachhang WHERE kh_tendangnhap ='".$_SESSION['tendangnhap']."'";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$tendangnhap=$_SESSION['tendangnhap'];
$email=$row['kh_email'];
$hoten=$row['kh_ten'];
$diachi=$row['kh_diachi'];
$dienthoai=$row['kh_dienthoai'];
// Cập nhật KH khi nhấn vào nút cập nhật 
if(isset($_POST['btnCapNhat'])){
	if($_POST['txtMatKhau1']!="")
	{
		$matkhau=$_POST['txtMatKhau1'];
	}
	$hoten=$_POST['txtHoTen'];
	$diachi=$_POST['txtDiaChi'];
	$dienthoai=$_POST['txtDienThoai'];
	
	$kiemtra=kiemTra();
	if($kiemtra="")
	// Khách hàng có thay đổi mật khẩu
	{
		if($_POST['txtMatKhau1']!="")
		{
			mysqli_query($conn, "UPDATE khachhang set kh_ten'".$hoten."',kh_diachi='".$diachi."',kh_dienthoai='".$dienthoai."',kh_matkhau='".md5($_POST['txtMatKhau'])."' where kh_tendangnhap = '".$_SESSION['tendangnhap']."'")or die(mysqli_error($conn));
		}
	// Khách hàng ko thay đổi mật khẩu	
	else
	{
		mysqli_query($conn, "UPDATE khachhang set kh_ten'".$hoten."',kh_diachi='".$diachi."',kh_dienthoai='".$dienthoai."',kh_matkhau='".md5($_POST['txtMatKhau'])."' where kh_tendangnhap = '".$_SESSION['tendangnhap']."'")or die(mysqli_error($conn));
	}
	echo "<scrip> alert('Cap nhat thanh cong');window.location='index.php'; </script>";
}
	else
	{
		echo $kiemtra;
	}
}
?>
<div class="container">
	
<h2>Cập nhật thông tin cá nhân</h2>

			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					<div class="form-group">	    
                      <label for="lblTenDangNhap" class="col-sm-2 control-label">Tên đăng nhập(*):  </label>
						<div class="col-sm-10">
						  <label class="form-control" style="font-weight:400"><?php  echo $tendangnhap; ?></label>
					     </div>
                     </div>
                           
                         <div class="form-group">   
                            <label for="lblEmail" class="col-sm-2 control-label">Email(*):  </label>
							<div class="col-sm-10">
							       <label class="form-control" style="font-weight:400"><?php $email; ?></label>
							</div>
                          </div>  
                          
                           <div class="form-group"> 
                            <label for="lblMatKhau1" class="col-sm-2 control-label">Mật khẩu(*):  </label>
							<div class="col-sm-10">
							      <input type="password" name="txtMatKhau1" id="txtMatKhau1" class="form-control"/>
							</div>
                            </div>
                            
                             <div class="form-group"> 
                            <label for="lblMatKhau2" class="col-sm-2 control-label">Nhập lại mật khẩu(*):  </label>
							<div class="col-sm-10">
							      <input type="password" name="txtMatKhau2" id="txtMatKhau2" class="form-control"/>
							</div>
                            </div>
                            
                              <div class="form-group">                         
                            <label for="lblHoten" class="col-sm-2 control-label">Họ tên(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtHoTen" id="txtHoTen" value="<?php $hoten ?>" class="form-control" placeholder="Giá"/>
							</div>
                            </div>
                           
                             <div class="form-group"> 
                             <label for="lblDiaChi" class="col-sm-2 control-label">Địa chỉ(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDiaChi" id="txtDiaChi" value="<?php $diachi ?>" class="form-control" placeholder="Địa chỉ"/>
							</div>
                            </div>
                            
                            <div class="form-group"> 
                            <label for="lblDienThoai" class="col-sm-2 control-label">Điện thoại(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDienThoai" id="txtDienThoai" value="<?php $dienthoai ?>" class="form-control" placeholder="Điện thoại" />
							</div>
                            </div>

					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnCapNhat" id="btnCapNhat" value="Cập nhật"/>
                              	
						</div>
					</div>
				</form>
</div>






