<?php
if (post_password_required(  )) {
    return;
}

if (have_comments()) {
     foreach($comments as $comment){ ?> 
        <div class="comentario">
            <div class="comentario_foto"><?= get_avatar( $comment, 60 );?></div>
            <div class="comentaro_area">
                <strong><?= comment_author( );?></strong> - <?= comment_date( );?><br/><br/>
                <?= comment_text( );?>
            </div>
            
        </div>
        
        <?php
     };
     the_comments_pagination(  );
} 
comment_form( [

] );
?>
