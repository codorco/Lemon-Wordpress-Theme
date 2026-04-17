<!doctype html>
<html lang=pt-br>
    <head>
    <meta charset=UTF-8>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <meta content="ie=edge" http-equiv=X-UA-Compatible>
    <?php wp_head();?>
    <title>Lemon - UX/UI Designer</title>
</head>
<body>
<div class=jl-trigger-topbar></div>
<div class=border-top-left></div>
<div class=border-bottom-right></div>
<div class=jl-preloader>
    <div class=jl-preloader-inner><img src="<?php bloginfo('template_url'); ?>/images/lemon-loader.svg" class=jl-mar-bottom-15>
        <p class="jl-text-light jl-mar-top-15">Aguarde um pouquinho … Estou preparando a limonada</div>
</div>



<?php if (is_singular('project')) : ?>
    <?php get_template_part('parts/gallery', 'modal'); ?>
<?php endif; ?>
<?php if ( is_front_page() || is_page_template( 'pages/home.php' ) ) : ?>
    <?php get_template_part('parts/orcamento', 'modal'); ?>
<?php endif; ?>


<header class="jl-topbar">
    <div class="jl-logo jl-logo-big">
        <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Logo João Lemon UX/UI Designer">
    </div>
<nav class="jl-menu">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'desktop-menu',
            'container'      => false,
            'fallback_cb'    => false,
            'items_wrap'     => '%3$s', 
            'echo'           => false   
        )
    );
    
    $menu = wp_nav_menu( array( 'theme_location' => 'desktop-menu', 'container' => false, 'echo' => false, 'items_wrap' => '%3$s' ) );
    echo strip_tags($menu, '<a>'); 
    ?>
</nav>
</header>

<button class="jl-toggle-menu jl-btn-menu-mob">
    <ion-icon name="menu"></ion-icon>
</button>

<nav class="jl-menu-is-closed jl-menu-mob">
    <?php
    $menu_mob = wp_nav_menu( array( 
        'theme_location' => 'mobile-menu', 
        'container'      => false, 
        'echo'           => false, 
        'items_wrap'     => '%3$s' 
    ) );
    
    echo strip_tags($menu_mob, '<a>'); 
    ?>
</nav>
<div class="jl-text-light jl-bg-black jl-contact-info">
    <div class="jl-contact-info-inner">
        <h2 class="jl-title jl-text-green">Contato</h2>
        <p><?php echo get_option('copacf_options_email'); ?></p>
        <p><?php echo get_option('copacf_options_telefone'); ?></p>
        <div class="jl-social-links">
            <a href="<?php echo get_option('copacf_options_instagram'); ?>" class="jl-social">
                <img src="<?php bloginfo('template_url'); ?>/images/icon-instagram.svg" alt="Instagram">
            </a>
            <a href="<?php echo get_option('copacf_options_x'); ?>" class="jl-social">
                <img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.svg" alt="Twitter">
            </a>
            <a href="<?php echo get_option('copacf_options_dribbble'); ?>" class="jl-social">
                <img src="<?php bloginfo('template_url'); ?>/images/icon-dribbble.svg" alt="Dribbble">
            </a>
        </div>
    </div>
    <div class="jl-corner"></div>
</div>
<button class=jl-btn-contact></button>
<div class=jl-page-wrapper>

