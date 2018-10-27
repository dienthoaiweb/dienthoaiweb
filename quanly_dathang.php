
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
 		<script src="js/jquery-3.2.0.min.js"/></script>
       <script src="js/jquery.dataTables.min.js"/></script>
       <script src="js/dataTables.bootstrap.min.js"/></script>
        <script language="javascript">
            function deleteConfirm(){
                if(confirm("Bạn có chắc chắn muốn hủy đơn hàng này không?")){
                    return true;
                }
                else{
                    return false;
                }
            }
			
			$(document).ready(function() {
    var table = $('#tablesalomon').DataTable( {
        responsive: true,
		"language": {
                "lengthMenu": "Hiển thị _MENU_ dòng dữ liệu trên một trang",
                "info": "Hiển thị từ dòng _START_ trong tổng số _TOTAL_ dòng dữ liệu",
                "infoEmpty": "Dữ liệu rỗng",
                "emptyTable": "Chưa có dữ liệu nào",
                "processing": "Đang xử lý...",
                "search": "Tìm kiếm:",
                "loadingRecords": "Đang load dữ liệu...",
                "zeroRecords": "không tìm thấy dữ liệu",
                "infoFiltered": "(Được từ tổng số _MAX_ dòng dữ liệu)",
                "paginate": {
                    "first": "|<",
                    "last": ">|",
                    "next": ">>",
                    "previous": "<<"
                }
            },
            "lengthMenu": [[2, 5, 10, 15, 20, 25, 30, -1], [2, 5, 10, 15, 20, 25, 30, "Tất cả"]]
    } );
    new $.fn.dataTable.FixedHeader( table );
} );
			
        </script>
        <?php
			include_once 'dbconnect.php';
			//Kiểm tra xem có truyền mã để xóa không
			if(isset($_GET["ma"])){
			//Nếu xóa thì lấy mã và tiến hành xóa
				$madathang = $_GET["ma"];
				mysqli_query($conn, "DELETE FROM dondathang WHERE dh_ma=$madathang");
			}
			
			if(isset($_POST["btXoa"])&& isset($_POST["checkbox"]))
			{
				for ($i = 0; $i < count($_POST['checkbox']); $i++)
				{$madathang = $_POST["checkbox"][$i];
				mysqli_query($conn, "DELETE FROM dondathang WHERE dh_ma=$madathang");
			}
			}

		?>
        <form name="frmXoa" method="post" action="">
        <h1>Quản lý đơn đặt hàng</h1>
       </br>
        <table id="tablesalomon" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
            <thead>
                <tr>
               	    <th><strong>Chọn</strong></th>
                    <th><strong>Mã đặt hàng̃</strong></th>
                    <th><strong>Ngày lập</strong></th>
                    <th><strong>Ngày giao</strong></th>
                    <th><strong>Nơi giao</strong></th>
                    <th><strong>Đã thanh toán</strong></th>
                    <th><strong>Hình thức TT</strong></th>
                    <th><strong>Khách hàng</strong></th>
                    <th><strong>Hủy</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
					
				$result = mysqli_query($conn, "SELECT dh_ma, dh_ngaylap, dh_ngaygiao, dh_noigiao, dh_trangthaithanhtoan, b.httt_ten,kh_tendangnhap FROM dondathang a, hinhthucthanhtoan b where a.httt_ma=b.httt_ma");
				while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
			<tr>
              <td class="cotCheckBox"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $row["dh_ma"]; ?>" /></td>
              <td ><?php echo $row["dh_ma"] ?></td>
              <td><?php echo $row["dh_ngaylap"] ?></td>
              <td><?php echo $row["dh_ngaygiao"] ?></td>
              <td><?php echo $row["dh_noigiao"] ?></td>
              
              
              <td align="center"><input name="checkbox_tt[]" type="checkbox" id="checkbox_tt[]" <?php 
			  if($row["dh_trangthaithanhtoan"]==1)
			  {
				echo  'checked';
			  }
			  ?>/>
              </td>
              
              <td><?php echo $row["httt_ten"] ?></td>
              <td><?php echo $row["kh_tendangnhap"] ?></td>
            
              
              <td align='center' class='cotNutChucNang'>
              	<a onclick="return deleteConfirm()" href="quanly_dathang.php?ma=<?php echo $row['dh_ma'] ?>">
              	<img src='images/delete.png' border='0' /></a>
              </td>
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
 
