<?php

$Heading = ' <div class="news-event-area">
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
            <h2 class="title-default-left">Latest News</h2>
            <ul class="news-wrapper">';


$News ='<li>
<div class="news-img-holder">
    <a href="#"><img src="img/news/1.jpg" class="img-responsive" alt="news"></a>
</div>
<div class="news-content-holder">
    <h3><a href="single-news.html">Summer Course Start From 1st June</a></h3>
    <div class="post-date">June 15, 2017</div>
    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
</div>
</li>';

$NewsEnd = '<div class="news-btn-holder">
<a href="#" class="view-all-accent-btn">View All</a>
</div>
</div>';

$UpcomingHead ='<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                  <h2 class="title-default-left">Upcoming Events</h2>
                          <ul class="event-wrapper">';


                          function upcoming(){
                              $i=.1;
                            for ($x = 0; $x <= 1; $x++) {
                               $i=$i+$i+$i;
        echo '<li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="'.$i.'s">
                <div class="event-calender-wrapper">
                    <div class="event-calender-holder">
                        <h3>26</h3>
                        <p>Jan</p>
                        <span>2017</span>
                    </div>
                </div>
                <div class="event-content-holder">
                    <h3><a href="single-event.html">Html MeetUp Conference 2017</a></h3>
                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                    <ul>
                        <li>04:00 PM - 06:00 PM</li>
                        <li>Australia , Melborn</li>
                    </ul>
                </div>
                </li>';
            }
                          }
 $upComingEnd =' </ul>
                    <div class="event-btn-holder">
                        <a href="#" class="view-all-primary-btn">View All</a>
                    </div>
                   </div>
                   </div>
                   </div>
                   </div></div>'  ;             
?>