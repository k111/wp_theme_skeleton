<?php

/*
 * アイキャッチ画像を使用
 * use: <?php the_post_thumbnail(); ?>
 */
add_theme_support('post-thumbnails');

/*
 * カスタムメニューを使用
 * ex)  <?php wp_nav_menu(); ?>
 */
add_theme_support('menus');

/*
 * 絵文字の削除
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/*
 * カスタムメニューの現在地クラスactiveを付与
 */
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    if(is_array($var)){
        //$var2 = array_intersect($var, array('current-menu-item','current-page-ancestor'));
        /* 現在地のクラス名を変更  */
        if ((in_array('current-menu-item', $var)) || (in_array('current-page-ancestor', $var)) || (in_array('current_page_parent', $var))) {
            $var[] = 'active ';
        }
        return $var;
    } else {
        return $var;
    }
}

/*
 * wp_list_pagesメニューの現在地クラス active を付与
 */
add_filter('page_css_class', 'my_css_attributes_page_filter', 100, 1);
function my_css_attributes_page_filter($var) {
    if(is_array($var)){
        //$var2 = array_intersect($var, array('current_page_item', 'carrent-cat'));
        /* 現在地のクラス名を変更  */
        if ((in_array('current_page_item', $var)) || (in_array('current-cat', $var)) || (in_array('current_page_parent', $var))) {
            $var[] = 'active ';
        }
        return $var;
    } else {
        return $var;
    }
}

/*
 * カスタムメニューにカスタム投稿タイプがある際に、
 * 投稿に現在地クラスがつくのを削除
 */
add_filter( 'nav_menu_css_class', 'mypace_custom_navi_menu', 10, 2 );
function mypace_custom_navi_menu( $classes, $item ) {
    global $wp_query;
    $singular_slug = 'service';
    $page_for_custom_type_title = 'サービス';
    $page_for_posts = get_option( 'page_for_posts' );
    $post_type_query = $wp_query->query_vars['post_type'];
    $del_flag = true;
    $add_flag = false;

    if ( is_singular( 'post' ) || is_category() || is_tag() ) {
        $del_flag = false;
    } elseif ( ( is_author() || is_date() || is_author() ) ) {
        if ( in_array( $post_type_query, array ( '', 'post' ) ) ) {
            $del_flag = false;
        } elseif ( $post_type_query == $custom_post_type ) {
            $add_flag = true;
        }
    } elseif ( is_tax() ) {
        $taxonomy = get_taxonomy( $wp_query->query_vars['taxonomy'] );
        if ( count( $taxonomy->object_type ) == 1 && $taxonomy->object_type[0] == 'post' ) {
            $del_flag = false;
        } elseif ( count( $taxonomy->object_type ) == 1 && $taxonomy->object_type[0] == $singular_slug ) {
            $add_flag = true;
        }
    } elseif ( is_singular( $singular_slug ) ) {
        $add_flag = true;
    }

    if ( $del_flag && is_numeric( $page_for_posts ) && $item->object_id == $page_for_posts && $item->object == 'page' && $key = array_search( 'current_page_parent', $classes ) ) {
            unset( $classes[$key] );
    } elseif ( $add_flag && $item->title == $page_for_custom_type_title && $item->object == 'page' ) {
        $classes[] = 'current_page_parent';
    }
    return $classes;
}


/*
 * ウィジェットを使用
 * use: <?php dynamic_sidebar(); ?>
 */
register_sidebar(
    array(
        'id' => 'unique-sidebar-id',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    )
);



/*
 * 管理画面メニューの非表示
 */
function edit_admin_menus() {
    //remove_menu_page( 'index.php' );                  // ダッシュボード
    //remove_menu_page( 'edit.php' );                   // 投稿
    //remove_menu_page( 'upload.php' );                 // メディア
    //remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
    remove_menu_page( 'edit-comments.php' );            // コメント
    //remove_menu_page( 'themes.php' );                 // 外観
    //remove_menu_page( 'plugins.php' );                // プラグイン
    //remove_menu_page( 'users.php' );                  // ユーザー
    //remove_menu_page( 'tools.php' );                  // ツール
    //remove_menu_page( 'options-general.php' );        // 設定
}
add_action('admin_menu', 'edit_admin_menus');


?>