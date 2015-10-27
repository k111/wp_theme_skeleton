<?php get_header(); ?>

<?php get_template_part('carousel','top'); ?>

<div class="jumbotron">
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
</div>


<section>
<h2>お知らせ</h2>
<dl class="dl-horizontal">
<?php // 投稿ページ最新5件を表示
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5
);
$post_list = get_posts( $args );
foreach ( $post_list as $post ) : setup_postdata( $post );
?>
    <dt><?php the_time('Y年m月d日'); ?></dt>
    <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
<?php endforeach;
wp_reset_postdata();
?>
</dl>
</section>


<?php get_footer(); ?>
