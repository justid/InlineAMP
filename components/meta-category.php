<div class="flex-box meta-category">
<?php $category = get_the_category();
    foreach($category as $cate) {
        echo '<a class="post-cate" href="'.get_category_link($cate->term_id).'">'.$cate->cat_name.'</a>'; 
    }
?>
<?php if (is_sticky()):?>
    <div class="sticky-tag">
        <span class="sticky-text">Sticky post</span>
    </div>
<?php endif; ?>
</div>