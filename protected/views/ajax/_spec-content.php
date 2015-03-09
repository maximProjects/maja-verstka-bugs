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
        <div class="photo-block <?php echo $class ?>">
            <img src="/<?php echo $photo->path_thumb;?>">
        </div>
<?php
    $i++;
    endforeach;
?>

</div><!--  / photos holder -->

<div class="show-more">
    <a href="#" class="show-more">Show more...</a>
</div>

<div class="spec-descriiption">
    <h3><?php echo $model->name;?> <?php echo $model->lastname;?></h3>
    <p>
        <?php echo $model->description;?>
    </p>
</div> <!-- / spec-descriiption -->

<div class="spec-buttons clearfix">
    <ul class="item-menu">
        <li class="tab-hide">
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

    </ul>
</div> <!-- / book-but -->