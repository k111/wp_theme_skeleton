<?php get_header(); ?>

<?php // カスタム投稿バナーパーツ読み込み
// get_template_part('carousel','top'); ?>

<div class="jumbotron">
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
</div>


<div class="container">
<h2 class="text-center page-header">Infomation</h2>
<?php // 投稿ページ最新5件を表示
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5
);
$post_list = get_posts( $args );
foreach ( $post_list as $post ) : setup_postdata( $post );
?>
<dl class="dl-horizontal">
    <dt><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></dt>
    <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
</dl>
<?php endforeach;
wp_reset_postdata();
?>
<!-- /.container --></div>

<div class="row" style="margin-bottom:5em;">
<div class="col-md-4">
<h2 class="text-center">Works</h2>
<p class="text-center h1"><i class="glyphicon glyphicon-education"></i></p>
<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
<p class="text-center"><a href="#" class="btn btn-primary" role="button">詳細をみる</a></p>
<!-- /.col-md-4 --></div>
<div class="col-md-4">
<h2 class="text-center">Service</h2>
<p class="text-center h1"><i class="glyphicon glyphicon-cloud"></i></p>
<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
<p class="text-center"><a href="#" class="btn btn-primary" role="button">詳細をみる</a></p>
<!-- /.col-md-4 --></div>
<div class="col-md-4">
<h2 class="text-center">About</h2>
<p class="text-center h1"><i class="glyphicon glyphicon-grain"></i></p>
<p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
<p class="text-center"><a href="#" class="btn btn-primary" role="button">詳細をみる</a></p>
<!-- /.col-md-4 --></div>
<!-- /.row --></div>

<?php get_footer(); ?>
