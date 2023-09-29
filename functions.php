<?php
function enqueueFiles() {
    //Tailwind 
    wp_enqueue_style('tailwindcss_setup', get_template_directory_uri() . "/dist/output.css");
    //Custom css
    wp_enqueue_style('Custom_css', get_template_directory_uri() . "/src/custom.css");
    //Font
    wp_enqueue_style('typekit', 'https://use.typekit.net/nzy8uue.css');
    //custom js
    wp_enqueue_script('custom-js', get_template_directory_uri() . "/js/main.js");
    //GSAP JS file
    wp_enqueue_script("GSAP_js", get_template_directory_uri() . "/js/script.js");
    //Removed the admin bar for me (just incase i forget)
    show_admin_bar(false);
}

add_action("wp_enqueue_scripts", "enqueueFiles");
