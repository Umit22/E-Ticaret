<?php require_once 'header.php'; 

require_once 'sidebar.php';












 ?>


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
        
        <div class="row">





<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">İLETİŞİM AYARLARI </h3>    </div> <?php 

if (@$_GET['yuklenme']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }
elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }


              ?>
              
             
              <form action="islem/islem.php" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TELEFON NUMARASI</label>
                    <input value="<?php echo $ayarcek['telefon'] ?>" name="telefon" type="text" class="form-control"  placeholder="Lütfen sitenizin telefon numarasını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">ADRES</label>
                    <input value="<?php echo $ayarcek['adres'] ?>" name="adres" type="text" class="form-control"  placeholder="Lütfen sitenizin adresini giriniz.">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">MAİL</label>
                    <input value="<?php echo $ayarcek['email'] ?>" name="email" type="text" class="form-control"  placeholder="Lütfen sitenizin mail adresini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">MESAİ</label>
                    <input value="<?php echo $ayarcek['mesai'] ?>" name="mesai" type="text" class="form-control"  placeholder="Lütfen sitenizin mesai saatini giriniz.">
                  </div>
                 
                </div>
              

                <div class="card-footer">
                  <button name="iletisimkaydet" type="submit" class="btn btn-primary">GÖNDER</button>
                </div>
              </form>
            </div>







          


        </div>
     
      </div>
    </section>

  </div>

  <?php require_once 'footer.php'; ?>