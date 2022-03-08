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
    <title><?php title(5); ?></title><!-- CSS files -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,400i,700,700i,800,900%7CPlayfair+Display:400,400i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/songs.min.css"><!-- Fav Icons -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png"> -->
    <link rel="icon" type="image/png" sizes="230x230" href="http://divinityhtml.oxygenna.com/songs/assets/favicon/favicon-230x230.png">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png"> -->
    <link rel="icon" type="image/png" sizes="96x96" href="http://divinityhtml.oxygenna.com/songs/assets/favicon/favicon-96x96.png">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
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
                        <h1 class="h2 dvt-heading-bordered text-capitalize dvt-os-animation m-t-25 m-b-3" data-os-animation="fadeIn" data-os-animation-delay=".3s"><small class="text-muted font-italic dvt-text-xs-light"></small> Your Contribution</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-hero dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".6s">
                            <!-- function to convert dollar to cedis  -->

                            <?php 
                            
                            function convertCurrency($amount,$from_currency,$to_currency){
                                $apikey = 'b956567a2dd5aa819f1e';
                              
                                $from_Currency = urlencode($from_currency);
                                $to_Currency = urlencode($to_currency);
                                $query =  "{$from_Currency}_{$to_Currency}";
                              
                                // change to the free URL if you're using the free version
                                $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
                                $obj = json_decode($json, true);
                              
                                $val = floatval($obj["$query"]);
                              
                              
                                $total = $val * $amount;
                                return number_format($total, 2, '.', '');
                              }
                              
                              //uncomment to test
                              $amt =convertCurrency(1, 'USD', 'GHS');
                            
                            
                            ;?>
                            <div class="card-block">
                                <form action="contact_mailer.php" class="contact-form">
                                    <div class="row text-xs-center">
                                        <div class="col-md-6"><input type="text" id="name" name="name" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="Name"></div>
                                        <div class="col-md-6"><input type="email" id="email" name="email" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="Your Email"></div>
                                        <div class="col-md-6">GH&#8373;<input type="number" id="amount" name="amount" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="amount to donate"></div>
                                        <div class="col-md-6"><input type="hidden" value="<?php echo $amt ;?>" id="rate" name="my" class="form-control dvt-shadow-2 dvt-shadow-focus-4 dvt-transition m-b-2" placeholder="Your Email"></div>
                                        <div class="col-md-6" id="decv"> </div><br>
                                        <div class="col-md-6"><button type="submit" class="btn btn-primary dvt-shadow-2">Pay Now</button></div>
                                        
                                    </div>
                                    <div class="oxy-messages p-t-2"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- <div class="row">
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
                </div> -->
            </div>
        </div>
    </div>
    
    <?php ft(); ?>
    <a href="contact.html#" class="dvt-go-top dvt-shadow-hover-10 hidden-xs-down hide"><i class="fa fa-angle-up"></i> </a><!-- Scripts -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/songs.min.js"></script>
    <script type="text/javascript" src="assets/js/contact.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA53lVLoFr_BgRcgzx80ThvLm4vBJLp3x0"></script>
    <!-- my custome Js -->
    <script src="ajax.js"></script>
</body>

</html>