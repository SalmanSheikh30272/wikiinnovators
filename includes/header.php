<!doctype html>
<html lang="en">

<head>
    <!-- Meta Title And Discription Dynamic Brands PHP Start -->
    <?php  include 'includes/tags/tags.php';?>
    <!-- Meta Title And Discription Dynamic Brands PHP End -->

    <!-- Variable File Inlcude Start -->
    <?php  include 'includes/sections/variables-file.php';?>
    <!-- Variable File Inlcude End -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
</head>

<body>
    
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="void:;">
                    <img src="assets/images/logo.png" data-src="assets/images/logo.png" alt="Website Logo" class="logo" width="100%" height="auto" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-main-nav">
                        <div class="navbar-main-center">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about-us">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="void:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="void:;"><i class="fa-solid fa-chevron-right"></i> Wikipedia Page Editing</a></li>
                                        <li><a class="dropdown-item" href="void:;"><i class="fa-solid fa-chevron-right"></i> Wikipedia Page Translation</a></li>
                                        <li><a class="dropdown-item" href="void:;"><i class="fa-solid fa-chevron-right"></i> Review Management</a></li>
                                        <li><a class="dropdown-item" href="void:;"><i class="fa-solid fa-chevron-right"></i> Brand Reputation Management</a></li>
                                        <li><a class="dropdown-item" href="void:;"><i class="fa-solid fa-chevron-right"></i> Reputation Marketing</a></li>
                                        <li><a class="dropdown-item" href="void:;"><i class="fa-solid fa-chevron-right"></i> Content Removal Services</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="void:;">Wiki Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="void:;">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-buttons">
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat!</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>