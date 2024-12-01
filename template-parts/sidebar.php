<section class="w-1/3 p-2 space-y-16 sticky top-10 h-full md:w-full md:px-4">
    <!-- <div class="bg-theme_lighter_gray">
    <div class="flex uppercase font-oswald bg-white">
      <p class="bg-theme_lighter_gray px-6 py-2">Most Viewed</p>
      <p class="bg-white text-theme_dark_gray px-6 py-2">Most Commented</p>
    </div>
    <div>
      <?php
      for ($i = 1; $i <= 5; $i++) {
        ?>
        <div class="flex space-x-4 relative px-2 py-4">
          <p class="text-theme_light_gray text-4xl font-oswald"><?php echo $i ?></p>
          <div class="relative">
            <h3 class="font-teko text-3xl">
              The Key to Comfort for Those Who are Always on the Move
            </h3>
            <p class="text-theme_light_gray">3999 views</p>
          </div>
          <div class="w-full h-4 absolute bottom-2">
            <span class="h-[1px] w-96 absolute bottom-0 bg-theme_gray"></span>
          </div>
        </div>
      <?php } ?>
    </div>
  </div> -->

    <?php
    $page = get_page_by_path('about-me');
    
    $link = '<a class="font-bold" href="'.get_permalink($page).'">Read more</a>';
    $excerpt = wp_trim_words(get_the_excerpt($page), 30, '...'.$link);
  ?>
    <div class="px-5 pb-8 pt-10 border-[1.5px] border-theme_ligher_gray relative">
        <button
            class="absolute -top-5 w-4/5 left-1/2  -translate-x-1/2 uppercase bg-black text-white p-2 font-montserrat font-bold "><?php echo $page->post_title ?></button>
        <?php 
            echo get_the_post_thumbnail($page->ID);
            ?>
        <p class="py-6 ">
            <?php
            echo $excerpt;
          ?>
        </p>
    </div>


    <div class="px-5 pb-8 pt-10 border-[1.5px] border-theme_ligher_gray relative">
        <button
            class="absolute -top-5 w-4/5 left-1/2  -translate-x-1/2 uppercase bg-black text-white p-2 font-montserrat font-bold ">Follow
            Me</button>

        <div class="pt-4 text-sm text-theme_gray_400 flex justify-evenly">
            <?php 
          $social = array("instagram","twitter","linkedin","github","youtube","figma");
          foreach($social as $key){
          
          ?>
            <span class="p-[6px] bg-theme_light_black">
                <i class="w-6 h-6 stroke-theme_light_black  fill-white" data-feather="<?php echo $key; ?>"></i>
            </span>
            <?php }?>

        </div>
    </div>
</section>