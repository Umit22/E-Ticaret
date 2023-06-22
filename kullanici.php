<?php require_once 'header.php'; 



if ($var==0) {
    #kullanıcı yoksa

   header("Location:giris.php?durum=girisyap");
}









?>

<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
    
                <form action="admin/islem/islem.php" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Kullanıcı Bilgileri <?php if (@$_GET['yuklenme'] == "basarisiz") { ?>
                                <i style="color:red"> Hata bulundu</i>
                            <?php         } elseif (@$_GET['yuklenme'] == "basarili") { ?>
                        <i style="color:green;">Başarılı</i>
                         <?php    } ?>
                        </h4>
                        <input type="hidden" name="kullaniciid" value="<?php echo $kullanicicek['kullanici_id'] ?>">
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Kullanıcı Ad Soyad*</label>
                                <input value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" name="adsoyad" required="" class="mb-0" type="text" placeholder="Adınızı soyadınızı giriniz.">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Email</label>
                                <input value="<?php echo $kullanicicek['kullanici_mail'] ?>" name="email" required="" class="mb-0" type="text" placeholder="Emailinizi giriniz.">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Adres</label>
                                <input value="<?php echo $kullanicicek['kullanici_adres'] ?>" name="adres" required="" class="mb-0" type="text" placeholder="Adresinizi giriniz.">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Şehir</label>
                                <input value="<?php echo $kullanicicek['kullanici_il'] ?>" name="sehir" required="" class="mb-0" type="text" placeholder="Şehrinizi giriniz.">
                            </div>
                            <div class="col-12 mb-20">
                                <label>İlçe</label>
                                <input value="<?php echo $kullanicicek['kullanici_ilce'] ?>" name="ilce" required="" class="mb-0" type="text" placeholder="İlçenizi giriniz.">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Telefon</label>
                                <input value="<?php echo $kullanicicek['kullanici_tel'] ?>" name="telefon" required="" class="mb-0" type="text" placeholder="Telefon numaranızı giriniz.">
                            </div>


                            <div class="col-md-12">
                                <button name="kullanicidüzenle" type="submit" class="register-button mt-0">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="islem.php" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Kayıt






                            <?php if (isset($_GET['durum'])) { ?>
                                <?php if ($_GET['durum'] == "kullanicivar") { ?>
                                    <i style="color: red;">Bu kullanıcı sistemde kayıtlı</i>
                                <?php } else if ($_GET['durum'] == "sifrehata") { ?>

                                    <i style="color:red">Şifreleri aynı giriniz.</i>
                                <?php } elseif ($_GET['durum'] == "sifreeksik") { ?>
                                    <i style="color:red">Lütfen minimum 8 karakter olacak şekilde şifrenizi giriniz.</i>
                                <?php } elseif ($_GET['durum'] == "basarisiz") { ?>
                                    <i style="color:red">İşlem başarısız </i>
                            <?php }
                            } ?>






                        </h4>

                        <div class="row">
                            <div class="col-md-6 col-12 mb-20">
                                <label>Kullanıcı Adı</label>
                                <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı adınızı giriniz.">
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Ad Soyad</label>
                                <input name="adsoyad" required="" class="mb-0" type="text" placeholder="Ad soyadınızı giriniz.">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email Adresi*</label>
                                <input name="email" required="" class="mb-0" type="email" placeholder="Email adresinizi giriniz. ">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Şifre</label>
                                <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi giriniz.">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Şifre Tekrar</label>
                                <input name="sifretekrar" required="" class="mb-0" type="password" placeholder="Şifrenizi tekrar giriniz.">
                            </div>
                            <div class="col-12">
                                <button name="register" class="register-button mt-0">Kayıt Ol</button>
                            </div>
                        </div>
                    </div>
                </form> 
                <a href="cikis"><button style="float:right;" class="btn btn-info"><i class="fa fa-sign-out"></i>Çıkış Yap</button></a>
            </div>
        </div>  
    </div>
</div>
<?php require_once 'footer.php'; ?>