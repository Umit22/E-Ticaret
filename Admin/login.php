<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Optik Dünyası E-Ticaret Giriş</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color:honeydew;" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a style="color:black" href="../../index2.html"><b style="color:black;">Optik</b> Dünyası</a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      
        <?php 
        if(@$_GET['durum']=="hata") { ?>
         <p style="color: red;" class="login-box-msg">    Kullanıcı adı ya da şifre hatalı
      <?php   }
      
        else{
          echo "Lütfen giriş bilgilerini giriniz.";
        }







        ?>


      </p>

      <form action="islem/islem.php" method="post">
        <div class="input-group mb-3">
          <input name="kadi" type="text" class="form-control" placeholder="Kullanıcı adınızı giriniz.">
          <div class="input-group-append">
            <div class="input-group-text">
              <span style="color:black" class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="sifre" type="password" class="form-control" placeholder="Şifrenizi giriniz.">
          <div class="input-group-append">
            <div class="input-group-text">
              <span style="color:black" class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Beni Hatırla
              </label>
            </div>
          </div>
         
          <div class="col-4">
            <button name="giris" type="submit" class="btn btn-primary btn-block">Giriş</button>
          </div>
      
        </div>
      </form>

  

    </div>
 
  </div>
</div>



</body>
</html>
