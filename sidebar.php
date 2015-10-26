<!-- [ SIDE-AREA ] -->
<div class="col-md-3">

<?php // 投稿の場合
if( is_single() || is_category() || is_archive() || is_home() ) {
    get_sidebar('single');
}
?>

<?php // 固定ページの場合
if( is_page() ) {
    get_sidebar('page');
}
?>

<!-- /.col-md-3 --></div>
<!-- /[ SIDE-AREA ] -->