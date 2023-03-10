<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset")?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="icon" type="image/x-icon" href="media/favicon.ico">
</head>
<body>
  <?php wp_body_open();?>
    <!--Cabecero-->
    <?php get_template_part( 'template-parts/content','header' );?>
    <!--Fin Cabecero-->
    <main>