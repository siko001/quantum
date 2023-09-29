<!-- 
Loop over all the products
 -->


<?php

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'orderby' => 'date',

);
$products_query = new WP_Query($args);

if ($products_query->have_posts()) :
    while ($products_query->have_posts()) : $products_query->the_post();

        // Output your custom field values here (from ACF)
        $permalink = get_permalink();
        $description = get_field('description');
        $mini_description = get_field('mini-description');
        $product_specs = get_field('specs');
        $image = get_field('image');
?>


        <!-- Product Container -->
        <div class="flex product_heading items-baseline mb-8">
            <!-- title and red box -->
            <div class="red-box"></div>
            <h3 id="<?= the_title() ?>" class="product_title font-custom"><?php the_title(); ?></h3>
        </div>

        <hr>
        <!-- Description box -->
        <div class="flex mt-5 mb-6 flex-col lg:flex-row justify-between w-auto product_description">
            <div class="flex flex-col justify-between">
                <!-- Description -->
                <h5 class="font-custom text-xl product_dark_text"><?php echo $description; ?></h5>
                <br>
                <div>
                    <div class="relative -top-5 ">
                        <!-- Mini Desctption -->
                        <p class="font-custom text-xs lg:text-sm font-light product_description_text"><?php echo $mini_description; ?>.</p>
                        <p class="font-custom product_specs text-xs opacity-30"><?php echo $product_specs; ?></p>
                    </div>
                    <!-- Data sheet and link to item -->
                    <div class="flex data_sheet_link_container ">
                        <img src="<?= get_template_directory_uri() . '/assets/plus.svg' ?>" alt="View Data Sheet" class="product_svg" />
                        <a href="<?= $permalink ?>" class="product_link">View Data Sheet</a>
                    </div>

                </div>

            </div>
            <div class="product_img">
                <img class="product_image" src="<?= $image ?>">
            </div>
        </div>

        <hr class="mb-10">

<?php

    endwhile;
    wp_reset_postdata(); // Reset the query
else :
    echo 'No products found.';
endif;
?>