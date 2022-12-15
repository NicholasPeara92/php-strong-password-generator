<?php 

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*<>~`+=,.;:/?';
  return substr(str_shuffle($data), 0, $chars);
};
if( !empty($_GET['length'])) {
  $length = $_GET['length'];
  $_SESSION['password'] = password_generate($length);
  header("Location: http://localhost/php-strong-password-generator/password.php");
};
