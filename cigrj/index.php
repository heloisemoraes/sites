<?php get_header(); ?>



        <?php 



        $k = 0;

        if (have_posts()) :

            while (have_posts()) : the_post(); $k++; ?>



               
			   

                    

        <?php endwhile; ?>

            <div id="footlink"><?php if(function_exists('wp_pagenavi')){ wp_pagenavi();} ?></div>			

           

        <?php else : ?>



            <div class="postagem post">

                <h2>N&atilde;o foi encontrado nenhum conte&uacute;do.</h2>

            </div>



        <?php endif; ?>





<?php get_footer(); ?>