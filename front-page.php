<?php
get_header()
?>

<?= get_template_part("template-parts/nabar"); ?>

<section style="height:100vh">
    <!-- For desktop background -->
    <div class="hidden lg:block "><?php get_template_part("template-parts/images/desktop-background") ?>
    </div>


    <!-- For mobile background -->
    <div class="bg-img lg:hidden  relative -top-5 flex flex-col px-5 pb-5 justify-center items-center gap-5 text-center  w-auto">

        <?php get_template_part("template-parts/images/mobile-background") ?>

        <p class="font-custom font-light w-92 text-base ">
            Quantum Systems stands at the forefront of personal computer engineering and retailing. Our mission is to redefine the boundaries of computing by meticulously engineering PCs tailored to each customer's unique needs.
        </p>
    </div>
    <div class="flex relative flex-end gap-8 z-10">
        <button class="border border-p-color bg-p-color hover:border-blue-500 active:bg-p-color text-white p-3 px-8">Our Products</button>
        <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Performance</button>
        <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Essential</button>
        <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Compact</button>
    </div>
    </div>


    <p class=" hidden lg:block absolute bottom-0 right-0 text-medium mt-10 pt-14 mr-24" style="width:34%; bottom:-130px">Quantum Systems stands at the forefront of personal computer engineering and retailing. Our mission is to redefine the boundaries of computing by meticulously engineering PCs tailored to each customer's unique needs.</p>
</section>



<section>
    Products
</section>

<?php get_footer()
?>