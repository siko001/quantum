<?php
get_header()
?>

<?= get_template_part("template-parts/nabar"); ?>

<section>
    <!-- For desktop background -->
    <div class="hidden lg:block  "><?php get_template_part("template-parts/images/desktop-background") ?> </div>

    <!-- For mobile background -->
    <div class="bg-img lg:hidden  relative -top-5 flex flex-col px-5 pb-5 justify-center items-center gap-5 text-center  w-auto">

        <?php get_template_part("template-parts/images/mobile-background") ?>

        <p class="font-custom font-light w-92 text-base ">
            Quantum Systems stands at the forefront of personal computer engineering and retailing. Our mission is to redefine the boundaries of computing by meticulously engineering PCs tailored to each customer's unique needs.
        </p>
    </div>

    <!-- buttons for desktop (phone hidden) -->
    <div class="hidden lg:block">
        <div class="flex  relative gap-8 z-10  mx-auto justify-center" style="width:100%; left:-30px ;margin-top:20rem; margin-bottom:200px;">
            <button class=" border border-p-color bg-p-color hover:border-blue-500 active:bg-p-color text-white p-3 px-8">Our Products</button>
            <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Performance</button>
            <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Essential</button>
            <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Compact</button>
        </div>
    </div>
    <!-- Text for Desktop (phone hidden) -->
    <p class="hidden lg:block font-custom font-light w-92 text-base mr-24 mt-5" style="width:33%; float:right;">
        Quantum Systems stands at the forefront of personal computer engineering and retailing. Our mission is to redefine the boundaries of computing by meticulously engineering PCs tailored to each customer's unique needs.
    </p>
</section>


<!--Start Product Section -->
<section class="flex  flex-col gap-5">
    <h1 class="text-4xl lg:text-5xl mr-2 font-custom relative lg:pt-40 lg:mt-10 lg:ml-32 section_title" style="padding-top:100px; ">Our Products</h1>
    <br>
    <!-- Product Container -->
    <div class="lg:ml-32 product_box">

        <div class="flex product_heading items-baseline mb-8">
            <div class="red-box"></div>
            <h3 class="product_title font-custom">Performance Series</h3>
        </div>

        <hr>

        <div class="flex mt-5 mb-6 flex-col lg:flex-row justify-between w-auto product_description">
            <div class="flex flex-col justify-between">
                <h5 class="font-custom text-xl product_dark_text">Extreme performance PCs, designed for intensive multitasking and demanding computational tasks.</h5>
                <br>
                <div>
                    <div class="relative -top-5 ">
                        <p class="font-custom text-xs lg:text-sm font-light product_description_text">Integer vehicula mauris velit, et dignissim libero imperdiet vel.</p>
                        <p class="font-custom product_specs text-xs opacity-30">Available in 512 GB, 1 TB, and 4 TB.</p>
                    </div>

                    <div class="flex data_sheet_link_container ">
                        <img src="<?= get_template_directory_uri() . '/assets/plus.svg' ?>" alt="View Data Sheet" class="product_svg" />
                        <a class="product_link">View Data Sheet</a>
                    </div>

                </div>
            </div>
            <div class="product_img">
                <img>Product Img
            </div>
        </div>
        <hr>
    </div>

</section>


<?php get_footer()
?>