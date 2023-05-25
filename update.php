<?php
//nha du lieu tu form
$ten_dang_nhap = $_POST['ten_dang_nhap'];
$mat_khau = $_POST['mat_khau'];
$Ho_va_ten = $_POST['Ho_va_ten'];
$Email = $_POST['Email'];
$So_dien_thoai = $_POST['So_dien_thoai'];

//ket noi csdl
require_once 'connect.php';

//viet lenh sql de them du lieu 
$themsql = "INSERT INTO tb_sinhvien(ten_dang_nhap, mat_khau, Ho_va_ten, Email, So_dien_thoai) VALUES('$ten_dang_nhap', '$mat_khau', '$Ho_va_ten', '$Email', '$So_dien_thoai')";
//echo $update; exit;

//thuc thi cau lenh them
mysqli_query($conn, $themsql);

//in ra thong bao thanh cong 
echo "<h1>Thêm thành công</h1>";
?>
