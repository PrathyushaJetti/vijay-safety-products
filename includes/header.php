<?php
define('ROOT_PATH', 'http://localhost/vijay-safety-products/');
?>

<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php $title = isset($meta['title']) ? $meta['title'] : 'Vijay Safety Products';
    echo $title; ?></title>
    <meta name="description" content="<?php
    $title = isset($meta['description']) ? $meta['description'] : 'Vijay Safety Products';
    echo $meta['description']; ?>">
    <meta name="keywords" content="<?php
    $title = isset($meta['keywords']) ? $meta['keywords'] : 'Vijay Safety Products';
    echo $meta['keywords']; ?>">


    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= ROOT_PATH ?>img/logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/nouislider.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/backtotop.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/flaticon_kindedo.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/spacing.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>assets/css/main.css">

    <!-- Fontawesome pro class css -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css" />
    <!-- Fontawesome pro class css -->

</head>

<body>

    <div class="hide">
        
    </div>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>



    <style>
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            /* border-color: inherit; */
            border-style: solid;
            border-width: 1px !important;
        }

        table {
            caption-side: unset !important;
            border-collapse: separate !important;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
        }
    </style>

    <header class="height-seter">
        <div class="bd-header">
            <!-- header bottom area start -->
            <div id="header-sticky" class="bd-header-bottom ">
                <div class="container">
                    <div class="mega-menu-wrapper p-relative">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bd-header-logo">
                                <a href="<?= ROOT_PATH ?>index.php">
                                    <img src="<?= ROOT_PATH ?>img/logo.png" alt="" style="height:100px; width:100px;" />
                                </a>
                            </div>
                            <div class="bd-main-menu d-none d-lg-flex align-items-center">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="<?= ROOT_PATH ?>index.php">Home</a>
                                        </li>
                                        <li class="has-dropdown">

                                            <a href="#">About Us</a>
                                            <ul class="submenu">
                                                <li><a href="<?= ROOT_PATH ?>about-us.php"> ABOUT VSP </a></li>
                                                <!-- <li><a href="<?= ROOT_PATH ?>team.html">TEAM</a></li> -->
                                                <li><a href="<?= ROOT_PATH ?>quality.php">QUALITY ASSURANCE</a></li>
                                                <!-- <li><a href="<?= ROOT_PATH ?>certificate.html">CERTIFICATE</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Our Products</a>
                                            <ul class="submenu">
                                                <li><a href="<?= ROOT_PATH ?>services/diamond-gloves-detail.php">
                                                        DIAMOND TOUCH </a></li>
                                                <li><a href="<?= ROOT_PATH ?>services/gold-touch.php">
                                                        GOLDTOUCH </a></li>
                                                <li><a href="<?= ROOT_PATH ?>services/pride-gloves.php">
                                                        PRIDE GLOVES </a></li>
                                                <li><a href="<?= ROOT_PATH ?>services/grardura.php">
                                                        GUARDURA GLOVES</a></li>
                                                <li><a href="<?= ROOT_PATH ?>services/vsp-white-gloves.php">
                                                        VSP WHITE </a></li>
                                                <li><a href="<?= ROOT_PATH ?>services/vsp-orange.php">
                                                        VSP Orange 18’’ </a></li>

                                                <li><a href="<?= ROOT_PATH ?>services/vsp-yellow.php">
                                                        VSP Yellow 18’’ </a></li>
                                            </ul>

                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Our
                                                Services</a>
                                            <ul class="submenu">
                                                <li><a href="<?= ROOT_PATH ?>product-electrical-gloves.php">
                                                        ELECTRICAL GLOVES </a></li>
                                                <li><a href="<?= ROOT_PATH ?>product-industrial-gloves.php">
                                                        INDUSTRIAL GLOVES </a></li>
                                                <li><a href="<?= ROOT_PATH ?>product-household-gloves.php">
                                                        HOUSEHOLD GLOVES </a></li>
                                                <!-- <li><a href="product-finger-cots.php">
                                                        FINGER COTS </a></li> -->
                                                <li><a href="<?= ROOT_PATH ?>product-healthcare.php">
                                                        HEALTHCARE PROTECTIVE GLOVES
                                                    </a></li>
                                            </ul>

                                        </li>
                                        <li><a href="manufacturing.php">Manufacturing</a>
                                        </li>
                                        <li><a href="<?= ROOT_PATH ?>why-us.php">Why VSP </a></li>
                                        <li><a href="<?= ROOT_PATH ?>img/brochure.pdf" target="_blank">Catalogue</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                            <div class="bd-header-bottom-right d-flex justify-content-end align-items-center">

                                <div class="bd-header-btn d-none d-xl-block">
                                    <a href="<?= ROOT_PATH ?>contact-us.php" class="bd-btn">
                                       
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Contact Us</span>
                                            <span class="bd-btn-hover">Contact Us</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="header-hamburger">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom area end -->
        </div>
    </header>
    <div class="offcanvas__area">
        <div class="offcanvas__bg"></div>
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-20 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="index.php">
                            <img src="<?= ROOT_PATH ?>img/logo.png" title="Rubber Gloves " alt="logo">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas__close-btn">
                            <i class="fa-thin fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix mt-40"></div>
                <div class="offcanvas__about d-none d-lg-block">
                    <h4>About Vijay Safety Products </h4>
                    <p style="color: black;">VSP, established in 1977, is a cotton handlooms & rubber hand glove manufacturer Broad range of industrial,  household, medical, and electrical rubber gloves.</p>
                </div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center gap-2">
                            <div class="offcanvas__contact-icon">
                                <a target="_blank" href="#">
                                    <i class="fal fa-map-marker-alt"></i></a>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="https://maps.app.goo.gl/d1qnWxfqBhHye3YJ7">Vijay Safety products 15-7-249/1106/248/B.Vijay Villa, Gothi Building,Begum Bazar, Hyderabad-12,Telangana.</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <div class="offcanvas__contact-icon">
                                <a href="tel:+91-130-2482453"><i class="far fa-phone"></i></a>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+91 94942 51617">+91 94942 51617</a><br>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <div class="offcanvas__contact-icon">
                                <a href="mailto:vijaysafetyproducts@gmail.com"><i class="fal fa-envelope"></i></a>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto: vijaysafetyproducts@gmail.com"> vijaysafetyproducts@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" rows="3" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

// Recipient email address
$to = "vijaysafetyproducts@gmail.com";

// Subject of the email
$subject = "New Enquiry from Website";

// Message body
$message = "
<html>
<head>
    <title>New Enquiry</title>
</head>
<body>
    <h3>You have a new enquiry</h3>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong>$message</p>
</body>
</html>
";

// Headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
// $headers .= "From: noreply@yourdomain.com" . "\r\n"; // Replace with your domain's email
// $headers .= "Reply-To: johndoe@example.com" . "\r\n"; // Replace with the user's email

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully to $to";
} else {
    echo "Failed to send email.";
}
}
?>
