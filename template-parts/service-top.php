<!-- 2 services that will be displayed on top of the services container -->

<?php
$exclude_posts = array(34, 35);

$args = array(
    'post_type' => 'service',
    'posts_per_page' => 2,
    'order' => 'ASC',
    'orderby' => 'date',
    'post__not_in'   => $exclude_posts, // Exclude specified posts
);

$services = new WP_Query($args);

if ($services->have_posts()) :
    while ($services->have_posts()) : $services->the_post();
?>


        <!-- left -->
        <div class="service_container flex flex-col mr-4">
            <div class="title_container flex">
                <div class="service-box"></div>
                <div class="title font-custom font-light text-3xl"><?php the_title(); ?></div>
            </div>
            <div class="description">
                <?php
                // Replace 'description_field_group' with the actual field group name you created in ACF
                the_field('description');
                ?>
            </div>
        </div>


<?php
    endwhile;
    wp_reset_postdata();
else :
// No services found.
endif;
