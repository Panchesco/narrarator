<?php head(array('title'=>'Browse by Tag')); ?>

<div id="primary">
    
    <h1>Browse by Tag</h1>
    
    <ul class="navigation item-tags" id="secondary-nav">
    <?php echo minimalist_nav_items(); ?>
    </ul>

    <?php echo tag_cloud($tags,uri('items/browse')); ?>

</div>

<?php foot(); ?>