<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(' - ', true, 'right'); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<?php if(is_home()): ?>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css"> -->
<?php endif; ?>
<!-- [ SCRIPTS ] -->
<!--[if lt IE 9]>
<![endif]-->
<!-- /[ SCRIPTS ] -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- [ HEADER-AREA ] -->
<header>
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/"><?php echo bloginfo('name'); ?></a>
<!-- /.navbar-header --></div>
<div id="navbar" class="navbar-collapse collapse">
<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-form navbar-right">
<div class="form-group">
<input type="text" name="s" id="s" class="form-control" placeholder="keyword" >
<!-- /.form-group --></div>
<button type="submit" class="btn btn-success">Search</button>
</form>
<!--/.navbar-collapse --></div>
<!-- /.container --></div>

<div class="navbar navbar-inverse" style="border-radius:0;">
<div class="container">
<?php
$args = array(
    'menu' => 'gnav',
    'container' => false,
    'menu_class' => 'nav navbar-nav',
);
wp_nav_menu($args);
?>
<!-- /.container --></div>
<!-- /.navbar --></div>

</header>
<!-- /[ HEADER-AREA ] -->


<?php // パンくずリストを表示
if( function_exists('bcn_display_list') && !is_front_page() ) :
    echo '<div class="container">';
    echo '<ul class="breadcrumb">';
    bcn_display_list();
    echo '</ul>';
    echo '</div>';
endif; ?>


<!-- [[ CONTENT-AREA ]] -->
<div class="container">

