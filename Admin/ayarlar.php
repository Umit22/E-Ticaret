<?php require_once 'header.php'; 

require_once 'sidebar.php';










 ?>

  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
        
        <div class="row">





<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">GENEL AYARLAR </h3>    </div> <?php 

if (@$_GET['yuklenme']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }
elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }


              ?>
              
              
              <form action="islem/islem.php" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">SİTE BAŞLIĞI</label>
                    <input value="<?php echo $ayarcek['baslik'] ?>" name="baslik" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">AÇIKLAMA</label>
                    <input value="<?php echo $ayarcek['aciklama'] ?>" name="aciklama" type="text" class="form-control"  placeholder="Lütfen sitenizin açıklamasını giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">ANAHTAR  KELİME</label>
                    <input value="<?php echo $ayarcek['anahtarkelime'] ?>" name="anahtarkelime" type="text" class="form-control"  placeholder="Lütfen sitenizin anahtar kelimesini giriniz.">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">GÖNDER</button>
                </div>
              </form>
            </div>







<div class="card card-primary col-md-12">
             

           
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <input type="hidden" name="eskilogo" value="<?php echo $ayarcek['logo'] ?>">
                 
                   <div class="form-group">
                    <label for="exampleInputPassword1">LOGO</label>
                   <img style="width:250px" src="resimler/logo/<?php echo $ayarcek['logo'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">LOGO</label>
                    <input name="logo" type="file" class="form-control" >
                  </div>
                 
                </div>
                

                <div class="card-footer">
                  <button name="logokaydet" type="submit" class="btn btn-primary">GÖNDER</button>
                </div>
              </form>
            </div>





          

        </div>

      </div>
    </section>
 
  </div>

    <?php require_once 'footer.php'; ?>