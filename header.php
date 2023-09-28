<!DOCTYPE html>
<html <?php language_attributes() ?> style="margin:0!important">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body style="height:200vh;">

    <?php
    //NavBar

    get_template_part("template-parts/navbar");
    ?>