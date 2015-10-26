<?php
    //親ページのリンクを取得
    $ancestor_tmp = get_post_ancestors( $post->ID );
    $ancestor = array_pop( $ancestor_tmp );
    $permalink = get_permalink( $ancestor );
    //親ページのタイトルを取得
    $parent_title = get_the_title($post->post_parent);
?>

<section>
<h3><a href="<?php echo $permalink; ?>">
<?php echo $parent_title;?>
</a></h3>

<?php //親に属する子ページのリンクとタイトルをリストで取得
if($post->post_parent) {
    $children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->post_parent."&echo=0");
} else {
    $children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->ID."&echo=0");
}
if ($children) {
?>
<ul class="nav nav-pills nav-stacked">
<?php //リストを表示
   echo $children;
?>
</ul>
<?php } ?>
</section>