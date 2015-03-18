<div class="find-location">
    <h4>Find your look on a map</h4>
    <div class="city-input-holder">
        <label>City</label>
        <input type="text" value="<?php echo $city->name; ?>" id="city-filter" placeholder="City name" />
        <input type="hidden" value="<?php echo $city->id; ?>" name="city-id"/>
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
                    <option></option>
                    <option>0</option>
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
    <input type="text" id="name" name="name" placeholder="SPA, service or person" />
    </p>
</div><!-- /find-by-name -->

<div class="find-by-price">
    <h4>Price</h4>
    
    <div id="slider-range"></div>
    <input name="sl-from" value="" type="hidden"/>
    <input name="sl-to" value="" type="hidden"/>
</div><!--/find-by-price -->

<div class="find-by-rating">
     <h4>Rating</h4>
     <div class="rating-holder clearfix">
        <div class="stars-holder clearfix">
            <a href="#" class="r1 rat-link" data-rating="1"></a>
            <a href="#" class="r2 rat-link" data-rating="2"></a>
            <a href="#" class="r3 rat-link" data-rating="3"></a>
            <a href="#" class="r4 rat-link" data-rating="4"></a>
            <a href="#" class="r5 rat-link" data-rating="5"></a>
        </div><!--/stars-holder -->
        <div class="number-holder">
        1
        </div><!--/number-holdr -->
     </div><!--/rating-holder -->
     <input name="rating" value="" type="hidden"/>
</div><!--/find-by-rating -->

<div class="find-by-services">
    <h4>Services</h4>
    <ul class="srv-type">
    <?php
    	foreach($servs as $serv):
    ?>
		<li><a class="<?php echo $serv->ico_class; ?> serv-link" data_id="<?php echo $serv->id; ?>" href="#"><?php echo $serv->name; ?></a></li>
	<?php
    	endforeach;
    ?>
    </ul>
    <a href="#">Show more...</a>
    <input name="serv" type="hidden"/>                
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