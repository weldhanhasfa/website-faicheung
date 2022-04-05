<?php
// memulai sesi
session_start();
// bahasa default website
$default_lang = 'bahasa_indo';
// jika user merubah bahasa
if($_GET) {
  // ubah bahasa sesuai keinginan user
  $_SESSION['lang'] = $_GET['lang'];
  // kembalikan ke halaman index.php
  header("Location: index.php");
}
// jika tidak ada bahasa terdeteksi
if(!$_SESSION['lang']) {
  // atur bahasa ke bahasa default
  $_SESSION['lang'] = $default_lang;
}
// masukan file bahasa yang sedang aktif
include $_SESSION['lang'] . '.php';
?>