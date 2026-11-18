<?php
//1
echo "<h3>Câu 1</h3>";
echo "Họ tên: Tạ Văn Quân <br>";
echo "Ngày sinh: 16/06/2006 <br>";
echo "Mã số sinh viên: 2125110123 <br>";
//2
$hoTen = "Tạ Văn Quân";
$mssv = "2125110123";
$soDienThoai = "0913303960";
$ngaySinh = "16/06/2006";
echo "<h3>Câu 2</h3>";
echo "Họ tên: " . $hoTen . "<br>";
echo "MSSV: " . $mssv . "<br>";
echo "Số điện thoại: " . $soDienThoai . "<br>";
echo "Ngày sinh: " . $ngaySinh . "<br>";
//3
define("HOST", "localhost");
define("DATABASE", "qlsinhvien");
define("USERNAME", "root");
define("PASSWORD", "qqqqqq");

echo "<h3>Câu 3</h3>";
echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: '" . PASSWORD . "' <br>";
//4
echo "<h3>Câu 4</h3>";
$ten = "Quân";
echo "Nháy kép: Xin chào $ten <br>";  
echo 'Nháy đơn: Xin chào $ten <br>';   
echo "Nháy kép xử lý xuống dòng: dòng 1\ndòng 2 <br>";
echo 'Nháy đơn không xử lý \n <br>';
?>