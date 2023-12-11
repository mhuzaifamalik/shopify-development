<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if(isset($page) && is_string($page)){echo $page;}else{echo 'Fitness Apparel & Accessories | Revolt Cara';} ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content=<?php if(isset($pageTag) && is_string($pageTag)){echo $pageTag;}else{echo 'desired tag';} ?> />
    <meta name="description"
        content=<?php if(isset($pageDesc) && is_string($pageDesc)){echo $pageDesc;}else{echo 'desired description';} ?> />
    <link rel="shortcut icon" href="images/favicon.webp" />
    <link href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="header-main">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img class="img-fluid" src="images/logo-white.webp" alt="Make Be Cool - Shopify Agency & Apps">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item custom-nav-item mble-link">
                            <a class="nav-link custom-nav-link" href="shopify-theme-development.php">Shopify Theme Development</a>
                        </li>
                        <li class="nav-item custom-nav-item mble-link">
                            <a class="nav-link custom-nav-link" href="migrate-to-shopify.php">Migrate to Shopify</a>
                        </li>
                        <li class="nav-item custom-nav-item mble-link">
                            <a class="nav-link custom-nav-link" href="shopify-maintenance.php">Shopify Maintenance</a>
                        </li>
                        <li class="nav-item custom-nav-item dropdown">
                            <a class="nav-link custom-nav-link dropdown-toggle" href="javascript:;" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <div class="dropdown-menu mega-menu">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-12 panel">
                                        <a class="drp-card" href="shopify-theme-development.php">
                                            <img class="img-fluid" src="images/theme-development-drp-icon.svg" alt="">
                                            <h6 class="drp-txt">Shopify Theme <br> Development</h6>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-12 panel">
                                        <a class="drp-card" href="migrate-to-shopify.php">
                                            <img class="img-fluid" src="images/migrate-shopify-drp-icon.svg" alt="">
                                            <h6 class="drp-txt">Migrate to <br> Shopify</h6>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-12 panel">
                                        <a class="drp-card" href="shopify-maintenance.php">
                                            <img class="img-fluid" src="images/shopify-mantainance-drp-icon.svg" alt="">
                                            <h6 class="drp-txt">Shopify <br> Maintenance</h6>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="portfolio.php">portfolio</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link custom-nav-link" href="#contact-us">Contact Us</a>
                        </li>
                    </ul>
                    <a class="header-tel" href="tel:5104740516"><i class="fa-solid fa-phone"></i> 510-474-0516</a>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#get-quote-popup" class="theme-btn">Hire Us</a>
                </div>
            </div>
        </nav>
    </header>