<?php get_header( ) ;?>
<main>
   <section class="contaner">
   <?php if( have_posts() ): ?>
      <?php while( have_posts() ): ?>
         <?php the_post(); ?>
         <?= get_template_part( 'template_parts/post' ); ?>
      <?php endwhile; ?>
   <?php endif; ?>
   <div class="paginacao">
      <div class="pagina_anterior"><?php previous_posts_link('< anterior') ;?></div>
      <div class="proxima_pagina"><?php next_posts_link( 'próxima >') ;?></div>
   </div>
   </section>
   <?= get_sidebar(  ); ?>
</main>

<?php get_footer(  ); ?>


