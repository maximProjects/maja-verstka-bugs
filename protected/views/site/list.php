<?php
foreach($model as $salon)
{
/*
	$specs = $salon -> specialists;
	foreach($specs as $spec){
		echo $spec->name." | ".$spec->spectypes->name."<br>";


	}
*/
?>
	<div id="item-<?php echo $salon->id;?>" class="item-wrapper">
		<div class="item-top" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/salon_bg.jpg)" >
			<div class="item-content">
			    <div class="item-head clearfix">
			       
			        <h2 class="pull-left"><?php echo $salon->name; ?></h2>
			        <div class="price pull-right">
			            <span>From</span>
			            <span>10&nbsp;&euro;</span>
			        </div><!--/price -->
			        
			        <div class="rating-holder pull-right">
			            <span class="rating rating-3"></span>
			            <span class="visible-xs">3.0</span>
			        </div><!--/rating -->
			    </div><!--/item-head -->
			    
			    <ul class="item-menu clearfix">
			        <li class="info"><a href="#" data-id="<?php echo $salon->id;?>"></a></li>
			        <li class="map"><a href="#" data-id="<?php echo $salon->id;?>"></a></li>
			        <li class="cart"><a href="#" data-id="<?php echo $salon->id;?>"></a></li>
			        <li class="book"><a href="#" data-id="<?php echo $salon->id;?>"><span>Book</span><span class="arrow"></span></a></li>
			    </ul><!--/item-menu -->
			    
			    <a class="fav-item-btn"></a>
			    
			</div><!--/ item-content -->
		</div><!---/item -->
		<div class="item-bottom load-content">
		    
		</div><!--/item-item bottom -->
	</div>
<?php
}
?>