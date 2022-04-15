<?php get_header( ) ;?>
<main>
   <section class="contaner">
   <?php if( have_posts() ): ?>
      <?php while( have_posts() ): ?>
         <?php the_post(); ?>
         <article>
         
         <?php if( has_post_thumbnail(  ) ): ?>
            <a href="<?= the_permalink(  );?>" class="post_thumb">
            <?php the_post_thumbnail('full', ['class' => 'post_miniatura']); ?>
            </a>
         <?php endif; ?>
         <div>
         <h2><a href="<?= the_permalink(  );?>"><?= the_title(  ) ;?></a></h2>
         <p>
            <?=get_the_date(  ) ;?> | 
            <a href="<?= get_the_author_url( get_the_author_meta( 'ID' ) ) ;?>" target="_blank" rel="noopener noreferrer">
            <?php the_author(  ) ;?></a>

            <?= the_category( ', ' ) ;?>

         </p>
         <p>
         <?= the_excerpt() ;?>
         </p>
         
         <p>
         <?= comments_number(  ) ;?> |
         <a href="<?= the_permalink(  );?>">Leia mais</a>
         </p>
         </div>
         </article>
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


