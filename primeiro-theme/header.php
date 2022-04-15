<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?= wp_head();?>
</head>
<body <?= body_class(  ) ;?>>
<header>
    <h1>primeiro tema</h1>

    <?php if(has_nav_menu( 'primary' ))
    {
        wp_nav_menu( [
            'theme_location'  => 'primary',
            'container'       => 'nav',
            'container_class' => 'main_menu',
            'fallback_cb'     => false
        ] );
    };?>
</header>