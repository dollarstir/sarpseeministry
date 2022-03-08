<?php

function topbar()
{
    echo '<div class="dvt-nav dvt-nav-transparent dvt-nav-sticky dvt-nav-layout-logo-c-menu-lr dvt-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".1s">
    <div class="dvt-nav-container">
        <!-- Logo -->
        <div class="dvt-nav-brand"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div><!-- Mobile menu toggle button -->
        <div class="dvt-nav-mobile"><a id="nav-toggle" href="index.html#"><span></span></a></div><!-- Menu One -->
        <nav class="dvt-nav-menu">
            <ul class="dvt-nav-list">
                <li><a href="about.php">About</a>
                    <!--<ul class="dvt-nav-dropdown closed">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="team-list.html">Staff</a></li>
                        <li><a href="staff-single.html">Single Staff</a></li>
                    </ul>-->
                </li>
                <li><a href="ministries.php">Ministries</a>
                   <!-- <ul class="dvt-nav-dropdown closed">
                        <li><a href="blog-list.html">Blog</a></li>
                        <li><a href="blog-list-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-list-right-sidebar.html">Blog Right Sidebar</a></li>
                        
                    </ul>-->
                </li>
                <li><a href="sermons-list.php">Sermons</a>
                    <!--<ul class="dvt-nav-dropdown closed">
                        <li><a href="sermons-list.html">Sermons List</a></li>
                        <li><a href="sermons-list-alt.html">Sermons List Alt</a></li>
                        <li><a href="single-sermon.html">Single Sermon</a></li>
                    </ul>-->
                </li>
            </ul>
            <div class="dvt-nav-widget"></div>
        </nav><!-- Menu Two -->
        <nav class="dvt-nav-menu">
            <ul class="dvt-nav-list">
                <li><a href="events-list.php">Events</a>
                    <!--<ul class="dvt-nav-dropdown closed">
                        <li><a href="events-calendar.html">Calendar</a></li>
                        <li><a href="events-day.html">Day View</a></li>
                        <li><a href="events-list.html">List View</a></li>
                        <li><a href="single-event.html">Single Event</a></li>
                    </ul>-->
                </li>
                <!--<li><a href="index.html#">Features</a>
                    <ul class="dvt-nav-dropdown closed">
                        <li><a href="headers.html">Headers</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="cards.html">Cards</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="background-videos.html">Background Videos</a></li>
                        <li><a href="404.html">404 Page</a></li>
                    </ul>
                </li>-->
                <li class=""><a href="contact.php">Contact</a></li>
                <li class=""><a href="donate.php">Donate</a></li>
            </ul>
            <div class="dvt-nav-widget"></div>
        </nav>
    </div>
</div>';
}



function title($pageid)
{
    switch ($pageid) {
        case 1:
            echo 'Sarpsee Ministries -Home';
            # code...
            break;

        case 2:
            echo 'Sarpsee Ministries -Ministries';
            # code...
            break;

        case 3:
            echo 'Sarpsee Ministries -About';
            # code...
            break;
        case 4:
            echo 'Sarpsee Ministries -Contact';
            # code...
            break;

        case 5:
            echo 'Sarpsee Ministries -Donate';
            # code...
            break;

        default:
            # code...
            break;
    }
}


function ft()
{
    echo '<footer id="footer">
    <div class="section p-t-6 p-b-6">
        <div class="section-background">
            <div class="section-bg-image dvt-demo-bg-image-09 section-bg-image-paralax dvt-opacity-2 section-bg-image-position-xs-bottom section-bg-image-size-xs-cover"></div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="dvt-widget widget_text">
                            <h4 class="dvt-widget-header">About Us</h4>
                            <p>Know as the seer Prophet, Sarpong See is a converted Muslim who has touch many lives continentally with the message of the cross of Jesus christ.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dvt-widget widget_em_widget">
                            <h4 class="dvt-widget-header">Upcoming Events</h4>
                            <ul>
                                <li><a href="single-event.html" class="pull-xs-left m-r-1 dvt-widget-image" title="Event title"><img class="dvt-widget-image m-r-1 pull-xs-left" alt="post image" src="assets/images/divinity/divinity-05-100x100.jpg"> </a><a href="single-event.html">Speaking for our lord</a> - Faith<ul>
                                        <li><small><i class="fa fa-clock-o text-muted"></i> 14 Dec 16</small></li>
                                        <li><small><i class="fa fa-map-marker text-muted"></i> Los Angeles</small></li>
                                    </ul>
                                </li>
                                <li><a href="single-event.html" class="pull-xs-left m-r-1 dvt-widget-image" title="Event title"><img class="dvt-widget-image m-r-1 pull-xs-left" alt="post image" src="assets/images/divinity/divinity-08-100x100.jpg"> </a><a href="single-event.html">Open Heavens</a> - Religion<ul>
                                        <li><small><i class="fa fa-clock-o text-muted"></i> 21 Dec 16</small></li>
                                        <li><small><i class="fa fa-map-marker text-muted"></i> London</small></li>
                                    </ul>
                                </li>
                                <li><a href="single-event.html" class="pull-xs-left m-r-1 dvt-widget-image" title="Event title"><img class="dvt-widget-image m-r-1 pull-xs-left" alt="post image" src="assets/images/divinity/divinity-03-100x100.jpg"> </a><a href="single-event.html">Love After Marriage Class</a> - Faith<ul>
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
                                <li class="text-truncate"><a href="single-post.html" class="pull-xs-left m-r-1 dvt-widget-image" title="Post title"><img alt="post image" src="assets/images/divinity/divinity-03-100x100.jpg"> </a><a href="single-post.html">Precision with God\'s Words</a> <small class="post-date d-block">September 25, 2017</small></li>
                                <li class="text-truncate"><a href="single-post.html" class="pull-xs-left m-r-1 dvt-widget-image" title="Post title"><img alt="post image" src="assets/images/divinity/divinity-06-100x100.jpg"> </a><a href="single-post.html">Love for God\'s Glory</a> <small class="post-date d-block">June 12, 2017</small></li>
                                <li class="text-truncate"><a href="single-post.html" class="pull-xs-left m-r-1 dvt-widget-image" title="Post title"><img alt="post image" src="assets/images/divinity/divinity-09-100x100.jpg"> </a><a href="single-post.html">The way you should go</a> <small class="post-date d-block">May 05, 2017</small></li>
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
                            <p>  &copy; ' . date("Y") . ' Sarpsee Ministries  Developed by <a href="http://www.dollarstir.com/" target="blank"> Dollarsoft</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        <div class="dvt-widget widget_social">
                            <div class="dvt-icon-set"><a class="dvt-icon-set-item dvt-transition" href="index.html#"><i class="fa fa-instagram"></i> </a><a class="dvt-icon-set-item dvt-transition" href="index.html#"><i class="fa fa-linkedin"></i> </a><a class="dvt-icon-set-item dvt-transition" href="index.html#"><i class="fa fa-facebook"></i> </a><a class="dvt-icon-set-item dvt-transition" href="index.html#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>';

}

// sending messages
function sedmessage($name,$email,$contact,$message){
    include 'db.php';
    $dd = date("jS F , Y");
    $ins = mysqli_query($conn,"INSERT INTO messages (name,email,phone,message,dateadded) VALUES ('$name','$email','$contact','$message','$dd')");
    if($ins){
        echo 'sent';
    }
}

function sermonCard($title, $madeby, $picture, $audio, $dd) {
    echo '
        <div class="col-lg-6">
            <div class="card card-horizontal dvt-shadow-8 dvt-shadow-hover-16 dvt-transition dvt-flex-items-lg-strech dvt-os-animation m-b-3" data-os-animation="fadeIn" data-os-animation-delay=".7s">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-img-container">
                            <img class="card-img" src="upload/' . $picture . '" alt="Sermon image">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-block">
                            <h3 class="card-title">' . $title . '</h3>
                            <h6 class="card-subtitle font-italic text-muted m-b-0">
                                By <a href="staff-single.html">' . $madeby . '</a> 
                                on <a href="sermons-list-alt.html">' . $dd . '</a> 
                                about <a href="sermons-list-alt.html">God & All</a>
                            </h6>
                        </div>
                        <div class="card-footer">
                            <div class="dvt-icon-set pull-xs-right">
                                <a class="dvt-icon-set-item magnific-audio dvt-transition text-muted" href="upload/' . $audio . '">
                                    <i class="fa fa-headphones"></i>
                                </a>
                            </div>
                            <div class="pull-xs-right">
                                <a class="text-muted" href="upload/' . $audio . '" download>
                                    <i class="fa fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}

function displaySermons() {
    include 'db.php';
    $sql = mysqli_query($conn, "SELECT * FROM sermon");

    while($row = mysqli_fetch_array($sql)) {
        sermonCard($row['title'], $row['madeby'], $row['pic'], $row['audio'], $row['dateadded']);
    }
}

function displayEvents() {
    include 'db.php';
    $sql = mysqli_query($conn, "SELECT * FROM events");

    while($row = mysqli_fetch_array($sql)) {
        eventCard($row['title'], $row['venue'], $row['detail'], $row['pic'], $row['edate'], $row['etime']);
    }
}

function eventCard($title, $venue, $detail, $pic, $edate, $etime) {
    $date = new DateTime($edate);
    $datetime = new DateTime("{$date->format("Y-m-d")} $etime");
    
    echo '
        <div class="card card-horizontal dvt-os-animation dvt-shadow-8 dvt-shadow-hover-16 dvt-transition m-b-3 dvt-flex-items-lg-strech"
            data-os-animation="fadeIn" data-os-animation-delay=".3s">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-img-container"><img class="card-img"
                            src="upload/' . $pic . '" alt="Card image">
                        <div
                            class="card-img-overlay card-img-overlay-mini card-img-overlay-top card-img-overlay-left text-xs-center">
                            <span class="h3 d-block m-b-0">' . $datetime->format("d") . ' </span><span class="d-block">' . strtoupper($datetime->format("M")) . '</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card-block">
                        <h2 class="h3 card-title"><a href="single-event.html">' . $title . '</a></h2>
                        <h6 class="card-subtitle font-italic text-muted m-b-3">
                            <i class="fa fa-map-marker"></i> <a href="events-list.html#">' . $venue . '</a>
                            <!--, in <a href="events-list.html#">Athens</a>--> <i class="fa fa-clock-o"></i> ' . $datetime->format("h") . ':' . $datetime->format("i") . ' ' . $datetime->format("a") . '
                        </h6>
                        <p class="card-text">
                            ' . $detail . '
                        </p>
                    </div>
                </div>
            </div>
        </div>
    ';
}

