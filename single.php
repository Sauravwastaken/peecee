<?php
get_template_part('template-parts/header');
include_once('template-parts/nav.php');

$catagory = get_the_category()[0]->name; ?>

<div class="w-full flex space-x-6">

    <div class="p-4 space-y-3 w-8/12">
        <?php echo the_post_thumbnail(); ?>

        <p class="uppercase bg-black text-white w-fit p-2 text-xs font-montserrat font-bold">
            <?php echo $catagory; ?>
        </p>
        <h3 class="font-teko uppercase text-3xl font-bold">
            <?php echo the_title(); ?>
        </h3>
        <ul class="flex space-x-2 text-sm">
            <li class="text-theme_gray"><?php echo get_the_date(); ?></li>
            <li class="">/</li>
            <li>1 comment</li>
        </ul>
        <div class="single-post-container text-theme_gray_400  font-mulish leading-relaxed space-y-6">
            <?php echo the_content(); ?>
        </div>
    </div>


    <!-- Sidebar -->
    <?php include_once('template-parts/sidebar.php'); ?>

</div>



<?php
get_template_part('template-parts/footer');
?>