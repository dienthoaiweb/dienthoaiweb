<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salomon - Siêu thị điện máy</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Tao menu cap -->
    <link href="csseshop/bootstrap.min.css" rel="stylesheet">
    <link href="csseshop/font-awesome.min.css" rel="stylesheet">
    <link href="csseshop/prettyPhoto.css" rel="stylesheet">
    <link href="csseshop/price-range.css" rel="stylesheet">
    <link href="csseshop/animate.css" rel="stylesheet">
	<link href="csseshop/main.css" rel="stylesheet">
	<link href="csseshop/responsive.css" rel="stylesheet">
    
    <link href="css/salomon.css" rel="stylesheet">
    
<!--datatable-->
	<script src="js/jquery-3.2.0.min.js"/></script>
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    
  </head>
  <body>
  
  <?php
session_start();
if(!isset($_SESSION["giohang"])){
	$_SESSION["giohang"] = array();
}

include_once("dbconnect.php");
	function dathang($ma,$conn)
	{
		$ma = $_GET["ma"];
		$resultsql = mysqli_query ($conn, "SELECT a.*, b.nsx_ten FROM sanpham a, nhasanxuat b WHERE a.nsx_ma=b.nsx_ma and sp_ma = ".$ma);
		$rowsql = mysqli_fetch_row($resultsql);
		if($rowsql[7]>=1)
		{
			$coroi = false;
				foreach ($_SESSION["giohang"] as $key => $row)
				{
					if($key==$ma)
					{
						$_SESSION['giohang'][$key]["soluong"] += $_POST['txtDatHang'];
						$coroi = true;
					}
				}
				if(!$coroi)
				{
					$ten = $rowsql[1];
					$gia = $rowsql[2];
					$nsx = $rowsql[11];
					$dathang = array(
					"ten" => $ten,
					"gia" => $gia,
					"soluong" => 1,
					"hang" => $nsx);
					$_SESSION['giohang'][$ma]=$dathang;
				}
				echo "<script language='javascript'>
					alert('San pham da duoc them vao gia hang, truy cap gio hang de xem');
					window.loaction=window.location
					</script>";
			}
			else
			{
				echo "<script>alert('So luong ban dat vuot qua so luong trong kho');</script>";
			}
		}
if(isset($_GET['func'])&isset($_GET['ma']))
{
	$ma = $_GET["ma"];
	dathang($ma,$conn);
}
?>

   <header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 7103 777 777</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> admin@salomon.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle" style="background-color:#069"><!--header-middle-->
			<div class="container" >
				<div  >
					<div class="col-sm-6" >
						<div class="logo pull-left" >
							<a href="index.php" style="background-color:#069;color:#FFF">SALOMON <img src="images/logo.png"></a>
						</div>
						
					</div>
					<div class="col-sm-6">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" >
								<li ><a href="#" style="background-color:#069;color:#FFF"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href="" style="background-color:#069;color:#FFF"><i class="fa fa-shopping-cart"></i> Giỏ hàng<span class="badge"><?php if((isset($_SESSION['giohang']))&& count($_SESSION['giohang'])>0) echo count($_SESSION['giohang']); else '';?></span></a></li>
                                
                                <?php
		  							if (isset($_SESSION['tendangnhap']) && $_SESSION['tendangnhap'] != "") {
		  						?>
          							<li><a style="background-color:#069;color:#FFF" href=""><i class="fa fa-lock"></i>Chào <?php echo $_SESSION['tendangnhap']?></a>
                                    </li>
          							<li><a href="" style="background-color:#069;color:#FFF"><i class="fa fa-crosshairs"></i>Đăng xuất</a></li>
								<?php
									  }
									  else
									  {
								 ?>
                                      <li ><a href="" style="background-color:#069;color:#FFF"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                                      <li><a href="" style="background-color:#069;color:#FFF"><i class="fa fa-star"></i>Đăng ký</a></li>
							  <?php
                              }
                              ?>


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="gioithieu.php">Giới thiệu<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="lichsuhinhthanh.php">Lịch sử hình thành</a></li>
										<li><a href="hethongchinhanh.php">Hệ thống chi nhánh</a></li> 
										<li><a href="hinhthucthanhtoan.php">Hình thức thanh toán</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Quản lý danh mục<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="">Loại sản phẩm</a></li>
										<li><a href="">Sản phẩm</a></li>
                                    </ul>
                                </li> 
								<li><a href="">Giỏ hàng</a></li>
                                <li><a href="">Góp ý</a></li>
								<li><a href="lienhe.php">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					a
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm kiếm"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header>
   <!--/header-->
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
     <tr>
       <td width="4%" height="252" valign="top"><p>&nbsp;</p></td>
       <td width="95%"><p><strong>1. Thanh toán bằng tiền mặt</strong></p>
         <p><img src="img/tt.JPG" alt="tt" width="264"></p>
         <p>Showroom 1 : Số 103 - 105 Lê Thanh Nghị– Đồng Tâm - Hai Bà Trưng– Cần Thơ.<br>
       Showroom 2 : Số 58 Hồ Tùng Mậu  – Cầu Giấy –Cần Thơ.</p></td>
       <td width="1%">&nbsp;</td>
     </tr>
     <tr>
       <td height="241"><p>&nbsp;</p></td>
       <td><p><strong>2. Thanh toán bằng chuyển khoản</strong></p>
         <p><img src="img/ck.JPG" alt="ck" width="265"></p>
         <p>Quý khách chuyển tiền cho chúng tôi vào một trong các tài khoản sau đây:</p>
         <p><strong>Số tài khoản Ngân Hàng ACB <em>chi nhánh Lý Tự Trọng -Tp Cần Thơ</em>: </strong>538 22 399<br>
           <strong>Số tài khoản Ngân Hàng BIDV <em>chi nhánh Đông Văn Cống -Tp Cần Thơ</em>: </strong>1231 00000 65864<br>
       <strong>Số tài khoản Ngân Hàng EXIM <em>chi nhánh Phan Đình Phùng - Tp Cần Thơi</em></strong>: 100 11485 100 2821</p></td>
       <td>&nbsp;</td>
    </tr>
   </table>
   <div class="footer-top-area">
     <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>S<span>alomon</span></h2>
                        <p>Siêu thị điện máy Salomon là một trong những siêu thị điện máy phát triển nhanh và ổn định bất chấp tình hình kinh tế thuận lợi hay khó khăn. Chuỗi siêu thị Salomon được thành lập từ 2004 chuyên bán lẻ các sản phẩm kỹ thuật số di động bao gồm điện thoại di động, máy tính bảng, laptop và phụ kiện với hơn 1000 siêu thị tại 63 tỉnh thành trên khắp Việt Nam.</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Người dùng </h2>
                        <ul>
                            <li><a href="#">Tài khoản</a></li>
                            <li><a href="#">Hóa đơn</a></li>
                            <li><a href="#">Sở thích</a></li>
                            <li><a href="#">Nhà cung cấp</a></li>
                            <li><a href="#">Thông tin khác</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Phân loại</h2>
                        <?php
							$sq="select * from loaisanpham a where (select count(*) from sanpham b where a.lsp_ma=b.lsp_ma)>0";
							$result=mysqli_query($conn,$sq);
							while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                        <ul>
                            <li>
                            	<a href="">
                            	<?php echo $row['lsp_ten'];?>
                                </a>    
                            </li>
                        </ul>
                        <?php
							}
						?>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Bản tin</h2>
                        <p>Đăng ký nhận bản tin của chúng tôi và nhận được các hợp đồng độc quyền của chúng tôi.</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập địa chỉ email">
                                <input type="submit" value="Đăng ký">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2017 Salomon. Bản quyền thuộc CUSC. <a href="http://www.cusc.vn" target="_blank">cusc.vn</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    
    <!--data table - dat dung vi tri nay-->
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"></script>
    
    
  </body>
</html>