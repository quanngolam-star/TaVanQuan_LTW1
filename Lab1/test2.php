<?php
header('Content-Type: text/html; charset=UTF-8');

/* ===== Ý 1: Phép toán số học ===== */
echo "<h3>Ý 1: Phép toán</h3>";
$a = 17;
$b = 5;
echo "a = $a, b = $b <br>";
echo "Cộng: " . ($a + $b) . "<br>";
echo "Trừ: " . ($a - $b) . "<br>";
echo "Nhân: " . ($a * $b) . "<br>";
echo "Chia: " . ($a / $b) . "<br>";
echo "Chia lấy dư: " . ($a % $b) . "<br>";

/* ===== Ý 2: So sánh int và chuỗi số ===== */
echo "<h3>Ý 2: So sánh</h3>";
$so = 10;        // int
$chuoiSo = "10"; // string
echo "so = 10 (int), chuoiSo = \"10\" (string)<br>";
echo "so == chuoiSo: ";  var_dump($so == $chuoiSo);  echo "<br>";
echo "so === chuoiSo: "; var_dump($so === $chuoiSo); echo "<br>";
echo "so != chuoiSo: ";  var_dump($so != $chuoiSo);  echo "<br>";
echo "so <> chuoiSo: ";  var_dump($so <> $chuoiSo);  echo "<br>";
echo "so !== chuoiSo: "; var_dump($so !== $chuoiSo); echo "<br>";
// == chỉ so sánh GIÁ TRỊ (tự ép kiểu): 10 == "10" là true
// === so sánh cả GIÁ TRỊ và KIỂU DỮ LIỆU: int khác string nên false
// != và <> giống nhau: khác giá trị (không xét kiểu)
// !== khác giá trị HOẶC khác kiểu

/* ===== Ý 3: Tăng trước và tăng sau ===== */
echo "<h3>Ý 3: Tăng trước / tăng sau</h3>";
$x = 5;
echo "x ban đầu: $x <br>";
echo "++\$x (trước): " . ++$x . "<br>";
echo "x sau ++\$x: $x <br>";
$x = 5;
echo "x ban đầu: $x <br>";
echo "\$x++ (sau): " . $x++ . "<br>";
echo "x sau \$x++: $x <br>";
// ++$x: tăng x lên 1 TRƯỚC, rồi mới trả về giá trị mới (6)
// $x++: trả về giá trị CŨ (5) trước, rồi mới tăng x lên 1

/* ===== Ý 4: Nối chuỗi . và .= ===== */
echo "<h3>Ý 4: Nối chuỗi</h3>";
$s1 = "Xin chào ";
$s2 = "PHP";
echo "Dùng toán tử . : " . $s1 . $s2 . "<br>";
$s3 = "Xin chào ";
$s3 .= "PHP";
echo "Dùng toán tử .= : " . $s3 . "<br>";
// . : nối hai chuỗi và trả về chuỗi mới, không thay đổi biến gốc
// .= : nối thêm chuỗi vào CHÍNH biến bên trái (gán lại cho biến đó)

/* ===== Ý 5: Đếm ký tự ===== */
echo "<h3>Ý 5: strlen và mb_strlen</h3>";
$khongDau = "Xin chao";
$coDau = "Xin chào Việt Nam";
echo "Chuỗi không dấu: $khongDau -> strlen = " . strlen($khongDau) . "<br>";
echo "Chuỗi có dấu: $coDau -> mb_strlen = " . mb_strlen($coDau, 'UTF-8') . "<br>";
echo "Chuỗi có dấu: $coDau -> strlen = " . strlen($coDau) . " (so sánh)<br>";
// strlen() đếm theo BYTE: ký tự có dấu tiếng Việt chiếm 2-3 byte nên đếm dư
// mb_strlen() đếm theo KÝ TỰ thực tế, đúng với chuỗi UTF-8 có dấu

/* ===== Ý 6: Chữ hoa / chữ thường ===== */
echo "<h3>Ý 6: Hoa / thường</h3>";
$vb = "Xin Chào Việt Nam";
echo "Gốc: $vb <br>";
echo "strtoupper: " . strtoupper($vb) . "<br>";
echo "strtolower: " . strtolower($vb) . "<br>";
echo "mb_strtoupper: " . mb_strtoupper($vb, 'UTF-8') . "<br>";
echo "mb_strtolower: " . mb_strtolower($vb, 'UTF-8') . "<br>";
// strtoupper/strtolower chỉ đổi đúng chữ cái tiếng Anh (a-z), ký tự có dấu giữ nguyên hoặc lỗi
// mb_strtoupper/mb_strtolower hỗ trợ đa byte (UTF-8) nên đổi đúng cả chữ có dấu

/* ===== Ý 7: Ép kiểu chuỗi sang int ===== */
echo "<h3>Ý 7: Ép kiểu</h3>";
$c1 = "123 abc";
$c2 = "abc 123";
echo "(int)\"123 abc\": ";  var_dump((int)$c1);  echo "<br>";
echo "(int)\"abc 123\": ";  var_dump((int)$c2);  echo "<br>";
// Chuỗi bắt đầu bằng số -> lấy phần số đầu (123); bắt đầu bằng chữ -> 0

/* ===== Ý 8: Các kiểu dữ liệu ===== */
echo "<h3>Ý 8: Kiểu dữ liệu</h3>";
$i = 25;
$f = 3.14;
$s = "Tạ Văn Quân";
$bo = true;
var_dump($i);  echo "<br>";
var_dump($f);  echo "<br>";
var_dump($s);  echo "<br>";
var_dump($bo); echo "<br>";
?>