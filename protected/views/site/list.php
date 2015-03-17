<?php
$cs = Yii::app()->clientScript;
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/specialists-tab.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/services-tab.js',CClientScript::POS_END);
foreach($model as $salon):

?>
	<div id="item-<?php echo $salon->id;?>" class="item-wrapper">
		<div class="item-top" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $salon ->bg_image; ?>)" >
			<div class="item-content">
			    <div class="item-head clearfix">
			       
			        <h2 class="pull-left"><?php echo $salon->name; ?></h2>
			        <div class="price pull-right">
			            <span>From</span>
			            <span><?php echo $salon->min_price;?>&nbsp;&euro;</span>
			        </div><!--/price -->
			        
			        <div class="rating-holder pull-right">
			            <span class="rating rating-<?php echo round($salon->rating); ?>"></span>
			            <span class="visible-xs"><?php echo $salon->rating; ?></span>
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
endforeach;
?>