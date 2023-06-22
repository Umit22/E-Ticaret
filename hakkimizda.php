<?php require_once 'header.php'; ?>
           
            <div class="about-us-wrapper pt-60 pb-40">
                <div class="container">
                    <div class="row">
            
                        <div class="col-lg-6 order-last order-lg-first">
                            <div class="about-text-wrap">
                                <h2><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h2>

                                <p style="color:black"><?php echo $hakkimizdacek['hakkimizda_detay'] ?></p>

                            </div>
                        </div>
                        
                        <div class="col-lg-5 col-md-10">
                            <div class="about-image-wrap">
                                <img class="img-full" src="Admin/resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?>" alt="About Us" />
                            </div>
                        </div>
          
                    </div>
                </div>
            </div>
          
            <?php require_once 'footer.php' ?>