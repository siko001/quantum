<?php

$args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'post__in' => array(8),
    'numberposts' => 1,
);
$image = get_posts($args);
?>

<?php if ($image) : ?>
    <?php
    $image_url = wp_get_attachment_image_src($image[0]->ID, 'full');

    ?>
<?php endif; ?>

<img src="<?php echo $image_url[0]; ?>" alt="desktop background" class="w-3/5 min-h-screen absolute right-0 top-0 mr-24 pb-5 brightness-75 object-cover" />