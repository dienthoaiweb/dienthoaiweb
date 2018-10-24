<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
 </script>
<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>

 <?php
include 'dbconnect.php';
include 'sendMailLib.php';
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LdUbz0UAAAAAA-ENa2HwHm-c17z8Y0quNYGnfjy'; //Sitekey luc dang ky reCapcha
$secret_key  = '6LdUbz0UAAAAANK4nW--LWfbevhd-IqB_HFNXdgx'; //Secretkey luc dang ky reCapcha

if(isset($_POST['btnGopY'])){
	
	$hoten=$_POST['txtHoTen'];
	$email = $_POST['txtEmail'];
	$diachi = $_POST['txtDiaChi'];
	$dienthoai = $_POST['txtDienThoai'];
	$tieude = $_POST['txtTieuDe'];
	$noidung = $_POST['txtNoiDung'];
		
	$loi = "";
	//lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response']; 
    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
	{
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } 
	else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } 
	else 
	{
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
    $response = json_decode($response);
    if(!($response->success))
    {
         $loi.='<li>Captcha không đúng</li>';
	}

	
	if(strpos($_POST['txtEmail'],"@") === false) {
    	$loi .="<li>Địa chỉ email không hợp lệ</li>";
	}
	
	if($loi!= ""){
		echo "<ul class='cssLoi'>".$loi."</ul>";
	}
	else{
		$sq = "SELECT * FROM gopy WHERE gy_hoten='$hoten'";
		$ketqua = mysqli_query($conn,$sq);
		if(mysqli_num_rows($ketqua)==0)
		{
		mysqli_query($conn, "INSERT INTO gopy (gy_hoten, gy_email, gy_diachi, gy_dienthoai, gy_tieude, gy_noidung )
		VALUES ('$hoten', '$email', '$diachi', '$dienthoai', '$tieude', '$noidung' )") or die(mysqli_error($conn));
		
		echo "<script >alert('Cảm ơn')</script>";
		echo "<script language='javascript'>window.location='index.php'</script>";
		
		}
	}
}

?>

		<div class="container">
        <h2>Góp ý cho Tommy Store</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					               
                      
                       
                       <div class="form-group">                               
                            <label for="lblHoten" class="col-sm-2 control-label">Họ tên(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtHoTen" id="txtHoTen" value="<?php if(isset($hoten)) echo $hoten; ?>" class="form-control" placeholder="Họ và tên"/>
							</div>
                       </div> 
                       
                       <div class="form-group">      
                            <label for="lblEmail" class="col-sm-2 control-label">Email(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtEmail" id="txtEmail" value="<?php if(isset($email)) echo $email; ?>" class="form-control" placeholder="Email"/>
							</div>
                       </div>  
                       
                        <div class="form-group">   
                             <label for="lblDiaChi" class="col-sm-2 control-label">Địa chỉ(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDiaChi" id="txtDiaChi" value="<?php if(isset($diachi)) echo $diachi; ?>" class="form-control" placeholder="Địa chỉ"/>
							</div>
                        </div>  
                        
                         <div class="form-group">  
                            <label for="lblDienThoai" class="col-sm-2 control-label">Điện thoại(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDienThoai" id="txtDienThoai" value="<?php if(isset($dienthoai)) echo $dienthoai; ?>" class="form-control" placeholder="Điện thoại" />
							</div>
                         </div> 
                         
                         <div class="form-group">  
                            <label for="lblDienThoai" class="col-sm-2 control-label">Tiêu đề(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtTieuDe" id="txtTieuDe" value="<?php if(isset($tieude)) echo $tieude; ?>" class="form-control" placeholder="Tiêu đề" />
							</div>
                         </div>
                         
                         <div class="form-group">  
                            <label for="lblNoiDung" class="col-sm-2 control-label">Nội dung chi tiết(*):  </label>
							<div class="col-sm-10">
							      <textarea name="txtNoiDung" rows="4" class="ckeditor" value="<?php echo $noidung ?>">
                                  </textarea>
              <script language="javascript">
                                        CKEDITOR.replace( 'txtNoiDung',
                                        {
                                            skin : 'kama',
                                            extraPlugins : 'uicolor',
                                            uiColor: '#eeeeee',
                                            toolbar : [ ['Source','DocProps','-','Save','NewPage','Preview','-','Templates'],
                                                ['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
                                                ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
                                                ['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
                                                ['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
                                                ['OrderedList','UnorderedList','-','Outdent','Indent','Blockquote'],
                                                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
                                                ['Link','Unlink','Anchor', 'NumberedList','BulletedList','-','Outdent','Indent'],
                                                ['Image','Flash','Table','Rule','Smiley','SpecialChar'],
                                                ['Style','FontFormat','FontName','FontSize'],
                                                ['TextColor','BGColor'],[ 'UIColor' ] ]
                                        });
										
                                    </script> 
                                  
							</div>
                            </div>
                            
                         <div class="form-group">     
                            <label for="lblNgayGopY" class="col-sm-2 control-label" value="<?php echo date('d-m-y H:i:s'); ?> "> Ngày gửi góp ý(*):  </label>
                            <div class="col-sm-10">	      
                            <input name="txtNgayGiaoHang" id="txtNgayGiaoHang" type='date' class="form-control" />   
                            </div>
   						</div>
                           
                         <div class="form-group">
                            <label for="lblMMaAnToan" class="col-sm-2 control-label">Mã an toàn(*):  </label>
							<div class="col-sm-10">  
                            	<div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div> 
                            </div>
                         </div> 	

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				 <input type="submit"  class="btn btn-primary" name="btnGopY" id="btnGopY" value="Góp ý"/>
                </div>
			</div>
			</form>
		</div>
	</div>
    
<?php
            
									  //$publickey = "6Lf0Zj0UAAAAAKn7ozxvayzEa_Ctr08DNDaBnOVc"; 
									  //echo recaptcha_get_html($publickey);
								?> 
<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>