<?php 
get_template_part('template-parts/header');
include_once('template-parts/nav.php');

?>
<div class="w-full flex space-x-6 relative overflow-visible md:flex-col md:space-x-0 md:space-y-6">
    <!-- Latest Articles -->
    <section class="w-full  md:w-full md:px-4 sm:px-0">
        <div class="font-oswald uppercase text-2xl text-theme_black relative">
            <h2>Latest Articles</h2>
            <span class="absolute mt-4 w-full h-[.15rem] bg-theme_black"></span>
        </div>

        <!-- All posts container -->
        <div class="pt-12  sm:space-y-12">
            <!-- Post -->
            <?php
            if(have_posts()){
      while (have_posts()) {
        the_post();
        $catagory = get_the_category()[0]->name;
        $excerpt = wp_trim_words(get_the_excerpt(), 50, "[...]") ?>
            <div class="flex  py-4  sm:flex-col sm:px-2 sm:py-1">
                <!-- Image -->
                <div class="w-2/12 xl:w-3/5 xl:h-3/5 sm:w-full">
                    <?php echo the_post_thumbnail("medium", array("class" => 'object-cover h-full w-full')); ?>

                </div>
                <div class="px-4 space-y-3 w-8/12 sm:w-full sm:pt-6 sm:px-0">
                    <p class="uppercase"><?php echo $catagory; ?></p>
                    <h3 class="font-teko uppercase text-3xl font-bold">
                        <?php echo the_title(); ?>
                    </h3>
                    <ul class="flex space-x-2 text-sm">
                        <li class="text-theme_gray"><?php echo get_the_date(); ?></li>
                        <li class="">/</li>
                        <li class="text-theme_gray">1 comment</li>
                        <li class="">/</li>
                        <li><?php  the_author(); ?></li>


                    </ul>
                    <div class="text-theme_gray text-sm font-mulish leading-relaxed">
                        <?php echo $excerpt; ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <button class="font-oswald bg-black text-white px-8 mt-4 py-2 uppercase">
                            Continue Reading
                        </button>
                    </a>
                </div>
            </div>
            <hr class="my-5" />
            <?php }
      } ?>
        </div>
    </section>


</div>
<?php
get_template_part('template-parts/footer');
?>