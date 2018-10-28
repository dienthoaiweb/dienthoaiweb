<?php
	if(isset($_SESSION["quantri"]) && $_SESSION["quantri"]==1)
	{
?> 

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
 		<script src="js/jquery-3.2.0.min.js"/></script>
       <script src="js/jquery.dataTables.min.js"/></script>
       <script src="js/dataTables.bootstrap.min.js"/></script>
        <script language="javascript">
            function deleteConfirm(){
                if(confirm("Bạn có chắc chắn muốn xóa!")){
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
				$nhasanxuat = $_GET["ma"];
				mysqli_query($conn, "DELETE FROM nhasanxuat WHERE nsx_ma=$nhasanxuat");
				echo '<meta http-equiv="refresh" content="0;URL=quanly_nhasanxuat.php"/>';
			}
			
			if(isset($_POST["btXoa"])&& isset($_POST["checkbox"]))
			{
				for ($i = 0; $i < count($_POST['checkbox']); $i++)
				{$masanpham = $_POST["checkbox"][$i];
				mysqli_query($conn, "DELETE FROM nhasanxuat WHERE sp_ma=$manhasanxuat");
			}
			}

		?>
        <form name="frmXoa" method="post" action="">
        <h1>Quản lý nhà sản xuất</h1>
        <p>
        	<a href="quanly_sanpham_themmoi.php"><img src="images/add.png" alt="Thêm mới" width="16" height="16" border="0" /> Thêm mới</a>
        </p>
        <table id="tablesalomon" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>Chon</strong></th>
                    <th><strong>Mã Nhà sản xuất</strong></th>
                    <th><strong>Tên Nhà sản xuất</strong></th>
                    <th><strong>Hình ảnh</strong></th>
                    <th><strong>Cập nhật</strong></th>
                    <th><strong>Xóa</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
					
				$result = mysqli_query($conn, "SELECT nsx_ma, nsx_ten FROM nhasanxuat");
				while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
			<tr>
              <td class="cotCheckBox"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $row["nsx_ma"]; ?>" /></td>
              <td ><?php echo $row["nsx_ma"] ?></td>
              <td><?php echo $row["nsx_ten"] ?></td>
             <td align='center' class='cotNutChucNang'> <a href="quanly_nhasanxuat_themoi.php?ma=<?php echo $row['nsx_ma'] ?>"><img src='images/image_edit.png' border='0'  /></a>
            
             </td>
             
              <td align='center' class='cotNutChucNang'>
              <a href="quanly_nhasanxuat_capnhat.php?ma=<?php echo $row['nsx_ma'] ?>">
              <img src='images/edit.png' border='0'/></a>
              </td>
              
              <td align='center' class='cotNutChucNang'>
              	<a onclick="return deleteConfirm()" href="quanly_nhasanxuat.php?ma=<?php echo $row['nsx_ma'] ?>">
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
 
 <?php
	}
	else
	{
		echo "<script>alert('Ban khong phai la quan tri vien')</script>";
		echo "<script language='javascript'>window.location='index.php'</script>";
	}
 ?>