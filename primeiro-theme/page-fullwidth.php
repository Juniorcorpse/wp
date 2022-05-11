<?php
/**
 * Template Name: Page full w
 */
?>
<?php get_header( ) ; ?>
 

<main>
   <section class="single contaner fullwidth">
   
      <?php while( have_posts() ): ?>
         <?php the_post(); ?>
         <header><h2><?= the_title(  ) ;?></h2></header>
         <article>
            <p><?= the_content() ;?></p>
            
            

         
            <?php if( comments_open(  ) ){
                 ?>
                    <hr>
                <p> <?= comments_number(  ) ;?></p>
                <?php
                comments_template(  );
            } 
            ?>
       
         </article>
      <?php endwhile; ?>   
   
   </section>
  
</main>

<?php get_footer(  ); ?>


