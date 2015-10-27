<?php // 投稿ページ テンプレート
get_header(); ?>

<div class="row">
<div class="col-md-9">

<article>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class="page-header"><?php the_title(); ?></h1>

<p class="text-right"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>

<?php the_category(); ?>


<?php // アイキャッチ画像
if ( has_post_thumbnail() ) :
    echo '<p>';
    the_post_thumbnail( 'large' );
    echo '</p';
endif;
?>

<?php the_content(); ?>


<?php if(get_next_post() || get_previous_post()) : ?>
<br>
<br>
<ul class="pager">
<?php if(next_post_link('<li class="previous">%link</li>')) : ?><?php endif ; ?>
<?php if(previous_post_link('<li class="next">%link</li>')) : ?><?php endif ; ?>
</ul>
<?php endif; ?>

<?php endwhile; else: ?>
<p>投稿が見つかりませんでした。</p>
<?php endif; ?>
</article>

<!-- /.col-md-9 --></div>


<?php get_sidebar(); ?>

<!-- /.row --></div>


<?php get_footer(); ?>
