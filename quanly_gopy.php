

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
 		<script src="js/jquery-3.2.0.min.js"/></script>
       <script src="js/jquery.dataTables.min.js"/></script>
       <script src="js/dataTables.bootstrap.min.js"/></script>
        <script language="javascript">
            function deleteConfirm(){
                if(confirm("Bạn có chắc chắn muốn hủy góp ý?")){
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
				$magopy = $_GET["ma"];
				mysqli_query($conn, "DELETE FROM gopy WHERE gy_ma=$magopy");
				echo '<meta http-equiv="refresh" content="0;URL=quanly_gopy.php"/>';
			}
			
			if(isset($_POST["btXoa"])&& isset($_POST["checkbox"]))
			{
				for ($i = 0; $i < count($_POST['checkbox']); $i++)
				{$magopy = $_POST["checkbox"][$i];
				mysqli_query($conn, "DELETE FROM gopy WHERE gy_ma=$magopy");
			}
			}

		?>
        <form name="frmXoa" method="post" action="">
        <h1>Quản lý góp ý</h1>
       </br>
        <table id="tablesalomon" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
            <thead>
                <tr>
               	    <th><strong>Chọn</strong></th>
                    <th><strong>Mã góp ý̃</strong></th>
                    <th><strong>Ngày góp ý</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Địa chỉ</strong></th>
                    <th><strong>Tiêu đề</strong></th>
                    <th><strong>Nội dung góp ý</strong></th>
                    <th><strong>Điện thoại</strong></th>
                    <th><strong>Hủy</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
					
				$result = mysqli_query($conn, "SELECT gy_ma, gy_hoten, gy_email, gy_diachi, gy_dienthoai, gy_tieude,gy_noidung, gy_ngaygopy FROM gopy ");
				while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
			<tr>
              <td class="cotCheckBox"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $row["gy_ma"]; ?>" /></td>
              <td ><?php echo $row["gy_ma"] ?></td>
              <td><?php echo $row["gy_ngaygopy"] ?></td>
              <td><?php echo $row["gy_email"] ?></td>
              <td><?php echo $row["gy_diachi"] ?></td>
                                                       
              <td><?php echo $row["gy_tieude"] ?></td>
              <td><?php echo $row["gy_noidung"] ?></td>
               <td><?php echo $row["gy_dienthoai"] ?></td>
            
              
              <td align='center' class='cotNutChucNang'>
              	<a onclick="return deleteConfirm()" href="quanly_gopy.php?ma=<?php echo $row['gy_ma'] ?>">
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
            	
                <input type="submit" value="Xóa mục đã chọn" name="btXoa" id="btXoa" onclick="return deleteConfirm()" class="btn btn-primary" />
            </div>
        </div><!--Nút chức nang-->
 </form>
 