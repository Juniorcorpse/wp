<?php 
/**
 * Template Name: post full wh
 * Template Post Type: post
 */

get_header( ) ;?>
<main>
   <section class="single contaner  fullwidth">
    <?php if( have_posts() ): ?>
      <?php while( have_posts() ): ?>
         <?php the_post(); ?>
         <header><h2><?= the_title(  ) ;?></h2></header>
         <article>
         
         <?php if( has_post_thumbnail(  ) ): ?>
            
            <?php the_post_thumbnail('full'); ?>
            
         <?php endif; ?>
        
        
         <p>
            <?=get_the_date(  ) ;?> | 
            <a href="<?= get_the_author_url( get_the_author_meta( 'ID' ) ) ;?>" target="_blank" rel="noopener noreferrer">
            <?php the_author(  ) ;?></a>

            <?= the_category( ', ' ) ;?>

         </p>
         <p>
         <?= the_content( 
             
          ) ;?>
         </p>
         
         <p>
         <?= comments_number(  ) ;?> |
   
         </p>
       
         </article>
      <?php endwhile; ?>
   <?php endif; ?>
   <div class="paginacao">
      <div class="pagina_anterior"><?php previous_post_link() ;?></div>
      <div class="proxima_pagina"><?php next_post_link( ) ;?></div>
   </div>
   </section>
   
</main>

<?php get_footer(  ); ?>


