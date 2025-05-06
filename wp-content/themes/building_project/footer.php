    <!-- begin footer  -->
    <div class="border_footer">
        <div class="container control_privacy">
            <div class="d-flex justify-content-between footer_control">
                <p class="txt_term">The Pine House Contruction co., Ltd. All right reserved.</p>
                <div class="d-flex gap-5 control_term_of_use">
                <a class="list-group-item" href="<?php echo get_site_url(); ?>/termofuse"><p class="txt_term">Term of Use</p></a>
                    <a class="list-group-item" href="<?php echo get_site_url(); ?>/privacy"><p class="txt_term">Privacy</p></a>
                </div>
                <div class="icon_footer">
                    <div class="control_media_icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon (1).png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon (2).png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon (3).png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon (4).png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end footer  -->

    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".parallax-slider", {
                speed: 1000,
                parallax: true,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                grabCursor: true,
                effect: "creative",
              creativeEffect: {
                prev: {
                  shadow: true,
                  translate: ["-120%", 0, -500],
                },
                next: {
                  shadow: true,
                  translate: ["120%", 0, -500],
                },
              },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                navigation: {
                    nextEl: ".swiper-nav-next",
                    prevEl: ".swiper-nav-prev"
                },
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
</body>
</html>