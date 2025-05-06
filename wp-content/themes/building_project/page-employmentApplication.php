<?php
    get_header(); 
?>
    <!-- begin main content  -->
    <div class="container">
        <div class="service">
            <h2>EMPLOYMENT APPLICATION</h2>
        </div>

        <div class="join-service mt-5">
            <?php echo the_content(''); ?>

        </div>
    </div>

    <!-- end main content  -->

    <style>
        .wpcf7-form-control{
            margin-top: 6px;
            height: 54px;
        }
        .wpcf7-submit{
            margin-top: 24px;
            width: 75%;
            height: 54px;
            background-color: #b57d2c !important;
            color: #ffffff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
    </style>

<?php
    get_footer(); 
?>