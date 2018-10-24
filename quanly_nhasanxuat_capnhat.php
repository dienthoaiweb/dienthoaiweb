    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

<?php
		include_once("dbconnect.php");
    	if(isset($_GET["ma"])){
			$ma = $_GET["ma"];
			$sqlstring = "select nsx_ma, nsx_ten from nhasanxuat where nsx_ma=".$ma;
			$result = mysqli_query($conn, $sqlstring);
			$row = mysqli_fetch_row($result);
			$nsx_ma = $row[0];
			$nsx_ten = $row['1'];
		}
		else
		{
			echo '<meta http-equiv="refresh" content="0;URL=quanly_nhasanxuat.php"/>';
		}

	function bindLSPList($conn, $selectedValue) {
    	$sqlstring = "select nsx_ma, nsx_ten from nhasanxuat";
        $result = mysqli_query($conn, $sqlstring);
	}

        function bindNSXList($conn, $selectedValue) 
		{

            $sqlstring = "select nsx_ma, nsx_ten from nhasanxuat";
            $result = mysqli_query($conn, $sqlstring);
            echo "<select name='slNhaSanXuat'>
            		<option value='0'>Chọn nhà sản xuất</option>";
           			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                		if ($row['nsx_ma'] == $selectedValue) {
                    		echo "<option value='".$row['nsx_ma']."' selected>".$row['nsx_ten']."</option>";
                		}
				 		else {
                    		echo "<option value='".$row['nsx_ma']. "'>".$row['nsx_ten']."</option>";
                		}
            		}
            echo "</select>";
        }
		
		if(isset($_POST["btnCapNhat"]))
		{
				$nsx_ma = $_POST['ma'];
				$nsx_ten = $_POST['ten'];
				if(trim($ten=="")){
				echo "Vui lòng nhập tên sản phẩm";
				}else if(!is_numeric($ma)){
					echo "Vui lòng max nhà sản xuất";
				}
				else if(!is_numeric($ten)){
					echo "Vui lòng nhập tên nhà sản xuất";
				}
			else
			{	
				$sqlstring="UPDATE nhasanxuat set 
							nsx_ma ='".$ma."', 
							nsx_ten=".$ten.", 
							WHERE sp_ma=".$ma;
				mysqli_query($conn, $sqlstring );
				echo '<meta http-equiv="refresh" content="0;URL=quanly_nhasanxuat.php"/>';
			}	
		}
        ?>
<div class="container">
	<h2>Cập nhật sản phẩm</h2>
		
		
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					<div class="form-group">
						    
                            <label for="txtTen" class="col-sm-2 control-label">Tên sản phẩm(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtTen" id="txtTen" class="form-control" placeholder="Tên sản phẩm" value='<?php echo $ten; ?>'/>
							</div>
                      </div>   
                      <div class="form-group">   
                             <label for="" class="col-sm-2 control-label">Loại sản phẩm(*):  </label>
							<div class="col-sm-10">
							      <?php bindLSPList($conn, $loai); ?>
							</div>
                        </div>
                        
                        <div class="form-group">   
                            <label for="" class="col-sm-2 control-label">Hãng sản xuất(*):  </label>
							<div class="col-sm-10">
							      <?php bindNSXList($conn, $nsx); ?>
							</div>
                          </div>   
                          
                          <div class="form-group">  
                            <label for="lblGia" class="col-sm-2 control-label">Giá(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtGia" id="txtGia" class="form-control" placeholder="Giá" value='<?php echo $gia; ?>'/>
							</div>
                            </div>   
                            
                            <div class="form-group">   
                            <label for="lblMoTa_Ngan" class="col-sm-2 control-label">Mô tả ngắn(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtMoTaNgan" id="txtMoTaNgan" class="form-control" placeholder="Mô tả ngắn" value='<?php echo $motangan; ?>'/>
							</div>
                            </div>
                            
                             <div class="form-group">  
                            <label for="lblMoTaChiTiet" class="col-sm-2 control-label">Mô tả chi tiết(*):  </label>
							<div class="col-sm-10">
							      <textarea name="txtMoTaChiTiet" rows="4" class="ckeditor"><?php echo $motachitiet ?></textarea>
              <script language="javascript">
                                        CKEDITOR.replace( 'txtMoTaChiTiet',
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
                            <label for="lblSoLuong" class="col-sm-2 control-label">Số lượng(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtSoLuong" id="txtSoLuong" maxlength="10" id="txtGia" class="form-control" placeholder="Số lượng" value='<?php echo $soluong; ?>'/>
							</div>
                            </div>
                            
                            
                            
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnCapNhat" id="btnCapNhat" value="Cập nhật"/>
                              <input type="button" class="btn btn-primary" name="btnBoQua"  id="btnBoQua" value="Bỏ qua" onclick="window.location='?khoatrang=quanlysanpham'" />
                              	
						</div>
					</div>
				</form>
		</div>


<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>