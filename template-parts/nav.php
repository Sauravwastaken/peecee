<nav class=" py-6">
    <div class="nav-primary text-center">
        <h1 class="font-oswald font-bold text-theme_black text-6xl">
            <?php echo bloginfo('name'); ?>
        </h1>
        <p class="font-mulish text-theme_light_gray text-lg pt-4">
            <?php echo bloginfo('description'); ?>
        </p>
    </div>
    <div class="nav-secondary  font-teko text-3xl uppercase text-theme_black  py-12">
        <div id="hamburger" class="hidden items-center space-x-2 justify-center cursor-pointer md:flex">
            <span class="hidden md:!flex"></span>

            <i data-feather="menu"></i>
            <p class="hidden md:block">

                Menu
            </p>
        </div>


        <?php echo wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => "nav-menu flex items-center justify-center space-x-8 md:flex-col md:space-x-0 md:space-y-4 md:hidden md:pt-6")); ?>
    </div>
</nav>