<?php
include 'core.php';


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php title(4); ?></title><!-- CSS files -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,400i,700,700i,800,900%7CPlayfair+Display:400,400i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/songs.min.css"><!-- Fav Icons -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png"> -->
    <link rel="icon" type="image/png" sizes="230x230" href="http://divinityhtml.oxygenna.com/songs/assets/favicon/favicon-230x230.png">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png"> -->
    <link rel="icon" type="image/png" sizes="96x96" href="http://divinityhtml.oxygenna.com/songs/assets/favicon/favicon-96x96.png">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link rel="stylesheet" href="sweetalert.css">
</head>

<body class="pace-on pace-flower">
    <div class="pace-overlay"></div>
    <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php topbar(); ?>
    <div class="section">
        <div class="section-background">
            <div class="section-bg-image section-bg-image-size-lg-contain section-bg-image-position-xs-top section-bg-image-paralax dvt-opacity-3 dvt-demo-bg-image-04-b section-bg-image-size-xs-100"></div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h2 dvt-heading-bordered text-capitalize dvt-os-animation m-t-25 m-b-3" data-os-animation="fadeIn" data-os-animation-delay=".3s"><small class="text-muted font-italic dvt-text-xs-light">Send Us</small> Your Message</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-hero dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".6s">
                            
                            <div class="card-block">
                                <form action="contact_mailer.php" class="contact-form" id="contfrm">
                                    <div class="row text-xs-center">
                                        <div class="col-md-6"><input type="text" id="name" name="name" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="Name"></div>
                                        <div class="col-md-6"><input type="email" id="email" name="email" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="Your Email"></div>
                                        <div class="col-md-6"><input type="text" id="phone" name="contact" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="Your phone number"></div>
                                        <div class="col-md-12"><textarea id="message" name="message" rows="8" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="Your Message"></textarea><button type="submit" class="btn btn-primary dvt-shadow-2">Send Message</button></div>
                                    </div>
                                    <div class="oxy-messages p-t-2"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="dvt-heading-bordered text-capitalize dvt-os-animation m-t-9 m-b-3 m-t-15" data-os-animation="fadeIn" data-os-animation-delay=".3s"><small class="text-muted font-italic">Address</small> & Details</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-horizontal card-hero dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-os-animation m-b-9" data-os-animation="fadeIn" data-os-animation-delay=".6s">
                            <div class="row flex-items-xs-middle">
                                <div class="col-lg-6 flex-lg-last dvt-photo-filter-grayscale">
                                    <div class="google-map" id="map" style="height:550px"></div>
                                </div>
                                <div class="col-lg-6 flex-lg-first">
                                    <div class="card-block">
                                    <dl class="row m-b-0">
                                            <dt class="col-md-4"><span class="text-muted font-italic">Street:</span></dt>
                                            <dd class="col-md-8">Kwapra</dd>
                                            <dt class="col-md-4"><span class="text-muted font-italic">City:</span></dt>
                                            <dd class="col-md-8">Kumasi</dd>
                                            <dt class="col-md-4"><span class="text-muted font-italic">Phone No:</span></dt>
                                            <dd class="col-md-8">+233546898084</dd>
                                            <dt class="col-md-4"><span class="text-muted font-italic">E-Mail:</span></dt>
                                            <dd class="col-md-8">Sarpsee@gmail.com</dd>
                                            <dt class="col-md-4"><span class="text-muted font-italic">Facebook:</span></dt>
                                            <dd class="col-md-8">Prophet Sarpong S.E.E</dd>
                                            <dt class="col-md-4"><span class="text-muted font-italic">Twitter:</span></dt>
                                            <dd class="col-md-8">@Prophet Sarpong See</dd>
                                            <dt class="col-md-4"><span class="text-muted font-italic">Instagram:</span></dt>
                                            <dd class="col-md-8">Prophet Sarpong See</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php ft(); ?>
    <a href="contact.html#" class="dvt-go-top dvt-shadow-hover-10 hidden-xs-down hide"><i class="fa fa-angle-up"></i> </a><!-- Scripts -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/songs.min.js"></script>
    <script type="text/javascript" src="assets/js/contact.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA53lVLoFr_BgRcgzx80ThvLm4vBJLp3x0"></script>
    <!-- dollarsoft JS -->
    <script src="sweetalert.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>