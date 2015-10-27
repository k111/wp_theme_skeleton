<?php // 固定ページ テンプレート
get_header(); ?>

<div class="row">
<div class="col-md-9">

<article>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class="page-header"><?php the_title(); ?></h1>

<?php the_content(); ?>

<pre>
<?php print_r( $post ); ?>
</pre>

<?php endwhile; endif;?>
</article>
<!-- /.col-md-9 --></div>


<?php get_sidebar(); ?>

<!-- /.row --></div>

<?php get_footer(); ?>
