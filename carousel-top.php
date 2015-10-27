
<div id="carousel_sample" class="carousel slide" data-ride="carousel">

<div class="list-unstyled carousel-inner">
<?php
$args = array(
    'post_type' => 'topimage',
    'posts_per_page' => 5
);
$post_list = get_posts( $args );
$count = 0;
foreach ( $post_list as $post ) : setup_postdata( $post );
$count++;
?>
<div class="item <?php if($count == 1) echo 'active' ?>"><?php if(post_custom('wpcf-topimage_url')) : ?>
<a href="<?php echo post_custom('wpcf-topimage_url'); ?>">
<?php endif; ?>
<?php // 画像フィールドを表示
if(types_render_field('topimage_image'))
echo types_render_field('topimage_image',array(
                        'size' => 'full',
                        'alt'  => get_the_title() ));
?>
<?php if(post_custom('wpcf-topimage_url')) : ?>
</a>
<?php endif; ?>
</div>
<?php endforeach;
wp_reset_postdata();
?>
</div>

<a class="left carousel-control" href="#carousel_sample" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel_sample" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
</a>

<!-- /#carousel_sample.carousel.slide --></div>
