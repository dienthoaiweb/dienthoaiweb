<link rel="stylesheet" type="text/css" href="style.css"/>

<?php
include_once('dbconnect.php');
if (isset($_POST['btnLogin'])) {
    $tendangnhap = trim($_POST["txtTenDangNhap"]);
    $matkhau = trim($_POST["txtMatKhau"]);
    
    $loi = "";
   	if($tendangnhap==""){
		$loi .= "Vui lòng nhập tên đăng nhập!<br/>";
	}
	if($matkhau==""){
		$loi .= "Vui lòng nhập mật khẩu!<br/>";
	}

	if($loi != ""){
		echo "<span class=\"cssLoi\">".$loi."</span>";
	}
	else{
		$tendangnhap=mysqli_real_escape_string($conn,$tendangnhap);
		$matkhau = md5($matkhau);
		$result = mysqli_query($conn, "SELECT * FROM khachhang WHERE kh_tendangnhap='$tendangnhap' AND kh_matkhau='$matkhau'") or die(mysql_error());
		if(mysqli_num_rows($result)==1){
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$_SESSION["tendangnhap"] = $tendangnhap;
			$_SESSION["quantri"] = $row["kh_quantri"];
			echo "<script language='javascript'>window.location='index.php'</script>";
		}
		else{
			echo 'Đăng nhập không thành công';
		}
	}
}
?>
<h1>Đăng nhập</h1>
<form id="form1" name="form1" method="POST" action="">
	<div class="row">
    <div class="form-group">
						    
        <label for="txtTenDangNhap" class="col-sm-2 control-label">Tài khoản(*):  </label>
		<div class="col-sm-10">
		      <input type="text" name="txtTenDangNhap" id="txtTenDangNhap" class="form-control" placeholder="Tên đăng nhập" value=""/>
		</div>
      </div>  
      
        <div class="form-group">
        <label for="txtMatKhau" class="col-sm-2 control-label">Mật khẩu(*):  </label>
		<div class="col-sm-10">
		      <input type="password" name="txtMatKhau" id="txtMatKhau" class="form-control" placeholder="Mật khẩu" value=""/>
		</div>
         </div> 
         
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        	<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Đăng nhập"/>
            <label><input name="chkRemember" type="checkbox" id="chkRemember" value="1" class="checkbox-inline" /> Ghi nhớ đăng nhập</label>
        </div>
        
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        	<p><a href="#" >Quên mật khẩu?</a>	
        </div>
        
   
 </div>
    
</form>
   