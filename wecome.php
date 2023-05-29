<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.html');
  exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chào mừng</title>
</head>
<body>
  <h2>Chào mừng <?php echo $username; ?></h2>
  <p>Bạn đã đăng nhập thành công!</p>
  <a href="logout.php">Đăng xuất</a>
</body>
</
