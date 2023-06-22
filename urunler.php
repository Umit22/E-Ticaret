<?php require_once 'header.php' ?>

<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-15">
             
             
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        
                        <div class="toolbar-amount">
                            <span>Gösteriliyor 1 to 6 </span>
                        </div>
                    </div>
                  
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sırala:</p>
                            <select class="nice-select">
                                <option value="trending">İsime Göre (A-Z)</option>
                                
                                <option value="sales">İsime Göre (Z - A)</option>
                                <option value="rating">Düşük Fiyat </option>
                                <option value="date">Yüksek Fiyat </option>
                                
                            </select>
                        </div>
                    </div>
         
                </div>
             
                <div class="shop-products-wrapper" style="width:100%; position:relative;">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                   

 <?php
$urunler=$baglanti->prepare("SELECT * FROM urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_sira ASC");
$urunler->execute(array(
'kategori_id'=>$_GET['kategori_id'],
'urun_durum'=>1


));
while ($urunlercek=$urunler->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <form method="get" action="urunler-detay.php">
                                    <div style="width:400px;height: 400px;" class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                      
                                        <div class="single-product-wrap" style="width:400px; height: 450px;">
                                            <div class="product-image">
                                                <input type="hidden" name="urun_id" value="<?php echo $urunlercek["urun_id"]; ?>">
                                                 
                                               
                                                <img style="width: 350px; height: 300px;" src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image"> 
                                            
                                                <span class="sticker">Yeni</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    
                                                    <h4><?php echo $urunlercek['urun_baslik'] ?></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php echo $urunlercek['urun_fiyat'] ?>₺</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                       <li><button class="btn btn-light" name="gonder">Detaya Git</button> </li> 
                                                        </ul>

                                                    
                                                
                                           
                                                    
                                                </div>

                                            </div>
                                        </div>
                       
                                    </div>
                                     </form>
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p style="margin-top: 50px;"> 3 Tane Ürün Gösteriliyor.</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box" style="margin-top: 60px;">
                                        <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Geri</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#" class="Next"> İleri <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>