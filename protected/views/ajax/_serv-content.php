<div class="serv-content clearfix">
	<?php
	$i=1;
	foreach($model as $item):
	?>
	    <div class="serv-descriiption">
	        <h3><?php echo $item['name']; ?></h3>
	        <p>
	        	<?php echo $item['description']; ?>    
	        </p>
	    </div> <!-- / serv-descriiption -->

	    <div class="serv-buttons clearfix">
	        <ul class="item-menu">
	            <li class="tab-hide<?php if($i!=count($model)) echo " tab-hide-empty";?>">
	                <a href="">

	                </a>
	            </li>
	            <li class="book">
	                <a href="#">
	                    <span>
	                        Book
	                    </span>
	                    <span class="arrow">
	                    </span>
	                </a>
	            </li>
	            <li class="book-price"> 
	                <span class="price-from">FROM</span>
	                <span class="price"><?php echo $item['price']; ?> EU</span>
	            </li>
	        </ul>
	    </div> <!-- / book-but -->
	<?php
		if($i<count($model)):
	?>
	    <div class="serv-devider"></div>
	<?php
		endif;
	?>
	<?php
		$i++;
	endforeach;
	?>
</div> <!-- / serv-content -->