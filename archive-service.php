<?php get_header(); ?>

<div class="row">

<div class="col-md-9">

<h1 class="page-header">
<?php wp_title(''); ?>
</h1>

<?php // カスタム投稿用にWP_Queryオブジェクト生成＆ループ処理
$loop = new WP_Query(array(
                     'post_type'=>'service',
                     'post_per_page' => 100));
if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>


<div class="media">
<div class="media-left">
<?php // 画像フィールドを表示
if(types_render_field('service_image'))
echo types_render_field('service_image',array(
                        'size' => 'thumbnail'));
else
echo '<img class="media-object" src="http://dummyimage.com/150x150/000/fff" alt="...">'
?>
<!-- /.media-left --></div>
<div class="media-body">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
<!-- /.media-body --></div>
<!-- /.media --></div>

<?php endwhile; endif;?>

<!-- /.col-md-9 --></div>


<?php // get_sidebar(); ?>


<?php get_footer(); ?>

