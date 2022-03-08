<?php
    include("core.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Divinity - Church, Non Profit and Charity Events HTML Template</title><!-- CSS files -->
    <link
        href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,400i,700,700i,800,900%7CPlayfair+Display:400,400i,700,700i,900"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/songs.min.css"><!-- Fav Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="230x230"
        href="http://divinityhtml.oxygenna.com/songs/assets/favicon/favicon-230x230.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="http://divinityhtml.oxygenna.com/songs/assets/favicon/favicon-96x96.png">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
</head>

<body class="pace-on pace-flower">
    <div class="pace-overlay"></div>
    <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php topbar();?>
    <div class="section">
        <div class="section-background">
            <div
                class="section-bg-image section-bg-image-size-lg-100 section-bg-image-position-xs-top section-bg-image-paralax dvt-demo-bg-image-16-b dvt-opacity-3">
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h2 dvt-heading-bordered text-capitalize dvt-os-animation m-t-25 m-b-3"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s"><small
                                class="text-muted font-italic">Upcoming</small> Events</h1>
                    </div>
                    <div class="col-md-12">
                        <?php displayEvents()?>
                        <!-- <div class="card dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-os-animation m-b-9"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">
                            <div class="card-block">
                                <form class="form-inline text-md-center">
                                    <div class="form-group m-r-1 m-t-2 m-b-3 text-xs-left"><label
                                            class="d-block m-b-1 h6" for="date">Events from</label><input type="text"
                                            class="form-control dvt-shadow-4 dvt-shadow-hover-8 dvt-transition"
                                            id="date" placeholder="Date"></div>
                                    <div class="form-group m-r-1 m-t-2 m-b-3 text-xs-left"><label
                                            class="d-block m-b-1 h6" for="search">Search</label><input type="text"
                                            class="form-control dvt-shadow-4 dvt-shadow-hover-8 dvt-transition"
                                            id="search" placeholder="Search"></div>
                                    <div class="form-group m-r-1 m-t-2 m-b-3 text-xs-left"><label
                                            class="d-block m-b-1 h6" for="location">Near</label><input type="text"
                                            class="form-control dvt-shadow-4 dvt-shadow-hover-8 dvt-transition"
                                            id="location" placeholder="Location"></div>
                                    <div class="form-group m-r-1 m-t-2 m-b-3 text-xs-left"><label
                                            class="d-block m-b-1 h6 invisible" for="search">Search</label><button
                                            type="submit"
                                            class="btn btn-primary w-100 dvt-shadow-4 dvt-shadow-hover-8 dvt-transition">Search</button>
                                    </div>
                                    <div class="form-group m-r-1 m-t-2 m-b-3 text-xs-left"><label
                                            class="d-block m-b-1 h6" for="location">View as</label><select
                                            class="custom-select dvt-shadow-4 dvt-shadow-hover-8 dvt-transition w-100">
                                            <option selected="selected">List</option>
                                            <option value="1">Month</option>
                                            <option value="2">Day</option>
                                        </select></div>
                                </form>
                            </div>
                        </div>
                        <h3 class="dvt-heading-bordered text-capitalize dvt-os-animation m-b-3"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">June</h3>
                        <div class="card card-horizontal dvt-os-animation dvt-shadow-8 dvt-shadow-hover-16 dvt-transition m-b-3 dvt-flex-items-lg-strech"
                            data-os-animation="fadeIn" data-os-animation-delay=".4s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/divinity/divinity-01-400x400.jpg" alt="Card image">
                                        <div
                                            class="card-img-overlay card-img-overlay-mini card-img-overlay-top card-img-overlay-left text-xs-center">
                                            <span class="h3 d-block m-b-0">08 </span><span class="d-block">JUN</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h2 class="h3 card-title"><a href="single-event.html">Bondage of the Will & the
                                                Sovereignty of Grace.</a></h2>
                                        <h6 class="card-subtitle font-italic text-muted m-b-3"><i
                                                class="fa fa-map-marker"></i> <a href="events-list.html#">45 Plastira
                                                Avenue</a>, in <a href="events-list.html#">Athens</a> <i
                                                class="fa fa-clock-o"></i> 22:00 am</h6>
                                        <p class="card-text">Blessed is the man who doesn't walk in the counsel of the
                                            wicked, nor stand in the way of sinners, nor sit in the seat of scoffers;
                                            but his delight is in Yahweh's law. On his law he meditates day and night.
                                            He will be like a tree planted by the streams of water, that brings forth
                                            its fruit in its season, whose leaf also does not wither.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-horizontal dvt-os-animation dvt-shadow-8 dvt-shadow-hover-16 dvt-transition m-b-3 dvt-flex-items-lg-strech"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/divinity/divinity-04-400x400.jpg" alt="Card image">
                                        <div
                                            class="card-img-overlay card-img-overlay-mini card-img-overlay-top card-img-overlay-left text-xs-center">
                                            <span class="h3 d-block m-b-0">21 </span><span class="d-block">JUN</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h2 class="h3 card-title"><a href="single-event.html">The Blood of the Martyrs
                                                Is Seed</a></h2>
                                        <h6 class="card-subtitle font-italic text-muted m-b-3"><i
                                                class="fa fa-map-marker"></i> <a href="events-list.html#">45 Plastira
                                                Avenue</a>, in <a href="events-list.html#">Athens</a> <i
                                                class="fa fa-clock-o"></i> 22:00 am</h6>
                                        <p class="card-text">Whatever he does shall prosper. The wicked are not so, but
                                            are like the chaff which the wind drives away. Therefore the wicked shall
                                            not stand in the judgment, nor sinners in the congregation of the righteous.
                                            For Yahweh knows the way of the righteous, but the way of the wicked shall
                                            perish.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="dvt-heading-bordered text-capitalize dvt-os-animation m-b-3 m-t-9"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">July</h3>
                        <div class="card card-horizontal dvt-os-animation dvt-shadow-8 dvt-shadow-hover-16 dvt-transition m-b-3 dvt-flex-items-lg-strech"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/divinity/divinity-06-400x400.jpg" alt="Card image">
                                        <div
                                            class="card-img-overlay card-img-overlay-mini card-img-overlay-top card-img-overlay-left text-xs-center">
                                            <span class="h3 d-block m-b-0">12 </span><span class="d-block">JUL</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h2 class="h3 card-title"><a href="single-event.html">Speaking the Gospel with
                                                Clarity</a></h2>
                                        <h6 class="card-subtitle font-italic text-muted m-b-3"><i
                                                class="fa fa-map-marker"></i> <a href="events-list.html#">45 Plastira
                                                Avenue</a>, in <a href="events-list.html#">Athens</a> <i
                                                class="fa fa-clock-o"></i> 22:00 am</h6>
                                        <p class="card-text">Blessed is the man who doesn't walk in the counsel of the
                                            wicked, nor stand in the way of sinners, nor sit in the seat of scoffers;
                                            but his delight is in Yahweh's law. On his law he meditates day and night.
                                            He will be like a tree planted by the streams of water, that brings forth
                                            its fruit in its season, whose leaf also does not wither.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="dvt-heading-bordered text-capitalize dvt-os-animation m-b-3 m-t-9"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">August</h3>
                        <div class="card card-horizontal dvt-os-animation dvt-shadow-8 dvt-shadow-hover-16 dvt-transition m-b-3 dvt-flex-items-lg-strech"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/divinity/divinity-03-400x400.jpg" alt="Card image">
                                        <div
                                            class="card-img-overlay card-img-overlay-mini card-img-overlay-top card-img-overlay-left text-xs-center">
                                            <span class="h3 d-block m-b-0">07 </span><span class="d-block">AUG</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h2 class="h3 card-title"><a href="single-event.html">Creativity & God</a></h2>
                                        <h6 class="card-subtitle font-italic text-muted m-b-3"><i
                                                class="fa fa-map-marker"></i> <a href="events-list.html#">45 Syntagma
                                                Sq</a>, in <a href="events-list.html#">Heraklion</a> <i
                                                class="fa fa-clock-o"></i> 22:00 am</h6>
                                        <p class="card-text">Yahweh said to me, «You are my son. Today I have become
                                            your father. Ask of me, and I will give the nations for your inheritance,
                                            the uttermost parts of the earth for your possession. You shall break them
                                            with a rod of iron. You shall dash them in pieces like a potter's vessel.»
                                            Now therefore be wise, you kings. Be instructed, you judges of the earth.
                                            Serve Yahweh with fear, and rejoice with trembling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-horizontal dvt-os-animation dvt-shadow-8 dvt-shadow-hover-16 dvt-transition m-b-3 dvt-flex-items-lg-strech"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/divinity/divinity-05-400x400.jpg" alt="Card image">
                                        <div
                                            class="card-img-overlay card-img-overlay-mini card-img-overlay-top card-img-overlay-left text-xs-center">
                                            <span class="h3 d-block m-b-0">15 </span><span class="d-block">AUG</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h2 class="h3 card-title"><a href="single-event.html">Prophetic Conference</a>
                                        </h2>
                                        <h6 class="card-subtitle font-italic text-muted m-b-3"><i
                                                class="fa fa-map-marker"></i> <a href="events-list.html#">45 Plastira
                                                Avenue</a>, in <a href="events-list.html#">Athens</a> <i
                                                class="fa fa-clock-o"></i> 22:00 am</h6>
                                        <p class="card-text">I awakened; for Yahweh sustains me. I will not be afraid of
                                            tens of thousands of people who have set themselves against me on every
                                            side. Arise, Yahweh! Save me, my God! For you have struck all of my enemies
                                            on the cheek bone. You have broken the teeth of the wicked. Salvation
                                            belongs to Yahweh. Your blessing be on your people.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-9 p-b-9">
                            <div class="col-xs-6">
                                <h3 class="dvt-heading-bordered text-capitalize dvt-os-animation"
                                    data-os-animation="fadeInUp" data-os-animation-delay=".3s"><a
                                        href="http://divinityhtml.oxygenna.com/songs/evenets-day.html"><small
                                            class="text-muted font-italic">&larr; Previous</small> Events</a></h3>
                            </div>
                            <div class="col-xs-6">
                                <h3 class="dvt-heading-bordered dvt-heading-bordered-reversed text-capitalize dvt-os-animation"
                                    data-os-animation="fadeInUp" data-os-animation-delay=".6s"><a
                                        href="events-calendar.html"><small class="text-muted font-italic">Next
                                            &rarr;</small> Events</a></h3>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="section p-t-6 p-b-6">
            <div class="section-background">
                <div
                    class="section-bg-image dvt-demo-bg-image-09 section-bg-image-paralax dvt-opacity-2 section-bg-image-position-xs-bottom section-bg-image-size-xs-cover">
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dvt-widget widget_text">
                                <h4 class="dvt-widget-header">About Us</h4>
                                <p>Why do the nations rage, and the peoples plot a vain thing? The kings of the earth
                                    take a stand, and the rulers take counsel together, against Yahweh, and against his
                                    Anointed.</p>
                                <p>Why do the nations rage, and the peoples plot a vain thing.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dvt-widget widget_em_widget">
                                <h4 class="dvt-widget-header">Upcoming Events</h4>
                                <ul>
                                    <li><a href="single-event.html" class="pull-xs-left m-r-1 dvt-widget-image"
                                            title="Event title"><img class="dvt-widget-image m-r-1 pull-xs-left"
                                                alt="post image" src="assets/images/divinity/divinity-05-100x100.jpg">
                                        </a><a href="single-event.html">Speaking for our lord</a> - Faith<ul>
                                            <li><small><i class="fa fa-clock-o text-muted"></i> 14 Dec 16</small></li>
                                            <li><small><i class="fa fa-map-marker text-muted"></i> Los Angeles</small>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="single-event.html" class="pull-xs-left m-r-1 dvt-widget-image"
                                            title="Event title"><img class="dvt-widget-image m-r-1 pull-xs-left"
                                                alt="post image" src="assets/images/divinity/divinity-08-100x100.jpg">
                                        </a><a href="single-event.html">Open Heavens</a> - Religion<ul>
                                            <li><small><i class="fa fa-clock-o text-muted"></i> 21 Dec 16</small></li>
                                            <li><small><i class="fa fa-map-marker text-muted"></i> London</small></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-event.html" class="pull-xs-left m-r-1 dvt-widget-image"
                                            title="Event title"><img class="dvt-widget-image m-r-1 pull-xs-left"
                                                alt="post image" src="assets/images/divinity/divinity-03-100x100.jpg">
                                        </a><a href="single-event.html">Love After Marriage Class</a> - Faith<ul>
                                            <li><small><i class="fa fa-clock-o text-muted"></i> 12 Jan 17</small></li>
                                            <li><small><i class="fa fa-map-marker text-muted"></i> Athens</small></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dvt-widget widget_recent_entries">
                                <h4 class="dvt-widget-header">Recent Posts</h4>
                                <ul>
                                    <li class="text-truncate"><a href="single-post.html"
                                            class="pull-xs-left m-r-1 dvt-widget-image" title="Post title"><img
                                                alt="post image" src="assets/images/divinity/divinity-03-100x100.jpg">
                                        </a><a href="single-post.html">Precision with God's Words</a> <small
                                            class="post-date d-block">September 25, 2017</small></li>
                                    <li class="text-truncate"><a href="single-post.html"
                                            class="pull-xs-left m-r-1 dvt-widget-image" title="Post title"><img
                                                alt="post image" src="assets/images/divinity/divinity-06-100x100.jpg">
                                        </a><a href="single-post.html">Love for God's Glory</a> <small
                                            class="post-date d-block">June 12, 2017</small></li>
                                    <li class="text-truncate"><a href="single-post.html"
                                            class="pull-xs-left m-r-1 dvt-widget-image" title="Post title"><img
                                                alt="post image" src="assets/images/divinity/divinity-09-100x100.jpg">
                                        </a><a href="single-post.html">The way you should go</a> <small
                                            class="post-date d-block">May 05, 2017</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section p-t-1 p-b-1">
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-sm-left">
                            <div class="dvt-widget widget_text">
                                <p>Divinity Churh Template. © Oxygenna 2016</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <div class="dvt-widget widget_social">
                                <div class="dvt-icon-set"><a class="dvt-icon-set-item dvt-transition"
                                        href="events-list.html#"><i class="fa fa-instagram"></i> </a><a
                                        class="dvt-icon-set-item dvt-transition" href="events-list.html#"><i
                                            class="fa fa-linkedin"></i> </a><a class="dvt-icon-set-item dvt-transition"
                                        href="events-list.html#"><i class="fa fa-facebook"></i> </a><a
                                        class="dvt-icon-set-item dvt-transition" href="events-list.html#"><i
                                            class="fa fa-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><a href="events-list.html#" class="dvt-go-top dvt-shadow-hover-10 hidden-xs-down hide"><i
            class="fa fa-angle-up"></i> </a><!-- Scripts -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/songs.min.js"></script>
</body>

</html>