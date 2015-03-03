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
        <div role="tabpanel" class="tab-pane active" id="home-<?php echo $model->id;?>">Photos</div>
        <div role="tabpanel" class="tab-pane" id="profile-<?php echo $model->id;?>">Details</div>
        <div role="tabpanel" class="tab-pane" id="messages-<?php echo $model->id;?>">Services</div>
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
        <div role="tabpanel" class="tab-pane" id="reviews-<?php echo $model->id;?>">.. Reviews ..</div>
    </div>
    
    
    <div class="hide-box">
        <a data-id="<?php echo $id; ?>" class="close-page pull-right hide-block" href="#"></a>
    </div>
</div><!--/info-block -->