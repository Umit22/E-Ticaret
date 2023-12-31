<div style="background-color:black;" class="footer">
               
                <div class="footer-static-top">
                    <div class="container">
                     
                        <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                            <div class="row">
                               
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2 style="color:white"> Ücretsiz Kargo</h2>
                                            <p class="beyazyazi">Tüm türkiye içerisinde ücrersiz kargo.</p>
                                        </div>
                                    </div>
                                </div>
                             
                               
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2 class="beyazyazi">Güvenli Ödeme</h2>
                                            <p class="beyazyazi">Güvenli alışveriş.</p>
                                        </div>
                                    </div>
                                </div>
                              
                              
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2 class="beyazyazi">Uygun Fiyat</h2>
                                            <p class="beyazyazi">Hesaplı ürünlerden dilediğinizi alın.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2 class="beyazyazi">Canlı Destek </h2>
                                            <p class="beyazyazi">Sorularınızı bize sorabilirsiniz.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
                <style type="text/css">
                    .beyazyazi{
                        color:white !important;
                    }

                </style>
                
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                               
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-logo">
                                        <img src="logo.png" style="width:400px; margin-left:-130px; margin-top:-35px; height:100px;"alt="">
                                        <p class="beyazyazi">
                                            En uygun ürünlerin bulunduğu e ticaret sitesi
                                        </p>
                                    </div>
                                    <ul class="des">
                                        <li>
                                            <span style="color:white">Adres: </span>
                                            <b style="color:white"> <?php echo $ayarcek['adres'] ?></b>
                                        </li>
                                        <li>
                                            <span style="color:white">Telefon: </span>
                                            <a style="color:white" href="tel://<?php echo $ayarcek['telefon'] ?>"><?php echo $ayarcek['telefon'] ?></a>
                                        </li>
                                        <li>
                                            <span style="color:white">Email: </span>
                                            <a style="color:white" href="mailto://<?php echo $ayarcek['email'] ?>"><?php echo $ayarcek['email'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="beyazyazi">Kategoriler</h3>
                                        <ul>
                                           <?php $kategori=$baglanti->prepare("SELECT * FROM  kategori  order by kategori_sira ASC limit 6");
                  $kategori->execute();
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <li><a class="beyazyazi" href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_adi'] ?></a></li>
                                           <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="beyazyazi">Sayfalar</h3>
                                        <ul>
                                            <li><a class="beyazyazi" href="index">Anasayfa</a></li>
                                            <li><a class="beyazyazi" href="hakkimizda">Hakkımızda</a></li>
                                           
                                            <li><a class="beyazyazi" href="iletisim">İletişim</a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="beyazyazi">Takip Ediniz</h3>
                                        <ul class="social-link">
                                            <li class="twitter">
                                                <a href="<?php echo $ayarcek['twitter'] ?>" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            
                                            
                                            <li class="facebook">
                                                <a href="<?php echo $ayarcek['facebook'] ?>" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="<?php echo $ayarcek['youtube'] ?>" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="<?php echo $ayarcek['instagram'] ?>" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                    
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="footer-static-bottom pt-55 pb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                
                               
                               
                                <div class="copyright text-center">
                                    <a href="#">
                                        <img src="images/payment/1.png" alt="">
                                    </a>
                                </div>
                              
                                <div class="copyright text-center pt-25">
                                    <span><a target="_blank" href="http:optikdünyasi.com">Optik Dünyası</a></span>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
          
            <div class="modal fade modal-wrapper" id="exampleModalCenter" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                  
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="images/product/large-size/1.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/2.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/3.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/4.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/5.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/6.jpg" alt="product image">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">                                        
                                            <div class="sm-image"><img src="images/product/small-size/1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/5.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/6.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                               
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2>Today is a good day Framed poster</h2>
                                            <span class="product-details-ref">Reference: demo_15</span>
                                            <div class="rating-box pt-20">
                                                <ul class="rating rating-with-review-item">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="review-item"><a href="#">Read Review</a></li>
                                                    <li class="review-item"><a href="#">Write Review</a></li>
                                                </ul>
                                            </div>
                                           
                                            
                                            
                                           
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                <div class="product-social-sharing pt-25">
                                                    <ul>
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
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
            </div>   
          
        </div>
       
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
      
        <script src="js/vendor/popper.min.js"></script>
       
        <script src="js/bootstrap.min.js"></script>
       
        <script src="js/ajax-mail.js"></script>
      
        <script src="js/jquery.meanmenu.min.js"></script>
      
        <script src="js/wow.min.js"></script>
       
        <script src="js/slick.min.js"></script>
       
        <script src="js/owl.carousel.min.js"></script>
       
        <script src="js/jquery.magnific-popup.min.js"></script>
        
        <script src="js/isotope.pkgd.min.js"></script>
        
        <script src="js/imagesloaded.pkgd.min.js"></script>
      
        <script src="js/jquery.mixitup.min.js"></script>
        
        <script src="js/jquery.countdown.min.js"></script>
       
        <script src="js/jquery.counterup.min.js"></script>
   
        <script src="js/waypoints.min.js"></script>
     
        <script src="js/jquery.barrating.min.js"></script>
    
        <script src="js/jquery-ui.min.js"></script>
  
        <script src="js/venobox.min.js"></script>
     
        <script src="js/jquery.nice-select.min.js"></script>
    
        <script src="js/scrollUp.min.js"></script>
       
        <script src="js/main.js"></script>
    </body>


</html>