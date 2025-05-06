<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/boostrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styabout.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/service.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylenew.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/detailnew.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
    <title>Building</title>

</head>

<body>


        <!-- begin header  -->
        <header class="header">
        <div class="container control_header d-flex justify-content-between p-2" id="close_header_res">
            <div class="control_image">
                <a href="<?php echo get_site_url(); ?>/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-01-01.png" alt="">
                </a>
            </div>
            <div class="d-flex gap-4">
                <div>
                    <div class="search_control position-relative control_btn_access" id="">
                        <i class="bi bi-search" id="item_search"></i>
                        <input class="me-2 width_for_search">
                    </div>
                </div>
                <div class="control_btn_access">
                    <a class="list-group-item " href="<?php echo get_site_url(); ?>/clientAccess">
                        <button class="btn back_btn btn_access text-white">Client Access</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="border_head"></div>
        <div class="container position-relative container_menu control_menu d-flex justify-content-center" id="header_con">
            <div class="control_image" id="close_head_computer">
                <a href="<?php echo get_site_url(); ?>/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-01-01.png" alt="">
                </a>
            </div>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu list_group d-flex gap-4 menu_top_padding" id="showList">
              <li><a href="<?php echo get_site_url(); ?>/" class="list-group-item set_menu padding_menu">Home</a></li>

              <li>
                <div class="list-group-item set_menu padding_menu" id="aboutMenu">
                    <span class=" d-flex justify-content-between">
                        <a class="list-group-item" href="<?php echo get_site_url(); ?>/about">About Us</a>
                        <span class="icon_for_display">
                            <i class="bi bi-plus-lg" id="downFill"></i>
                            <i class="bi bi-dash" id="upFill"></i>
                        </span>
                    </span>
                </div>
                <div class="control_about_menu" id="showMenu">
                  <ul class="" id="menu_background">
                    <li><a href="<?php echo get_site_url(); ?>/about/#ceoStatement" class="list-group-item set_menu text-black padding_menu">CEO Statement</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/about/#corporateProfile" class="list-group-item set_menu text-black padding_menu">Corporate Profile</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/about/#corporateMission" class="list-group-item set_menu text-black padding_menu">Corporate Mission Statement</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/about/#ethicalPrinciples" class="list-group-item set_menu text-black padding_menu">Ethical Principles</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/servicetechnology" class="list-group-item set_menu padding_menu">Service & Technology</a></li>
              <li><a href="<?php echo get_site_url(); ?>/project" class="list-group-item set_menu padding_menu">Projects</a></li>
              <li><a href="<?php echo get_site_url(); ?>/csr" class="list-group-item set_menu padding_menu">CSR</a></li>
              <li><a href="<?php echo get_site_url(); ?>/joinus" class="list-group-item set_menu padding_menu">Join Us</a></li>
              <li><a href="<?php echo get_site_url(); ?>/news" class="list-group-item set_menu padding_menu">News</a></li>
              <li><a href="<?php echo get_site_url(); ?>/contact" class="list-group-item set_menu padding_menu">Contact Us</a></li>
              <li class="res_control_search">
                <div class="position-relative" id="control_new_search">
                    <input class="form-control me-2 res_search" type="search" aria-label="Search">
                    <i class="bi bi-search" id="res_icon_search"></i>
                </div>
              </li>
            </ul>
        </div>
        <div class="border_header_bottom"></div>
      </header>
    <!-- end header  -->



