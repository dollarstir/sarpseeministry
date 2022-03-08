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
                class="section-bg-image section-bg-image-size-lg-100 section-bg-image-position-xs-top section-bg-image-paralax dvt-demo-bg-image-15-b dvt-opacity-2">
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="dvt-heading-bordered text-capitalize dvt-os-animation m-t-25 m-b-3"
                            data-os-animation="fadeIn" data-os-animation-delay=".3s"><small
                                class="text-muted font-italic dvt-text-xs-light">Latest</small> Sermons</h2>
                    </div>

                    <div class="col-md-12">
                        <?php displaySermons()?>
                    </div>

                    <!-- <div class="col-md-6">
                        <div class="card card-horizontal dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-flex-items-lg-strech dvt-os-animation m-b-3"
                            data-os-animation="fadeIn" data-os-animation-delay=".4s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/team/team-2-notinclude-500x600.jpg" alt="Sermon image">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h3 class="card-title">Help For The Hopeless</h3>
                                        <h6 class="card-subtitle font-italic text-muted m-b-0">By <a
                                                href="staff-single.html">Langan</a> on <a
                                                href="sermons-list-alt.html">March 10 1979</a> about <a
                                                href="sermons-list-alt.html">South</a></h6>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dvt-icon-set pull-xs-right"><a
                                                class="dvt-icon-set-item magnific-audio dvt-transition text-muted"
                                                href="http://oxy-wp-media.s3.amazonaws.com/divinity-html/sermon.mp3"><i
                                                    class="fa fa-headphones"></i> </a><a
                                                class="dvt-icon-set-item dvt-transition text-muted magnific-youtube"
                                                href="https://www.youtube.com/watch?v=bofF_aRIILI"><i
                                                    class="fa fa-play-circle"></i> </a><a target="_blank"
                                                class="dvt-icon-set-item dvt-transition text-muted"
                                                href="http://oxy-wp-media.s3.amazonaws.com/divinity-html/sermon.pdf"><i
                                                    class="fa fa-file-text-o"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-horizontal dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-flex-items-lg-strech dvt-os-animation m-b-3"
                            data-os-animation="fadeIn" data-os-animation-delay=".5s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/team/team-3-notinclude-500x600.jpg" alt="Sermon image">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h3 class="card-title">Help For Hurting Parents</h3>
                                        <h6 class="card-subtitle font-italic text-muted m-b-0">By <a
                                                href="staff-single.html">Manos</a> on <a
                                                href="sermons-list-alt.html">June 21 1991</a> about <a
                                                href="sermons-list-alt.html">Holy Spirit</a></h6>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dvt-icon-set pull-xs-right"><a
                                                class="dvt-icon-set-item magnific-audio dvt-transition text-muted"
                                                href="http://oxy-wp-media.s3.amazonaws.com/divinity-html/sermon.mp3"><i
                                                    class="fa fa-headphones"></i> </a><a
                                                class="dvt-icon-set-item dvt-transition text-muted magnific-youtube"
                                                href="https://www.youtube.com/watch?v=bofF_aRIILI"><i
                                                    class="fa fa-play-circle"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-horizontal dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-flex-items-lg-strech dvt-os-animation m-b-3"
                            data-os-animation="fadeIn" data-os-animation-delay=".6s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/team/team-4-notinclude-500x600.jpg" alt="Sermon image">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h3 class="card-title">The Worst Sluggard</h3>
                                        <h6 class="card-subtitle font-italic text-muted m-b-0">By <a
                                                href="staff-single.html">Mike</a> on <a href="sermons-list-alt.html">May
                                                12 1981</a> about <a href="sermons-list-alt.html">Faith in our Lord</a>
                                        </h6>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dvt-icon-set pull-xs-right"><a
                                                class="dvt-icon-set-item magnific-audio dvt-transition text-muted"
                                                href="http://oxy-wp-media.s3.amazonaws.com/divinity-html/sermon.mp3"><i
                                                    class="fa fa-headphones"></i> </a><a
                                                class="dvt-icon-set-item dvt-transition text-muted magnific-youtube"
                                                href="https://www.youtube.com/watch?v=bofF_aRIILI"><i
                                                    class="fa fa-play-circle"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-horizontal dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-flex-items-lg-strech dvt-os-animation m-b-3"
                            data-os-animation="fadeIn" data-os-animation-delay=".8s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-img-container"><img class="card-img"
                                            src="assets/images/team/team-6-notinclude-500x600.jpg" alt="Sermon image">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-block">
                                        <h3 class="card-title">Touching Jesus</h3>
                                        <h6 class="card-subtitle font-italic text-muted m-b-0">By <a
                                                href="staff-single.html">Proistak</a> on <a
                                                href="sermons-list-alt.html">May 12 1972</a> about <a
                                                href="sermons-list-alt.html">Faith in our Lord</a></h6>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dvt-icon-set pull-xs-right"><a
                                                class="dvt-icon-set-item magnific-audio dvt-transition text-muted"
                                                href="http://oxy-wp-media.s3.amazonaws.com/divinity-html/sermon.mp3"><i
                                                    class="fa fa-headphones"></i> </a><a
                                                class="dvt-icon-set-item dvt-transition text-muted magnific-youtube"
                                                href="https://www.youtube.com/watch?v=bofF_aRIILI"><i
                                                    class="fa fa-play-circle"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-xs-6 m-t-9">
                        <h3 class="dvt-heading-bordered text-capitalize dvt-os-animation" data-os-animation="fadeInUp"
                            data-os-animation-delay=".3s"><a href="sermons-list-alt.html"><small
                                    class="text-muted font-italic">&larr; Previous</small> Church Sermons</a></h3>
                    </div>
                    <div class="col-md-6 col-xs-6 m-t-9 m-b-9">
                        <h3 class="dvt-heading-bordered dvt-heading-bordered-reversed text-capitalize dvt-os-animation"
                            data-os-animation="fadeInUp" data-os-animation-delay=".6s"><a
                                href="sermons-list-alt.html"><small class="text-muted font-italic">Next &rarr;</small>
                                Church Sermons</a></h3>
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
                                        href="sermons-list.html#"><i class="fa fa-instagram"></i> </a><a
                                        class="dvt-icon-set-item dvt-transition" href="sermons-list.html#"><i
                                            class="fa fa-linkedin"></i> </a><a class="dvt-icon-set-item dvt-transition"
                                        href="sermons-list.html#"><i class="fa fa-facebook"></i> </a><a
                                        class="dvt-icon-set-item dvt-transition" href="sermons-list.html#"><i
                                            class="fa fa-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><a href="sermons-list.html#" class="dvt-go-top dvt-shadow-hover-10 hidden-xs-down hide"><i
            class="fa fa-angle-up"></i> </a><!-- Scripts -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/songs.min.js"></script>
</body>

</html>