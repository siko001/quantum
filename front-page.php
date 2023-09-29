<?php
get_header()
?>

<section>
    <!-- For desktop background -->
    <!-- <div class="hidden lg:block"><?php get_template_part("template-parts/images/desktop-background") ?></div> -->

    <!-- For mobile background -->
    <div class="bg-img lg:hidden relative -top-5 flex flex-col px-5 pb-5 justify-center items-center gap-5 text-center w-auto">
        <?php get_template_part("template-parts/images/mobile-background") ?>

        <p class="font-custom font-light w-92 text-base">
            Quantum Systems stands at the forefront of personal computer engineering and retailing. Our mission is to redefine the boundaries
            of computing by meticulously engineering PCs tailored to each customer's unique needs.
        </p>
    </div>

    <!-- buttons for desktop (phone hidden) -->
    <div class="hidden lg:block">
        <div class="flex relative gap-8 z-10 mx-auto justify-center" style="width: 100%; left: -30px; margin-top: 20rem; margin-bottom: 200px">
            <button class="border border-p-color bg-p-color hover:border-blue-500 active:bg-p-color text-white p-3 px-8">Our Products</button>
            <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Performance</button>
            <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Essential</button>
            <button class="border-2 border-p-color hover:border-blue-500 active:bg-p-color p-3 text-white px-8">Compact</button>
        </div>
    </div>
    <!-- Text for Desktop (phone hidden) -->
    <p class="hidden lg:block font-custom font-light w-92 text-base mr-24 mt-5" style="width: 33%; float: right">
        Quantum Systems stands at the forefront of personal computer engineering and retailing. Our mission is to redefine the boundaries of
        computing by meticulously engineering PCs tailored to each customer's unique needs.
    </p>
</section>


<!--Start Product Section -->
<section class="flex flex-col gap-5">
    <h1 class="text-4xl lg:text-5xl mr-2 font-custom relative lg:pt-40 lg:mt-10 lg:ml-32 section_title" style="padding-top: 100px">
        Our Products
    </h1>
    <br />
    <div class="lg:ml-32 product_box">

        <!-- Products Query (grabs first 3 but can be adjusted) -->
        <?= get_template_part("template-parts/product") ?>
    </div>
</section>
<!-- End Product Section -->



<!-- Start Services Section -->
<section>
    <!-- Section Heading -->
    <div class="section_heading">
        <div class="left">
            <p class="font-custom font-light">Our services extend beyond mere computer sales. We offer a holistic approach to your computing needs, ensuring every interaction with Quantum Systems enhances your digital life.
            </p>
        </div>
        <div class="right ">
            <h2 class="text-5xl font-custom">Our Services</h2>
        </div>
    </div>

    <!--Full Services COntainer -->
    <div class="full_container flex flex-col">
        <!-- Top Service Container -->
        <div class="top_container flex flex-col lg:flex-row justify-between mb-10">

            <?= get_template_part("template-parts/service-top") ?>
        </div>

        <!-- Bottom Service Continer -->
        <div class="bottom_container flex flex-col lg:flex-row  justify-between">
            <?= get_template_part("template-parts/service-bottom") ?>
        </div>

</section>
<!-- End Services Section -->


<footer class="flex gap-10 flex-col  mt-10 pt-10 ">
    <!-- Top footer Section -->
    <div class="top-footer flex-col justify-center items-center">
        <!-- Inner footer Div -->
        <div class="top-footer__inner flex justify-center items-center">
            <h4 class="text-white text-center text-xl lg:text-5xl footer-text">Stay up to date with Qunatum Systems' latest tech adancements.</h4>
        </div>
    </div>

    <div class="bottom-footer__inner">
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 ">
            <div class="detail">
                <p class="text-xs opacity-60 lg:opacity-30">BUSINESS ENQUIRIES</p>
                <p class="text-md font-bold ">contact@quantumsystems.mt</p>
            </div>
            <div class="detail">
                <p class="text-xs opacity-60 lg:opacity-30">PHONE</p>
                <p class="text-md font-bold ">(+356) 1234 5678</p>
            </div>
            <div class="detail">
                <p class="text-xs opacity-60 lg:opacity-30">FACTORY AND OFFICES</p>
                <p class="text-md font-bold ">Quantum Systems, Quantum Towers, Mosta, MST 2470, Malta</p>
            </div>
        </div>
        <div>
            <div class="footer_box"></div>
        </div>
    </div>
</footer>

<?php get_footer()
?>