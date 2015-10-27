<?php
// 投稿ページ トップテンプレート
?>
<?php get_header(); ?>


<div class="row">
<div class="col-md-9">

<h1 class="page-header">
<?php if(is_home()) :?>お知らせ
<?php elseif(is_category()) :?>
<?php single_cat_title( '', true ); ?>
<?php elseif(is_date()) :?>
  <?php if(get_query_var('monthnum')) :?>
    <?php echo get_query_var('year'); ?>年<?php echo get_query_var('monthnum'); ?>月
  <?php else :?>
    <?php echo get_query_var('year'); ?>年
  <?php endif; ?>
<?php elseif(is_search()) :?>
検索結果
<?php endif; ?>
</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="media">
  <div class="media-left">
    <a href="<?php the_permalink(); ?>">
      <?php
      if( has_post_thumbnail() ) :
        the_post_thumbnail( 'thumbnail' );
      else :
        echo '<img class="media-object" src="http://dummyimage.com/150x150/000/fff" alt="...">';
      endif;
      ?>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_time('Y年m月d日'); ?></p>
    <?php if(the_category()) {
      the_category();
    }
    ?>
    <?php the_excerpt(); ?>
  </div>
</div>

<?php endwhile; else : ?>
<p>該当する記事はありませんでした。</p>
<?php endif;?>


<?php // ページナビを表示
if( function_exists( 'wp_pagenavi' ) ) {
echo '<hr><div class="text-center">';
wp_pagenavi();
echo '</div>';
}
?>

<!-- /.col-md-9 --></div>

<?php get_sidebar(); ?>

<!-- /.row --></div>

<?php get_footer(); ?>
