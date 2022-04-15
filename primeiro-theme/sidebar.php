<sidebar>

<?php 

if(is_active_sidebar( 'awp_sidebar' ))
    {
        get_search_form();
        dynamic_sidebar( 'awp_sidebar' );
        
    };?>
</sidebar>