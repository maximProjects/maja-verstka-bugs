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
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

	</head>
<!--
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Maya page</title>
</head>
-->
<body>
<header class="container-fluid">
	<div class="row">
    	<div class="col-xs-12">
        	<a class="pull-left logo" href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="123" height="39" alt="logo" /></a>
        </div>
    </div>
</header>

<div class="container-fluid">
	<div class="row main-content-wrapper">
        <div class="botton-holder clearfix col-xs-12">
            <div class="pull-left top-btns-holder">
                <a class=" visible-xs" href="#"><span>Filters</span><span><img src="images/settings.png" width="26" height="26" /></span></a>
            </div>
            <div class="pull-right top-btns-holder">
                <a class="visible-xs visible-sm" href="#"><span>Favorites</span><span><img src="images/faforite.png" width="27" height="27" /></span></a>
            </div>
        </div><!--/botton-holder -->	
    
    	<aside class="col-md-3 col-sm-3 hidden-xs a-left">
        left
        </aside>
        <section class="col-xs-12 col-md-7 col-sm-9">
        	<div class="item-wrapper">
                <div class="item-top" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/salon_bg.jpg)" >
                    <div class="item-content">
                        <div class="item-head clearfix">
                            <h2 class="pull-left">Saloom name</h2>
                            <div class="price pull-right">
                            	<span>From</span>
                                <span>10&nbsp;&euro;</span>
                            </div><!--/price -->
                            <div class="rating pull-right">rating</div>
                        </div><!--/item-head -->
                        
                        <ul class="item-menu clearfix">
                            <li class="info"><a href="#"></a></li>
                            <li class="map"><a href="#"></a></li>
                            <li class="cart"><a href="#"></a></li>
                            <li class="book"><a href="#"></a></li>
                        </ul><!--/item-menu -->
                        
                    </div><!--/ item-content -->
                </div><!---/item -->
                <div class="item-bottom load-content">
                    <?php
                    /*
                    <a href="#" class="button" data-latLng="53.488188,-2.373019">Button</a>
                    <a href="#" class="button" data-latLng="-34.397, 150.644">Button 2</a>
                    <div id="map-canvas" style="width:100%;height:200px;"></div>
                    */
                    ?>
                </div><!--/item-item bottom -->
            </div><!--/item-wrapper -->
        </section>
        <aside class="col-md-2 hidden-xs hidden-sm a-right">
        right
        </aside>
    </div><!--/row -->
</div><!--/container-fluid -->
</body>
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
