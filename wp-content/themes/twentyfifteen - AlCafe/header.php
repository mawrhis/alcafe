<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage ALCafe
 * @since AlCafe 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title>Alzheimer Cafe</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Oranienbaum" rel="stylesheet">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <div id="wrapper">
    <div id="header">
        <div id="logo">
          <a href="http://localhost/AlCafe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" width="100%" /></a>
        </div>
    </div>

<?php get_sidebar() ?>
<div id="main">
<div id="center">
<div id="content" class="site-content">