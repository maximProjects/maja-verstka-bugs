<?php /* @var $this Controller */ ?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- site includes -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.structure.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui-slider-pips.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/search_h.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/calendar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/side_blocks_switcher.css">

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_advanced.css">
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
    </head>
<body>
<header class="container-fluid header">


    <div class="row clearfix">
    
        <div class="logo-holder col-xs-4 col-sm-3 col-md-2">
            <a class="logo" href="/"><img src="/images/logo.png" alt="logo" /></a>
        </div><!--/logo-holder -->


        <input type="hidden" id="city_id_input" name="city_id" value="">
        <input type="hidden" id="services_id_input" name="services_id" value="">
        <input type="hidden" id="date_input" name="date" value="">
        <input type="hidden" id="time_input" name="time" value="">

        <div class="inputs-holder clearfix col-xs-12 col-sm-4 col-md-6 search-container">
            <div class="s-line untouched clearfix">
                <input type="text" name="search" class="in-search elem">
                <div class="in-services elem h">Services</div>
                <div class="in-date elem h">Date</div>
                <div class="in-time elem h">Time</div>
                <button class="in-submit elem">go</button>

                <!--Selections START -->
                <ul class="services-selection-box">
                    <li data-id="1">Service 1</li>
                    <li data-id="2">Service 2</li>
                    <li data-id="3">Service 3</li>
                    <li class="next">Continue</li>
                </ul>

                <ul class="time-selection-box">
                    <li>9:00</li>
                    <li>9:30</li>
                    <li>9:45</li>
                    <li>11:15</li>
                </ul>

                <div id="calendar" class="calendar">
                    <div class="switcher">
                        <div id="back"></div>
                        <div id="current"></div>
                        <div id="next"></div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <!--Selections END-->

            </div>
        </div><!--/inputs-holder -->
        
        <div class="icons-holder clearfix col-xs-8 col-sm-5 col-md-4">
            <div>
                <a class="hd-lng" href="#"></a>                
            </div>
            <div class="hidden-xs">
                <a class="hd-cart" href="#"><span class="badge">34</span></a>                
            </div>
            <div>
                <a class="hd-help" href="#"></a>                
            </div>
            
            <div>
                <a class="hd-tast" href="#"><span class="badge">12</span></a>
            </div>
            <div class="hidden-xs">
                <a class="hd-fav" href="#"></a>                
            </div>
            <div class="hidden-xs">
                <a class="hd-sheld" href="#"></a>                
            </div>
            
            <div>
                <a class="hd-login" href="#"></a>
            </div>
        </div><!--/holder - holder --->
            
    </div><!--/row -->
</header>

<div class="container-fluid clearfix" id="main-wrapper">
    <div class="row main-content-wrapper">
        <div class="botton-holder clearfix col-xs-12">
            <div class="pull-left top-btns-holder">
                <a class=" visible-xs" href="#"><span>Filters</span><span><img src="/images/settings.png" width="26" height="26" /></span></a>
            </div>
            <div class="pull-right top-btns-holder">
                <a class="visible-xs visible-sm" href="#"><span>Favorites</span><span><img src="/images/faforite.png" width="27" height="27" /></span></a>
            </div>
        </div><!--/botton-holder -->    
    
        <aside class="col-md-3 col-sm-4 a-left">
            <div class="find-location">
                <h4>Find your look on a map</h4>
                <div class="city-input-holder">
                    <label>City</label>
                    <input type="text" placeholder="City name" />
                </div><!--/city-input-holder -->
                <div class="aria-filters">
                    <label>Area</label>
                    <p>
                        <input id="town1" type="checkbox" name="first" hidden />
                        <label for="town1">Old_town</label>
                    </p>
                    <p>
                        <input id="town2" type="checkbox" name="first"  hidden />
                        <label for="town2">Old_town</label>
                    </p>
                    <p>
                        <input id="town3" type="checkbox" name="first"  hidden />
                        <label for="town3">Old_town</label>
                    </p>
                    <a href="#">Show more...</a>
                    <p class="clearfix">
                        <span>Distance from</span> <span class="cntr">center</span>
                        <span class="select-wrapper"> 
                            <select id="select-distance">
                                <option>5</option>
                                <option>10</option>
                                <option>15</option>
                            </select>
                        </span>
                        <span>km</span>
                    </p>
                </div>
            </div><!--/find-location -->
            
            <div class="find-by-name">
                <h4>Enter name </h4>
                <p>
                <input type="text" placeholder="SPA, service or person" />
                </p>
            </div><!-- /find-by-name -->
            
            <div class="find-by-price">
                <h4>Price</h4>
                
                <div id="slider-range"></div>
            </div><!--/find-by-price -->
            
            <div class="find-by-rating">
                 <h4>Rating</h4>
                 <div class="rating-holder clearfix">
                    <div class="stars-holder clearfix">
                        <a href="#" class="r1" data-rating="1"></a>
                        <a href="#" class="r2" data-rating="2"></a>
                        <a href="#" class="r3" data-rating="3"></a>
                        <a href="#" class="r4" data-rating="4"></a>
                        <a href="#" class="r5" data-rating="5"></a>
                    </div><!--/stars-holder -->
                    <div class="number-holder">
                    1
                    </div><!--/number-holdr -->
                 </div><!--/rating-holder -->
            </div><!--/find-by-rating -->
            
            <div class="find-by-services">
                <h4>Services</h4>
                <ul class="srv-type">
                    <li><a class="srv-skin" href="#">Skin care services </a></li>
                    <li><a class="srv-hair" href="#">Hair styling services</a></li>
                    <li><a class="srv-nail" href="#">Nail care services</a></li>
                </ul>
                <a href="#">Show more...</a>                
            </div><!--/find-by-srvices -->
            
            <div class="find-by-speciality">
                <h4>Specialty</h4>
                    <p>
                        <input id="smen" type="checkbox" name="first" hidden />
                        <label for="smen">Men</label>
                    </p>
                    <p>
                        <input id="swoman" type="checkbox" name="first" hidden />
                        <label for="swoman">Woman</label>
                    </p>
                    <p>
                        <input id="schild" type="checkbox" name="first" hidden />
                        <label for="schild">children</label>
                    </p>
            </div><!--/find-by-speciality -->
        </aside><!--a-left -->
        
        
        
        <section class="col-xs-12 col-md-7 col-sm-8">
        
                    <?php echo $content; ?>

        </section>
        <aside class="col-md-2  a-right">
            <div class="history">
                <h4>History</h4>
                
                <article class="clearfix">
                    <div class="img-holder">
                        <img src="/images/history_thumb.jpg" width="44" height="43" alt="" />
                    </div><!--/img-holder -->
                    
                    <div class="art-descr">
                        <a href="#">Sugihara beauty clinic</a>
                        <p>2015 02 02, 15:30</p>
                    </div><!--/ art-desc -->
                </article>
                
                <article class="clearfix">
                    <div class="img-holder">
                        <img src="/images/history_thumb.jpg" width="44" height="43" alt="" />
                    </div><!--/img-holder -->
                    
                    <div class="art-descr">
                        <a href="#">Sugihara beauty clinic</a>
                        <p>2015 02 02, 15:30</p>
                    </div><!--/ art-desc -->
                </article>
                
                <article class="clearfix">
                    <div class="img-holder">
                        <img src="/images/history_thumb.jpg" width="44" height="43" alt="" />
                    </div><!--/img-holder -->
                    
                    <div class="art-descr">
                        <a href="#">Sugihara beauty clinic</a>
                        <p>2015 02 02, 15:30</p>
                    </div><!--/ art-desc -->
                </article>
            </div><!--/history -->
            
            <div class="favorites">
                <h4>Favorites</h4>
                
                <article class="clearfix">
                    <div class="img-holder">
                        <img src="/images/history_thumb.jpg" width="44" height="43" alt="" />
                    </div><!--/img-holder -->
                    
                    <div class="art-descr">
                        <a href="#">Sugihara beauty clinic</a>
                        <p>2015 02 02, 15:30</p>
                    </div><!--/ art-desc -->
                </article>
                
                <article class="clearfix">
                    <div class="img-holder">
                        <img src="/images/history_thumb.jpg" width="44" height="43" alt="" />
                    </div><!--/img-holder -->
                    
                    <div class="art-descr">
                        <a href="#">Sugihara beauty clinic</a>
                        <p>2015 02 02, 15:30</p>
                    </div><!--/ art-desc -->
                </article>
                
                <article class="clearfix">
                    <div class="img-holder">
                        <img src="/images/history_thumb.jpg" width="44" height="43" alt="" />
                    </div><!--/img-holder -->
                    
                    <div class="art-descr">
                        <a href="#">Sugihara beauty clinic</a>
                        <p>2015 02 02, 15:30</p>
                    </div><!--/ art-desc -->
                </article>
            </div><!--/favorites  -->
        </aside>
    </div><!--/row -->
</div><!--/container-fluid -->

<footer class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 foot-menu-holder">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </div><!--/foot-menu-holder -->
        <div class="col-xs-12 foot-logo-holder">
            <a href="#" class="foot-logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-footer.png" width="137" height="43" ></a>
        </div><!--/foot-logo-holder -->
        <div class="col-xs-12 copy-holder">
            <p>Copyright&nbsp;&copy;&nbsp;2015 inlusion netforms all rights reserved</p>
        </div>
    </div>
</footer>
</body>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-slider-pips.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/calendar.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/header_h.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/side_blocks_switcher.js"></script>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/maps.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/actions.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/search.js"></script>
<script>
/*
jQuery(document).ready(function() {
    jQuery(document).on("click", ".button", function(e) {
        //e.preventDefault();
        initialize();
        //var latLng = jQuery(this).attr("data-latLng");          
        //initialize(latLng);
    });

    function initialize(latLng) {
        latLng = latLng.split(",")
        var mapOptions = {
            center: new google.maps.LatLng(latLng[0],latLng[1]),
            zoom: 8
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    }
   
}); 
*/
</script>
</html>
