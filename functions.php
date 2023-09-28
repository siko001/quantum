<?php
function enqueueFiles() {
    wp_enqueue_style('tailwindcss_setup', get_template_directory_uri() . "/dist/output.css");
    wp_enqueue_style('typekit', 'https://use.typekit.net/nzy8uue.css');
    show_admin_bar(false);
}

add_action("wp_enqueue_scripts", "enqueueFiles");
