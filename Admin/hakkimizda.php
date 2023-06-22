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
              
            
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputPassword1">RESİM</label>
                   <img style="width:250px" src="resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?>">
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $hakkimizdacek['hakkimizda_resim'] ?>">
                  <div class="form-group">
                    <label for="exampleInputPassword1">RESİM</label>
                    <input name="resim" type="file" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">HAKKIMIZDA BAŞLIK</label>
                    <input value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" name="baslik" type="text" class="form-control"  placeholder="Lütfen başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">HAKKIMIZDA DETAY</label>
                    <input value="<?php echo $hakkimizdacek['hakkimizda_detay'] ?>" name="detay" type="text" class="form-control"  placeholder="Lütfen detay giriniz.">
                  </div>
                   
                  
                 
                 <textarea class="ckeditor" id="editor1"></textarea>
                </div>
                

                <div class="card-footer">
                  <button name="hakkimizdakaydet" type="submit" class="btn btn-primary">GÖNDER</button>
                </div>
              </form>
            </div>











          

        
        </div>
        
      </div>
    </section>
   
  </div>

  <?php require_once 'footer.php'; ?>