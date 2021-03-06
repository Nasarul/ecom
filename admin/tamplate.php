<?php include("includes/head.php"); ?>

<body>
    <div class="fixed-button">
        <a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
        </a>
    </div>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- nav bar start -->
            <?php include_once("includes/header-nav.php"); ?>
            <!-- nav bar end -->

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- side nav bar start -->
                    <?php include_once("includes/sidenav.php"); ?>
                    <!-- side nav bar end -->

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            
                                            <?php 
                                                if ($views){
                                                    if($views == "dashboard"){
                                                        include("views/dashboard-view.php");
                                                    }elseif($views =="add-product"){
                                                        include("views/add-product-view.php");
                                                    }elseif($views =="add-cat"){
                                                        include("views/add-category-view.php");
                                                    }elseif($views =="manage-cat"){
                                                        include("views/manage-category-view.php");
                                                    }elseif($views =="manage-product"){
                                                        include("views/manage-product-view.php");
                                                    }elseif($views =="manage-user"){
                                                        include("views/manage-user-view.php");
                                                    }
                                                }
                                            ?>
                                            
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
</body>
<?php include("includes/script.php"); ?>