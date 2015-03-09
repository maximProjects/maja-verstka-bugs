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
                <?php foreach($model->photos as $photo): ?>
                      
                <div class="photo-block">               
                    <img src="/<?php echo $photo->path_thumb; ?>">
                </div>
            
                <?php endforeach; ?>
            </div><!-- photos holder -->
        
          
        </div><!--/tabpanel1 -->

        <div role="tabpanel" class="tab-pane" id="profile-<?php echo $model->id;?>">
        <?php echo $model->description;?>
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
        </div>
        <div role="tabpanel" class="tab-pane" id="settings-<?php echo $model->id;?>">
        <?php
            $specs = $model -> specialists;
            foreach($specs as $spec){
                echo $spec->name." ".$spec->lastname." - ".$spec->spectypes->name."<br>";
                echo $spec->phone."<br>";
                echo "<a href=\"mailto:".$spec->email."\">".$spec->email."</a><br>";
                echo "<hr><br>";
            }
        ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="reviews-<?php echo $model->id;?>">. </div>
    </div>
    
    
    <div class="hide-box">
        <a data-id="<?php echo $model->id;?>" class="close-page pull-right hide-block" href="#"></a>
    </div>
</div><!--/info-block -->