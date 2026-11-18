<?php
header('Content-Type: text/html; charset=UTF-8');

/* ===== Ý 1: trim() ===== */
echo "<h3>Ý 1: trim()</h3>";
$chuoi1 = "   Xin chao PHP   ";
echo "Chuỗi gốc: [" . $chuoi1 . "] - độ dài: " . strlen($chuoi1) . "<br>";
$ketQua1 = trim($chuoi1);
echo "Sau trim(): [" . $ketQua1 . "] - độ dài: " . strlen($ketQua1) . "<br>";
// trim() loại bỏ khoảng trắng ở CẢ đầu và cuối chuỗi

/* ===== Ý 2: ltrim() và rtrim() ===== */
echo "<h3>Ý 2: ltrim() và rtrim()</h3>";
$chuoi2 = "   Lap trinh web   ";
echo "Chuỗi gốc: [" . $chuoi2 . "]<br>";
echo "ltrim(): [" . ltrim($chuoi2) . "] - độ dài: " . strlen(ltrim($chuoi2)) . "<br>";
echo "rtrim(): [" . rtrim($chuoi2) . "] - độ dài: " . strlen(rtrim($chuoi2)) . "<br>";
// ltrim() chỉ bỏ khoảng trắng BÊN TRÁI (đầu chuỗi)
// rtrim() chỉ bỏ khoảng trắng BÊN PHẢI (cuối chuỗi)

/* ===== Ý 3: substr() ===== */
echo "<h3>Ý 3: substr()</h3>";
$chuoi3 = "Lap trinh web voi PHP va MySQL rat thu vi";
echo "Chuỗi gốc: " . $chuoi3 . " (độ dài: " . strlen($chuoi3) . ")<br>";
echo "10 ký tự đầu: " . substr($chuoi3, 0, 10) . "<br>";
echo "Từ ký tự thứ 5 đến hết: " . substr($chuoi3, 4) . "<br>";
// substr($chuoi, vị_trí_bắt_đầu, độ_dài): vị trí đếm từ 0
// Ký tự thứ 5 có vị trí là 4, bỏ độ dài thì cắt đến hết chuỗi

/* ===== Ý 4: str_replace() ===== */
echo "<h3>Ý 4: str_replace()</h3>";
$chuoi4 = "Hom nay toi hoc PHP, PHP rat de hoc va thu vi";
echo "Chuỗi gốc: " . $chuoi4 . " (độ dài: " . strlen($chuoi4) . ")<br>";
$ketQua4 = str_replace("PHP", "JavaScript", $chuoi4);
echo "Sau khi thay PHP bằng JavaScript: " . $ketQua4 . "<br>";
// str_replace(chuỗi_cần_tìm, chuỗi_thay_thế, chuỗi_gốc): thay TẤT CẢ vị trí tìm thấy
?>