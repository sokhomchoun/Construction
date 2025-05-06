<?php
    get_header(); 
?>
        <!-- begin main content  -->
        <div class="container mt-5">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                <?php
                    $image_details = SCF::get("ImageDetails");
                    foreach($image_details as $element){
                        $img_url = wp_get_attachment_url($element['imagedetail']);
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $img_url; ?>" />
                        </div>
                        <?php 
                    }
                ?>
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                <?php
                    $image_details = SCF::get("ImageDetails");
                    foreach($image_details as $element){
                        $img_url1 = wp_get_attachment_url($element['imagedetail']);
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $img_url1; ?>" />
                        </div>
                        <?php 
                    }
                ?>
                </div>
            </div>
     
            <div class="mt-5 mb-5">
                <h1 class="color_btn" id="design_build_new_page">A Design-Build</h1>
                <div class="contron_text_build">
                    <p> <?php the_content(''); ?></p>
                </div>
            </div>
            <div class="control_project_fact mt-5 mb-5">
                <h1 class="color_btn" id="design_build_new_page">Project fact</h1>
                <div class="detail_fact mt-4">
                    <div class="d-flex gap-5 flex_contro_text">
                        <p class="type_fact text-uppercase">TYPe:</p>
                        <div>
                            <p class="txt_fact">
                              <?php $type = SCF::get("type"); echo $type; ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-5 flex_contro_text">
                        <p class="type_fact text-uppercase">Location:</p>
                        <div>
                            <p class="txt_fact">
                              <?php $location = SCF::get("location"); echo $location; ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-5 flex_contro_text">
                        <p class="type_fact text-uppercase">Site Area:</p>
                        <div>
                            <p class="txt_fact">
                              <?php $sitearea = SCF::get("sitearea"); echo $sitearea; ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-5 flex_contro_text">
                        <p class="type_fact text-uppercase">contruction area:</p>
                        <div>
                            <p class="txt_fact">
                              <?php $contructionarea = SCF::get("contructionarea"); echo $contructionarea; ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-5 flex_contro_text">
                        <p class="type_fact text-uppercase">height:</p>
                        <div>
                            <p class="txt_fact">
                              <?php $height = SCF::get("height"); echo $height; ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-5 flex_contro_text">
                        <p class="type_fact text-uppercase">total floors:</p>
                        <div>
                            <p class="txt_fact">
                              <?php $totalfloors = SCF::get("totalfloors"); echo $totalfloors; ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-5 flex_contro_text">
                        <p class="type_fact text-uppercase">facilities:</p>
                        <div>
                            <p class="txt_fact">
                              <?php $facilities = SCF::get("facilities"); echo $facilities; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    <!-- end main content  -->
    <style>
        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
          }
          .swiper-slide {
            background-size: cover;
            background-position: center;
          }
          .mySwiper2 {
            height: 80%;
            width: 100%;
          }
          .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
          }
      
          .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
          }
          .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
          }
          .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
          }
    </style>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>

 


<?php
    get_footer(); 
?>