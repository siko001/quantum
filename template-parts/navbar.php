<?php get_header() ?>

<!-- NavBar -->
<nav class="w-auto flex sticky flex-col-reverse justify-center lg:flex-row lg:justify-between relative z-10 ">
    <!-- LOGO -->
    <h1 class="flex flex-nowrap justify-center mt-6 text-4xl lg:text-5xl font-custom lg:mt-20 lg:ml-32">Quantum Systems</h1>


    <!-- Desktop Dynamic Nav-menu -->
    <div class=" hidden lg:block pt-20 pb-14 pl-20 ps-8 pe-32 bg-p-color font-medium menu">
        <?= wp_nav_menu() ?>
    </div>

    <!-- Mobile Nav Menu Bars -->
    <div class=" mt-6 flex justify-center lg:hidden ">
        <img id="mobile" class="cursor-pointer" src=" <?= get_template_directory_uri() . '/assets/menu.svg' ?>" alt="mobile-menu-bar"></img>
    </div>
</nav>

<?php get_footer() ?>