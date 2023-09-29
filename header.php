<!DOCTYPE html>
<!-- did the inline style on the html to hide the gap of the admin bar just incase I forget to remove it -->
<html <?php language_attributes() ?> style="margin:0!important">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN for GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>

    <?php wp_head(); ?>

</head>

<body>
    <?php
    //NavBar
    get_template_part("template-parts/navbar");
    ?>