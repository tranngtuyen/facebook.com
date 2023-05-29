<?php
$host = 'localhost'; // Thay đổi tên host nếu cần thiết
$db   = 'facebook'; // Thay đổi tên cơ sở dữ liệu nếu cần thiết
$user = 'root'; // Thay đổi tên người dùng nếu cần thiết
$pass = ''; // Thay đổi mật khẩu nếu cần thiết

try {
  $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Kết nối thành công!';
} catch(PDOException $e) {
  die('Kết nối không thành công: ' . $e->getMessage());
}
?>
