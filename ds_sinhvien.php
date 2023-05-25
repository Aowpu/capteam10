<?php
include "mysqli.php";
if(!$_SESSION['login']) {
    header("Location:login.php");
}
if($_SESSION['login'] && $_SESSION['login']!='admin') {
    header("Location:index.php");
}
global $conn;
$result=mysqli_query($conn,"SELECT * FROM tb_sinhvien");
//var_dump(mysqli_fetch_assoc($result));
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danh sách học sinh </title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
     <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Tên đăng nhập</th>
						<th>Mật khẩu</th>
						<th>Họ và tên</th>
						<th>Email</th>                                           
						<th>Số điện thoại</th>    						
					</tr>
				</thead>
			   
				<tbody>
				<?php while($row=mysqli_fetch_assoc($result)):?>
					<tr>
						<td><?=$row['ten_dang_nhap']?></td>
						<td><?=$row['mat_khau']?></td>
						 <td><?=$row['Ho_va_ten']?></td>
						<td><?=$row['Email']?></td>
						<td><?=$row['So_dien_thoai']?></td>   						
					</tr>
					<?php endwhile; ?>
				  
				</tbody>
			</table>
            <a href="logout.php">Logout</a>
		</div>
	</div>



</body>

</html>