<?php require_once 'header.php'; 

require_once 'sidebar.php';










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
$katid=$_GET['katid'];
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
                    <input  name="urunleresim" type="file" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ürünler başlık</label>
                    <input  name="urunlerbaslik" type="text" class="form-control"  placeholder="Lütfen ürünler başlık  giriniz.">
                  </div>
                   
<label>Hakkımızda Detay</label>
                <textarea name="urunleraciklama" class="ckeditor" id="editor1"></textarea>
                

<input type="hidden" name="katsid" value="<?php echo $_GET['katid'] ?>">



                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler sıra</label>
                    <input  name="urunlersira" type="text" class="form-control"  placeholder="Lütfen ürünler sıra giriniz.">
                  </div><div class="form-group">
                    <label for="exampleInputPassword1">Ürünler model</label>
                    <input  name="urunlermodel" type="text" class="form-control"  placeholder="Lütfen ürün modelini giriniz.">
                  </div><div class="form-group">
                    <label for="exampleInputPassword1">Ürünler renk</label>
                    <input  name="urunlerrenk" type="text" class="form-control"  placeholder="Lütfen ürün rengini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler adet</label>
                    <input  name="urunleradet" type="text" class="form-control"  placeholder="Lütfen ürün adedini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler fiyat</label>
                    <input  name="urunlerfiyat" type="text" class="form-control"  placeholder="Lütfen ürün fiyatını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürünler anahtar kelime</label>
                    <input  name="urunleranahtar" type="text" class="form-control"  placeholder="Lütfen ürün anahtar kelimesini giriniz.">
                  </div>
                                <div class="form-group">
                  <label>Ürünler durum</label>
                  <select name="urunlerdurum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="0">Pasif</option>
                    
                  </select>
                </div>


  <div class="form-group">
                  <label>Öne çıkar</label>
                  <select name="urunleronecikar" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Öne çıkar</option>
                    <option value="0">Öne çıkarma</option>
                    
                  </select>
                </div>

                <div class="card-footer">
                  <button name="urunlerkaydet" type="submit" class="btn btn-primary">GÖNDER</button>
                </div>
              </form>
            </div>











          


        </div>
      </div>
    </section>
  </div>

  <?php require_once 'footer.php'; ?>