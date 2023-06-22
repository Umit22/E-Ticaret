    <?php 
error_reporting(0);
session_start();
ob_start();
require_once 'Admin/islem/baglanti.php';

require_once 'function.php';

$ayar=$baglanti->prepare("SELECT * FROM ayarlar where id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);


$hakkimizda=$baglanti->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");
$hakkimizda->execute(array(1));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);

$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi ");
$kullanicisor->execute(array(
'kullanici_adi'=>@$_SESSION['normalgiris']

));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$var=$kullanicisor->rowCount();





















?>

<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Optik Dünyası E-Ticaret</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
       
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
        <link rel="stylesheet" href="css/font-awesome.min.css">
               <link rel="stylesheet" href="css/fontawesome-stars.css">
    
        <link rel="stylesheet" href="css/meanmenu.css">
   
        <link rel="stylesheet" href="css/owl.carousel.min.css">
       
        <link rel="stylesheet" href="css/slick.css">
   
        <link rel="stylesheet" href="css/animate.css">
    
        <link rel="stylesheet" href="css/jquery-ui.min.css">
   
        <link rel="stylesheet" href="css/venobox.css">
      
        <link rel="stylesheet" href="css/nice-select.css">
     
        <link rel="stylesheet" href="css/magnific-popup.css">
     
        <link rel="stylesheet" href="css/bootstrap.min.css">
 
        <link rel="stylesheet" href="css/helper.css">

        <link rel="stylesheet" href="style.css">
 
        <link rel="stylesheet" href="css/responsive.css">
     
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    
        <div class="body-wrapper">
        
            <header>
                            <div style="background-color: black;" class="header-top">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span style="color: white;">Telefon:</span><a style="color: white;" href="#"><?php echo $ayarcek['telefon'] ?></a></li>
                                    </ul>
                                </div>
                            </div>
                   
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                  
                                        <li>
                                            <div class="ht-setting-trigger"><span style="color: white;">HESABIM</span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                    <li><a href="kullanici">Hesabım</a></li>
                                                    <li><a href="sepet">Sepetim</a></li>
                                                    <li><a href="siparisler">Geçmiş Siparişler</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                       
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                        <img src="logo.png" style="width:400px; margin-left:-130px; margin-top:-35px; height:100px;"alt="">
                                    </a>
                                </div>
                            </div>
                     
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                        
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                                 
                                       <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori  order by kategori_sira ASC");
                  $kategori->execute();
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <option value="<?php echo $kategoricek['kategori_id'] ?>" ><?php echo $kategoricek['kategori_adi'] ?></option>                          
                                   <?php  } ?>
                                    </select>
                                    <input type="text" name="aranacakkelime" placeholder="Aradığınız kelimeyi girin.">
                                    <button  name=" kelimearama" style="background-color: whitesmoke;" class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                         
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                            

                                        <li class="hm-wishlist">
                                            <a href="kullanici">
                                               
                                                <i class="fa fa-user-o"></i>

                                            </a>
                                            Hesabım
                                        </li>
                        
                                        <li class="hm-minicart">
                                            <div style="background-color: blue;" class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">Sepetim
                                                    <span class="cart-item-count"></span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <?php 

                                                        foreach ($_COOKIE['sepet'] as $key => $value) {
                                                         

                                                        $urunler=$baglanti->prepare("SELECT * FROM urunler where urun_id=:urun_id order by urun_sira ASC");
                                                        $urunler->execute(array(
                                                        'urun_id'=>$key


                                                        ));
                                                        $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);
$sepettoplam+=$value * $urunlercek['urun_fiyat'];

                                                        ?>




                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html"><?php echo $urunlercek['urun_baslik'] ?></a></h6>
                                                            <span><?php echo $urunlercek['urun_fiyat'] ?>₺</span>
                                                        </div>
                                                <a href="islem?sepetsil&id=<?php echo $key ?>"><button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button></a>
                                                    </li>
                                                   <?php } ?>
                                                </ul>
                                              <p class="minicart-total">Toplam fİyat: <span><?php 

                                                   echo @$sepettoplam;

                                                 ?></span></p>
                                                <div class="minicart-button">
                                                    <a href="sepet" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Sepeti Görüntüle</span>
                                                    </a>
                                                    <a href="alisveris" class="li-button li-button-fullwidth">
                                                        <span>Alışverişi Tamamla</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    
                                    </ul>
                                </div>
                        
                            </div>
                      
                        </div>
                    </div>
                </div>
           
                <div style="background-color: whitesmoke;" class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                         
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                           <li><a href="index">Anasayfa</a></li>
                                            <li class="megamenu-holder"><a href="">Kategorİler</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li>
                                                        <ul>
                                                            <?php
$kategori=$baglanti->prepare("SELECT * FROM kategori where kategori_durum=:kategori_durum and kategori_sira between 1 and 50 limit 40 ");
$kategori->execute(array(

'kategori_durum'=>1

));
while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                           <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_adi'] ?></a></li>
                                                        <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <?php
$kategori=$baglanti->prepare("SELECT * FROM kategori where kategori_durum=:kategori_durum and kategori_sira between 50 and 100 limit 40 ");
$kategori->execute(array(

'kategori_durum'=>1


));
while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_adi'] ?></a></li
                                                            >
                                                        <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>

                                                             <?php
$kategori=$baglanti->prepare("SELECT * FROM kategori where kategori_durum=:kategori_durum and kategori_sira between 100 and 150 limit 40 ");
$kategori->execute(array(

'kategori_durum'=>1


));
while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_adi'] ?></a></li
                                                            >
                                                        <?php } ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            
                                            <li><a href="hakkimizda">Hakkımızda</a></li>
                                            
                                            <li><a href="iletisim">İLETİŞİM</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
         
           
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
           
            </header>