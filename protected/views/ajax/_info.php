<div class="info-block" role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home-<?php echo $model->id;?>" class="clearfix" aria-controls="home-<?php echo $model->id;?>" role="tab" data-toggle="tab">
                <span class="photos"></span><span class="hidden-xs">Photos</span>
            </a>
        </li>
        <li role="presentation">
        	<a href="#profile-<?php echo $model->id;?>" class="clearfix" aria-controls="profile-<?php echo $model->id;?>" role="tab" data-toggle="tab">
            	<span class="info"></span><span class="hidden-xs">Details</span>
            </a>
        </li>
        <li role="presentation">
        	<a href="#messages-<?php echo $model->id;?>" class="clearfix" aria-controls="messages-<?php echo $model->id;?>" role="tab" data-toggle="tab">
            	<span class="glyphicon glyphicon-th-list" ></span><span class="hidden-xs">Services</span>
            </a>
        </li>
        <li role="presentation">
        	<a href="#settings-<?php echo $model->id;?>" class="clearfix" aria-controls="settings-<?php echo $model->id;?>" role="tab" data-toggle="tab">
            	<span class="glyphicon glyphicon-user"></span><span class="hidden-xs">Specialists</span>
            </a>
        </li>
        <li role="presentation">
        	<a id="rewiew-link-<?php echo $model->id;?>" class="clearfix" href="#reviews-<?php echo $model->id;?>" aria-controls="settings-<?php echo $model->id;?>" role="tab" data-toggle="tab">
            <span class="review"></span><span class="hidden-xs">Reviews</span>
            </a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home-<?php echo $model->id;?>">
            <div class="photos-holder clearfix">
                <?php 
                $i=0;
                foreach($model->photos as $photo): 
                    if($i<=2){
                        $class = "item";
                    }
                    else
                    {
                        $class = "item-more";
                    }
                ?>

                    <div class="photo-block <?php echo $class; ?>">               
                        <img src="/<?php echo $photo->path_thumb; ?>">
                    </div>
            
                <?php 
                    $i++;
                endforeach; 
                ?>
            </div><!-- photos holder -->
            <div class="show-more">
                <a href="#" class="show-more">Show more...</a>
            </div>
            <div class="hide-box">
                <a data-id="<?php echo $model->id;?>" class="close-page pull-right hide-block" href="#"></a>
            </div>        
          
        </div><!--/tabpanel1 -->

        <div role="tabpanel" class="tab-pane" id="profile-<?php echo $model->id;?>">
            <?php echo $model->description;?>
            <div class="hide-box">
                <a data-id="<?php echo $model->id;?>" class="close-page pull-right hide-block" href="#"></a>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages-<?php echo $model->id;?>">
        <?php
            $services = $model -> services;
            foreach($services as $serv)
            {
                echo $serv->name." - ".$serv->price." Euro <br>";
                echo $serv->servtypes->name."<br>";
                echo "<img src=\"".Yii::app()->request->baseUrl."/".$serv->servtypes->bg_image."\" style=\"background-color:#e1e1e1;\">";
                echo "<hr>";
            }
        ?>
        <div class="hide-box">
            <a data-id="<?php echo $model->id;?>" class="close-page pull-right hide-block" href="#"></a>
        </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="settings-<?php echo $model->id;?>">
            <div class="spec-holder clearfix">   
                <?php
                    $specs = $model -> specialists;
                    $i=1;
                    foreach($specs as $spec):
                        if($spec->avatar){
                            $img_url = $spec->avatar;
                        }
                        else
                        {
                            $img_url = "images/man.png"; 
                        }
                        
                ?>
                        <div class="spec-block" data-id="<?php echo $spec->id; ?>" data-order="<?php echo $i;?>">
                            <img class="round" src="/<?php echo $img_url;?>">
                            <div class="spec-title">
                                <span class="spec-name"><?php echo $spec->name; ?></span><br>
                                <span class="spec-name"><?php echo $spec->lastname; ?></span><br>
                                <span class="spec-specialization"><?php echo $spec->spectypes->name;?></span>
                            </div>
                            <img class="spec-cont-show" src="/images/tab-show.png">
                        </div>
                <?php
                    $i++;
                    endforeach;
                ?>
            </div>
            <div class="hide-box">
                <a data-id="<?php echo $model->id;?>" class="close-page pull-right hide-block" href="#"></a>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="reviews-<?php echo $model->id;?>">. </div>
    </div>
    
    

</div><!--/info-block -->