<?php
require 'connect_sql.php';

if (isset($_POST['submit_register'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordConfirm = $_POST['password_confirm'];
  if ($password === $passwordConfirm) {
    $queryRegister = "INSERT INTO `users`(`email`, `password`) VALUES ('$email','$password')";
  
    if ($conn->query($queryRegister)) {
      echo "<h1>Đăng ký thành công</h1> <a href=authentication.php>Bấm vào đây để đăng nhập ngay.</a>";
    } else {
      echo "Error: " . $queryRegister . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "<h1>Mật khẩu không trùng khớp, vui lòng thử lại</h1><a href='authentication.php'>Bấm vào đây</a>";
  }

}

if (isset($_POST['submit_login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users where `email` = '$email' and `password` = '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "Chào mừng bạn đến với trang web. <a href=authentication.php>Trở lại.</a>";
  } else {
    echo "Tên đăng nhập sai hoặc mật khẩu không đúng. Vui lòng kiểm tra lại! <a href=authentication.php>Trở lại</a>";
  }
}

?>
