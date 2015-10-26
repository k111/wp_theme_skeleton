<section>
<h3>カテゴリ</h3>
<ul class="nav nav-pills nav-stacked">
<?php // カテゴリーリストを表示
wp_list_categories( array(
    'title_li' => ''
)); ?>
</ul>
</section>

<section>
<h3>アーカイブ</h3>
<ul class="nav nav-pills nav-stacked">
<?php // アーカイブリストを表示
wp_get_archives();
?>
</ul>
</section>