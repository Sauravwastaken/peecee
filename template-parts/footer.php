 </div>
 <footer
     class="flex bg-theme_black text-white py-8 px-12 space-x-8 md:flex-col md:space-x-0 md:space-y-8 md:px-8 sm:px-4">
     <div class="flex-[.3]">
         <h3 class="footer-h3">About us</h3>
         <p class="text-theme_dark_gray">This is some dummy copy. You’re not really supposed to read this dummy copy, it
             is just a place holder for people who need some type to visualize what the actual copy might look like if
             it were real content.</p>
     </div>
     <div class="flex-[.2]">
         <h3 class="footer-h3">Navigate</h3>
         <?php echo wp_nav_menu('footer-menu'); ?>
     </div>
     <div class="flex-[.2]">
         <h3 class="footer-h3">Follow me</h3>
         <ul class="space-y-2">
             <li class="flex space-x-2 items-center ">
                 <i data-feather="instagram" class="w-5"></i>
                 <p>Instagram</p>
             </li>
             <li class="flex space-x-2 items-center">
                 <i data-feather="twitter" class="w-5"></i>
                 <p>Twitter</p>
             </li>
             <li class="flex space-x-2 items-center">
                 <i data-feather="facebook" class="w-5"></i>
                 <p>Facebook</p>
             </li>
         </ul>
     </div>
     <div class="flex  flex-col items-start flex-[.3] w-full">
         <h3 class="footer-h3">Subscribe</h3>
         <p class="text-theme_dark_gray">Enter your email address to subscribe to this blog and receive notifications of
             new posts by email.</p>
         <input class="p-2 my-4 w-full" type="text" placeholder="Email Address">
         <a href="" class="bg-theme_btn_dark_gray font-semibold py-4 px-5 text-lg rounded-full">
             <button>Subscribe</button>
         </a>
     </div>
 </footer>
 <script>
feather.replace();
 </script>
 <script src="<?php echo get_template_directory_uri().'/';?>assets/js/script.js"></script>


 </body>

 </html>