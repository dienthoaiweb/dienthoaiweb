    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	include_once("dbconnect.php");
	function bindLSPList($conn) {
    	$sqlstring = "select nsx_ma, nsx_ten from nhasanxuat";
        $result = mysqli_query($conn, $sqlstring);
        echo "<select name='nsx'>
            	<option value='0'>Chọn loại sản phẩm</option>";
            	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "<option value='".$row['lsp_ma']."'>".$row['lsp_ten']."</option>";
            	}
        echo "</select>";
	}

        function bindNSXList($conn) 
		{

            $sqlstring = "select nsx_ma, nsx_ten from nhasanxuat";
            $result = mysqli_query($conn, $sqlstring);
            echo "<select name='slNhaSanXuat'>
            		<option value='0'>Chọn nhà sản xuất</option>";
           			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    	echo "<option value='".$row['nsx_ma']."'>".$row['nsx_ten']."</option>";
            		}
            echo "</select>";
        }

		if(isset($_POST["btnThemMoi"]))
		{
				$ten = $_POST["txtTen"];
				$motangan = $_POST['txtMoTaNgan'];
				$motachitiet = $_POST['txtMoTaChiTiet'];
				$gia = $_POST['txtGia'];
				$soluong = $_POST['txtSoLuong'];
				$loai = $_POST['slLoaiSanPham'];
				$nsx = $_POST['slNhaSanXuat'];
				if(trim($ten=="")){
					echo "Vui lòng nhập tên sản phẩm";
				}else if(!is_numeric($gia)){
					echo "Vui lòng nhập giá sản phẩm";
				}
				else if(!is_numeric($soluong)){
					echo "Vui lòng nhập số lượng sản phẩm";
				}
				else if($loai=="0"){
					echo "Vui lòng chọn loại sản phẩm";
				}
				else if($nsx=="0"){
					echo "Vui lòng chọn nhà sản xuất";
				}
				else
				{
					$sqlstring = "INSERT INTO sanpham ( 
							sp_ten, sp_mota_ngan,
							sp_mota_chitiet, 
							sp_gia, 
							sp_soluong,
							lsp_ma,
							nsx_ma, sp_ngaycapnhat)
							VALUES('".$ten."','".$motangan."',
								'".$motachitiet."',".$gia.",
								".$soluong.",".$loai.",
								".$nsx.",'".date('Y-m-d H:i:s')."')";

					mysqli_query($conn, $sqlstring);
					echo '<meta http-equiv="refresh" content="0;URL=quanly_sanpham.php"/>';
		
			}
		}
        ?>
<div class="container">
	<h2>Cập nhật Nhà sản xuất </h2>

	 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
			<div class="form-group">
				<label for="txtTen" class="col-sm-2 control-label">Mã nhà sản xuất(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtTen" id="txtTen" class="form-control" placeholder="Tên loại sản phẩm" value=''/>
							</div>
                      </div>   
                      
                        
                        <div class="form-group">   
                            <label for="" class="col-sm-2 control-label">Tên nhà sản xuất(*):  </label>
							<div class="col-sm-10">
							      <?php bindNSXList($conn); ?>
							</div>
                        </div>   
                          
                          
 
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnThemMoi" id="btnThemMoi" value="Thêm mới"/>
                              <input type="button" class="btn btn-primary" name="btnBoQua"  id="btnBoQua" value="Bỏ qua" onclick="window.location='quanly_sanpham.php'" />
                              	
						</div>
					</div>
				</form>
		</div>


<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>