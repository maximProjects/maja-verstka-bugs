<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui/jquery-ui.min.css" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div class="top container-fluid">
    	<div class="lng-holder">
        	<ul class="clearfix">
            	<li><a href="#" class="lng-active">Ru</a></li>
                <li><a href="#">En</a></li>
            </ul>
        </div>
    	<div class="row">
        	<div class="col-xs-12 col-md-12  top-content-wrapper">
            	<div class="form-holder col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1" >
                	<div class="logo-head-holder clearfix">
                		<div class="logo-holder text-center"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home-logo-xs.png"  alt="logo"/></div>
                        <div class="head-desc-holder">
                    		<h3>find your new look</h3>
                        	<p> Book your favorite beauty treatments or discover new places</p>
                        </div>
                    </div>
                    
                    <form id="search-form" class="clearfix" method="post" action="site/Search">
                    	<input id="salon-search" name="search-val" type="text">
                        <button type="submit" class="do-search" class="clearfix"><span class="hidden-xs">Search</span><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/book-btn.png" width="15" height="17" ></span></button> 
                    </form>
                    <p>Please enter city, service, salon or stylist name</p>
                </div>
            </div>
        </div><!--/row -->
	</div><!--/top -->
    
    <div class="bottom container-fluid">
    	<div class="row">
        	<div class="col-xs-12 bot-content-wrapper">
            	<h2>Best offers</h2>
                <div class="offers-up clearfix">
                
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<div class="offers-description">
                        	<h4>Deep tissue massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                            <p class="full-desc">Duis aute in voluptate velit esse cillum dolore eu fugiat nulla pariatur.At vver eos et accusam dignissum qui blandit praesent luptatum delenit aigue excepteur sint occae.</p>
                            <a href="#"><span>More</span><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/plius_bg.png" width="45" height="45" ></span></a>
                        </div>
                    </div><!--/offers-item -->
                    
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<div class="offers-description">
                        	<h4>Deep tissue massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                        </div>
                    </div><!--/offers-item -->
                    
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<div class="offers-description">
                        	<h4>Deep tissue massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                            <p class="full-desc">Duis aute in voluptate velit esse cillum dolore eu fugiat nulla pariatur.At vver eos et accusam dignissum qui blandit praesent luptatum delenit aigue excepteur sint occae.</p>
                            <a href="#"><span>More</span><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/plius_bg.png" width="45" height="45" ></span></a>
                        </div>
                    </div><!--/offers-item -->
                    
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<a class="offers-description">
                        	<h4>Deep link massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                        </a>
                    </div><!--/offers-item -->
                    
                </div><!--/offers-up -->
                
                <div class="offers-down clearfix hidden-xs hidden-sm">
                
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<div class="offers-description">
                        	<h4>Deep tissue massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                            <p class="full-desc">Duis aute in voluptate velit esse cillum dolore eu fugiat nulla pariatur.At vver eos et accusam dignissum qui blandit praesent luptatum delenit aigue excepteur sint occae.</p>
                            <a href="#"><span>More</span><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/plius_bg.png" width="45" height="45" ></span></a>
                        </div>
                    </div><!--/offers-item -->
                    
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<div class="offers-description">
                        	<h4>Deep tissue massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                        </div>
                    </div><!--/offers-item -->
                    
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<div class="offers-description">
                        	<h4>Deep tissue massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                            <p class="full-desc">Duis aute in voluptate velit esse cillum dolore eu fugiat nulla pariatur.At vver eos et accusam dignissum qui blandit praesent luptatum delenit aigue excepteur sint occae.</p>
                            <a href="#"><span>More</span><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/plius_bg.png" width="45" height="45" ></span></a>
                        </div>
                    </div><!--/offers-item -->
                    
                	<div class="offers-item">
                    	<div class="offers-price">
                        	<span>From</span>
                            <span>10&nbsp;&euro;</span>
                        </div>
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/offers1.jpg" />
                    	<a class="offers-description">
                        	<h4>Deep link massage</h4>
                            <p>Amber Beauty at ESU Hair,at Vilnius city</p>
                            <div class="offers-rating rating-3"></div>
                        </a>
                    </div><!--/offers-item -->
                
                </div><!--/offers-dowm -->
            </div><!--/bot-content-wrapper -->
        </div><!--/row -->
    </div><!--/bottom -->
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/search.js"></script>
</html>
