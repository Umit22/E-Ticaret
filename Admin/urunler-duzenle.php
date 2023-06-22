<?php require_once 'header.php'; 

require_once 'sidebar.php';



$urunler=$baglanti->prepare("SELECT * FROM urunler where urun_id=:urunler_id");
$urunler->execute(array(

'urunler_id'=>@$_GET['id']
));
$urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);







 ?>


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
        
        <div class="row">




<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">ÜRÜN EKLEME </h3>    </div> <?php 

if (@$_GET['yuklenme']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }

elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }

elseif(@$_GET['yuklenme']=="kullanicivar"){ ?>
<h6 style="color:red">(Bu kullanıcı kayıtlı)</h6> 


              <?php } ?>
              
          
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
    


 <div class="form-group">
                  <label>Kategori Seç</label>
                  <select name="urunkategori" class="form-control select2" style="width: 100%;">
                    
<?php
$katid=$urunlercek['kategori_id'];
$kategori=$baglanti->prepare("SELECT * FROM kategori order by kategori_id ASC");
$kategori->execute();
while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) {

$kategoriid=$kategoricek['kategori_id'];

                     ?>
                    <option <?php if ($katid==$kategoriid) {
                      echo "selected";
                    } ?> value="<?php echo $kategoriid ?>"><?php echo $kategoricek['kategori_adi']; ?></option>
<?php } ?>
                    
                  </select>
                </div>


<div class="form-group">
                    <label for="exampleInputEmail1">ürünler resim</label>
                 <img style="width: 170px" src="resimler/urunler/<?php echo $urunlercek['urun_resim']; ?>">
                  </div>



                   <div class="form-group">
                    <label for="exampleInputEmail1">ürünler resim</label>
                    <input  name="urunleresim" type="file" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ürünler başlık</label>
                    <input value="<?php echo $urunlercek['urun_baslik'] ?>" name="urunlerbaslik" type="text" class="form-control"  placeholder="Lütfen ürünler başlık  giriniz.">
                  </div>
<input type="hidden" name="katsid" value="<?php echo $_GET['katid'] ?>">


                   
<label>Hakkımızda Detay</label>
                <textarea name="urunleraciklama" class="ckeditor" id="editor1"><?php $urunlercek['urun_aciklama'] ?></textarea>
<input type="hidden" name="katsid" value="<?php echo @$_GET['katid'] ?>">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler sıra</label>
                    <input value="<?php echo $urunlercek['urun_sira'] ?>"  name="urunlersira" type="text" class="form-control"  placeholder="Lütfen ürünler sıra giriniz.">
                  </div><div class="form-group">
                    <label for="exampleInputPassword1">Ürünler model</label>
                    <input value="<?php echo $urunlercek['urun_model'] ?>"  name="urunlermodel" type="text" class="form-control"  placeholder="Lütfen ürün modelini giriniz.">
                  </div><div class="form-group">
                    <label for="exampleInputPassword1">Ürünler renk</label>
                    <input value="<?php echo $urunlercek['urun_renk'] ?>"  name="urunlerrenk" type="text" class="form-control"  placeholder="Lütfen ürün rengini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler adet</label>
                    <input value="<?php echo $urunlercek['urun_adet'] ?>"  name="urunleradet" type="text" class="form-control"  placeholder="Lütfen ürün adedini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler fiyat</label>
                    <input value="<?php echo $urunlercek['urun_fiyat'] ?>"  name="urunlerfiyat" type="text" class="form-control"  placeholder="Lütfen ürün fiyatını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler anahtar kelime</label>
                    <input  value="<?php echo $urunlercek['urun_etiket'] ?>" name="urunleranahtar" type="text" class="form-control"  placeholder="Lütfen ürün anahtar kelimesini giriniz.">
                  </div>
                                <div class="form-group">
                  <label>Ürünler durum</label>
                  <select name="urunlerdurum" class="form-control select2" style="width: 100%;">
                    <option <?php if ($urunlercek['urun_durum']=="1") {  echo "selected"; } ?>  value="1" selected="selected">Aktif</option>
                    <option <?php if ($urunlercek['urun_durum']=="0") {  echo "selected"; } ?>  value="0">Pasif</option>
                    
                  </select>
                </div>
<input type="hidden" name="id" value="<?php echo $urunlercek['urun_id'] ?>">
<input type="hidden" name="eskiresim" value="<?php echo $urunlercek['urun_resim'] ?>">

  <div class="form-group">
                  <label>Öne çıkar</label>
                  <select name="urunleronecikar" class="form-control select2" style="width: 100%;">
                    <option <?php if ($urunlercek['onecikan']=="1") {
                      echo "selected";
                    } ?> value="1" selected="selected">Öne çıkar</option>
                    <option <?php if ($urunlercek['onecikan']=="0") {
                      echo "selected";
                    } ?> value="0">Öne çıkarma</option>
                    
                  </select>
                </div>

                <div class="card-footer">
                  <button name="urunduzenle" type="submit" class="btn btn-primary">GÖNDER</button>
                </div>
              </form>
            </div>











          


        </div>
      </div>
    </section>
  </div>

  <?php require_once 'footer.php'; ?>