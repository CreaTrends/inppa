<div class="col-4" id="product-<?php the_ID(); ?>">
    <div class="card">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo get_the_title();?></h5>
            <p class="card-text"><?php echo the_excerpt();?></p>
        </div>
    </div>
</div>