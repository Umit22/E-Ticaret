<?php 
session_start();


require_once 'islem/baglanti.php';

$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_yetki=:kullanici_yetki ");
$kullanicisor->execute(array(
'kullanici_adi'=>$_SESSION['girisbelgesi'],
'kullanici_yetki'=>2


));


$var=$kullanicisor->rowCount();

if ($var==0) {
 Header("Location:login?durum=izinsizgiris");
}



$ayar=$baglanti->prepare("SELECT * FROM ayarlar where id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);



$hakkimizda=$baglanti->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");
$hakkimizda->execute(array(1));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Optik Dünyası</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
 
  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Anasayfa</a>
      </li>
     
    </ul>

    

   
    <ul class="navbar-nav ml-auto">
     
      
      
    </ul>
  </nav>
  
  