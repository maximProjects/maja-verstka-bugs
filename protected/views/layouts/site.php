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
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_advanced.css">
	</head>
<body>
<header class="container-fluid">
    <div class="row">
    
        <div class="logo-holder col-xs-4 col-sm-3">
            <a class="logo" href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="logo" /></a>
        </div><!--/logo-holder -->
                    
        <div class="inputs-holder clearfix col-xs-12 col-sm-4">
            <div class="search-input-holder">
                <input type="text" />
            </div><!--/holder -->
            
            <div class="time-input-holder">
                <input type="text" />
            </div><!--/time-input-holder -->
            
            <div class="service-input-holder">
                <input type="text" />
            </div>
        </div><!--/inputs-holder -->
        
        <div class="icons-holder clearfix col-xs-8 col-sm-5">
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

<div class="container-fluid" id="main-wrapper">
    <div class="row main-content-wrapper">
        <div class="botton-holder clearfix col-xs-12">
            <div class="pull-left top-btns-holder">
                <a class=" visible-xs" href="#"><span>Filters</span><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/settings.png" width="26" height="26" /></span></a>
            </div>
            <div class="pull-right top-btns-holder">
                <a class="visible-xs visible-sm" href="#"><span>Favorites</span><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/faforite.png" width="27" height="27" /></span></a>
            </div>
        </div><!--/botton-holder -->    
    
        <aside class="col-md-3 col-sm-3 hidden-xs a-left">
        left
        </aside>
        <section class="col-xs-12 col-md-7 col-sm-9">
        

            <?php echo $content; ?>

            
            
            
        </section>
        <aside class="col-md-2 hidden-xs hidden-sm a-right">
        right
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/maps.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/actions.js"></script>
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
