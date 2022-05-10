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
        <p><?= the_excerpt() ;?></p>
        
        <p>
        <?= comments_number(  ) ;?> |
        <a href="<?= the_permalink(  );?>">Leia mais</a>
        </p>
    </div>
</article>