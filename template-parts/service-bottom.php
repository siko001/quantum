<!-- 2 services that will be displayed on BOTTOM of the services container -->

<?php
get_header();
$exclude_posts = array(33, 32); //Excluding the posts types already targeted

$args = array(

    'post_type' => 'service',
    'posts_per_page' => 2,
    'order' => 'ASC',
    'orderby' => 'ID',
    'post__not_in'   => $exclude_posts, // Exclude specified posts
);

$services = new WP_Query($args);

if ($services->have_posts()) :
    while ($services->have_posts()) : $services->the_post();
?>
        <div class="service_container flex flex-col mr-4">
            <div class="title_container flex">
                <div class="service-box">
                    <div class="background-box"></div>
                </div>
                <div class="title font-custom font-light text-3xl"><?php the_title(); ?></div>
            </div>
            <div class="description md:text-md lg:text-lg">
                <?php

                the_field('description');
                ?>
            </div>
        </div>


<?php
    endwhile;
    wp_reset_postdata();
endif;

get_footer();
