<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.2.0.min.js"/></script>
<?php
include_once("dbconnect.php");
if(isset($_GET["ma"]))
{
	//Lay ma san pham
	$ma = $_GET["ma"];
	
	if(isset($_GET["ma"]))
	{
			$ma = $_GET["ma"];
			$sqlstring = "SELECT dh_ma, dh_ngaylap, dh_ngaygiao, dh_noigiao, dh_trangthaithanhtoan, httt_ma, kh_tendangnhap FROM dondathang WHERE dh_ma=".$ma;
			$result = mysqli_query($conn, $sqlstring);
			$row = mysqli_fetch_row($result);
			$ngaylap = $row[0];
			$ngaygiao = $row['1'];
			$noigiao = $row['2'];
			$tttt = $row['3'];
			$soluong = $row['4'];
			$httt = $row['5'];
			$tenkh = $row['6'];
	}
	else
	{
			echo '<meta http-equiv="refresh" content="0;URL=quanly_dathang_chitiet.php"/>';
	}
}
	
	?>
          <form name="frmXoa" method="post" action="">
        <h1>Chi tiết đơn đặt hàng</h1>
       </br>
        <table id="tablesalomon" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
            <thead>
                <tr>
              		<th><strong>Mã CT đơn hàng</strong></th>
               	    <th><strong>Mã đơn hàng</strong></th>
                    <th><strong>Sản phẩm</strong></th>
                    <th><strong>Số lượng</strong></th>
                    <th><strong>Đã thanh toán</strong></th>
                    <th><strong>Hình thức TT</strong></th>
                    <th><strong>Ngày lập</strong></th>
                    <th><strong>Ngày giao</strong></th>
                    <th><strong>Nơi giao</strong></th>
                    <th><strong>Khách hàng</strong></th>                   
                    <th><strong>Tổng tiền</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
					
				$result = mysqli_query($conn, "SELECT a.ctdh_ma, b.dh_ma, c.sp_ten, a.ctdh_soluong, b.dh_trangthaithanhtoan, d.httt_ten, b.dh_ngaylap,b.dh_ngaygiao, b.dh_noigiao, b.kh_tendangnhap, (c.sp_gia * ctdh_soluong)   tongtien
									FROM  dondathang b left join chitietdonhang a on b.dh_ma=a.dh_ma 
									LEFT JOIN sanpham c on a.sp_ma=c.sp_ma 
									LEFT JOIN hinhthucthanhtoan d on b.httt_ma=d.httt_ma
									WHERE b.dh_ma=".$ma) or die(mysqli_error($conn));
				while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
			<tr>
             <td ><?php echo $row["ctdh_ma"] ?></td>
              <td ><?php echo $row["dh_ma"] ?></td>
              <td ><?php echo $row["sp_ten"] ?></td>
              <td><?php echo $row["ctdh_soluong"] ?></td>
              
              <td align="center"><input name="checkbox_tt[]" type="checkbox" id="checkbox_tt[]" <?php 
			  if($row["dh_trangthaithanhtoan"]==1)
			  {
				echo  'checked';
			  }
			  ?>/>
              </td>
              <td><?php echo $row["httt_ten"] ?></td>
              <td><?php echo $row["dh_ngaylap"] ?></td>
              <td><?php echo $row["dh_ngaygiao"] ?></td>
              <td><?php echo $row["dh_noigiao"] ?></td>
              <td><?php echo $row["kh_tendangnhap"] ?></td>
              <td><?php echo $row["tongtien"] ?></td>
              <td><?php  ?></td>
            </tr>
            <?php
				}
				?>
			</tbody>
        
        </table>  
<!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
                <input type="submit" value="Xoa muc chon" name="btXoa" id="btXoa" onclick="return deleteConfirm()" class="btn btn-primary" />
            </div>
        </div><!--Nút chức nang-->
 </form>
 
	
	
	