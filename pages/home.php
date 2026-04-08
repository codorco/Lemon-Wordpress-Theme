<?php
  /* template name: Home */
?>
<?php get_header(); ?>

<section class="jl-full-height jl-first-section jl-home-presentation" id=jl-home-presentation>
        <div class=container-fluid>
            <div class=row>
                <div class="col-sm-12 col-lg-4 col-md-10 col-xl-3 jl-display-text offset-lg-1 offset-md-1 offset-xl-2">
                    <h1 class="jl-title jl-text-green jl-title-xlarge"><?php the_field('hero_title'); ?></h1>
                    <p class=jl-text-light><?php the_field('hero_text'); ?></p>
                    <button class="jl-btn jl-btn-green jl-btn-large jl-mar-top-15 jl-toggle-modal">solicite um orçamento</button></div>
            </div>
            <div class=jl-scroll-down>
                <div class=jl-arrow-down><img src="<?php bloginfo('template_url'); ?>/images/arrow-down.svg" alt="Role a Página"></div>
            </div>
    </section>
    <section class=jl-full-height id=jl-home-portfolio>
        <div class="container-fluid jl-no-padding">
            <div class=row>
                <div class="col-sm-12 d-block d-lg-none d-sm-block jl-mar-top-30 jl-pad-top-30">
                    <h2 class="jl-title jl-title-large jl-text-center jl-text-green">Projetos Selecionados</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-sm-12 col-lg-2 order-2 order-lg-1 order-sm-2">
                    <div class=jl-portfolio-navigator>
                        <div class="d-lg-block d-none d-sm-none jl-navigator-counter"><span class=jl-text-green>01</span></div>
                        <nav class="d-lg-block d-none d-sm-none jl-item-navigator"><a href=# class=jl-item-active data-nav=1></a> <a href=# data-nav=2></a> <a href=# data-nav=3></a> <a href=# data-nav=4></a> <a href=# data-nav=5></a></nav>
                        <div class="jl-items-next-prev jl-no-radius-left">
                            <div class=jl-item-prev>
                                <ion-icon name=arrow-dropleft></ion-icon>
                            </div>
                            <div class=jl-items-counter><span class=jl-current-slide>01</span> / <span class=jl-total-slide>05</span></div>
                            <div class=jl-item-next>
                                <ion-icon name=arrow-dropright></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 order-1 order-sm-1 col-lg-10 order-lg-2">
                    <div class="jl-full-height jl-slider-container">
                        <ul class="jl-full-height jl-slider-list">
                            <li class="jl-portfolio-item jl-slide-active" data-slide=1>
                                <div class=row>
                                    <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-md-1 order-sm-2">
                                        <div class="jl-text-light jl-portfolio-item-info jl-fade-from-left">
                                            <h1 class="jl-title jl-mar-bottom-15 jl-title-large">Startup Rocketz Website</h1>
                                            <p class=jl-mar-bottom-30>UX, UI e WordPress para aceleradora de startups.</p><a href=# class="jl-btn jl-btn-green jl-btn-large">ver projeto</a></div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 order-1 order-md-2 order-sm-1">
                                        <div class=jl-portfolio-item-thumb>
                                            <div class="d-lg-block d-none d-sm-none jl-portfolio-item-box jl-scale-right"></div><img src="<?php bloginfo('template_url'); ?>/images/thumb-1.jpg" alt="Startup Rocketz" title="Startup Rocketz" class=jl-scale-up> <a href=# class="jl-btn jl-btn-dark jl-btn-medium">visitar site<ion-icon name=share-alt></ion-icon></a></div>
                                    </div>
                                </div>
                                <li class=jl-portfolio-item data-slide=2>
                                    <div class=row>
                                        <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-md-1 order-sm-2">
                                            <div class="jl-text-light jl-portfolio-item-info">
                                                <h1 class="jl-title jl-mar-bottom-15 jl-title-large">Manage It! Aplicativo Mobile</h1>
                                                <p class=jl-mar-bottom-30>UX, UI e Protipação para aplicativo mobile.</p><a href=/portfolio/manage-it/ class="jl-btn jl-btn-green jl-btn-large">ver projeto</a></div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 order-1 order-md-2 order-sm-1">
                                            <div class=jl-portfolio-item-thumb>
                                                <div class="d-lg-block d-none d-sm-none jl-portfolio-item-box"></div><img src="<?php bloginfo('template_url'); ?>/images/thumb-2.jpg" alt="Manage It!" title="Manage It!"> <a href=# class="jl-btn jl-btn-dark jl-btn-medium">visitar site<ion-icon name=share-alt></ion-icon></a></div>
                                        </div>
                                    </div>
                                    <li class=jl-portfolio-item data-slide=3>
                                        <div class=row>
                                            <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-md-1 order-sm-2">
                                                <div class="jl-text-light jl-portfolio-item-info">
                                                    <h1 class="jl-title jl-mar-bottom-15 jl-title-large">Vinyassa! Aplicativo Mobile</h1>
                                                    <p class=jl-mar-bottom-30>UX, UI e Protipação para aplicativo mobile.</p><a href=# class="jl-btn jl-btn-green jl-btn-large">ver projeto</a></div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 order-1 order-md-2 order-sm-1">
                                                <div class=jl-portfolio-item-thumb>
                                                    <div class="d-lg-block d-none d-sm-none jl-portfolio-item-box"></div><img src="<?php bloginfo('template_url'); ?>/images/thumb-3.jpg" alt="Vinyassa App" title="Vinyassa App"> <a href=# class="jl-btn jl-btn-dark jl-btn-medium">visitar site<ion-icon name=share-alt></ion-icon></a></div>
                                            </div>
                                        </div>
                                        <li class=jl-portfolio-item data-slide=4>
                                            <div class=row>
                                                <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-md-1 order-sm-2">
                                                    <div class="jl-text-light jl-portfolio-item-info">
                                                        <h1 class="jl-title jl-mar-bottom-15 jl-title-large">Conteúdo é Rei! Website para agência.</h1>
                                                        <p class=jl-mar-bottom-30>Website para agência de conteúdo digital.</p><a href=# class="jl-btn jl-btn-green jl-btn-large">ver projeto</a></div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 order-1 order-md-2 order-sm-1">
                                                    <div class=jl-portfolio-item-thumb>
                                                        <div class="d-lg-block d-none d-sm-none jl-portfolio-item-box"></div><img src="<?php bloginfo('template_url'); ?>/images/thumb-4.jpg" alt="Conteúdo é Rei!" title="Conteúdo é Rei!"> <a href=# class="jl-btn jl-btn-dark jl-btn-medium">visitar site<ion-icon name=share-alt></ion-icon></a></div>
                                                </div>
                                            </div>
                                            <li class=jl-portfolio-item data-slide=5>
                                                <div class=row>
                                                    <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-md-1 order-sm-2">
                                                        <div class="jl-text-light jl-portfolio-item-info">
                                                            <h1 class="jl-title jl-mar-bottom-15 jl-title-large">Controle Total. Web App</h1>
                                                            <p class=jl-mar-bottom-30>UX, UI e Protipação para aplicativo web.</p><a href=# class="jl-btn jl-btn-green jl-btn-large">ver projeto</a></div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 order-1 order-md-2 order-sm-1">
                                                        <div class=jl-portfolio-item-thumb>
                                                            <div class="d-lg-block d-none d-sm-none jl-portfolio-item-box"></div><img src="<?php bloginfo('template_url'); ?>/images/thumb-5.jpg" alt="Controle Total" title="Controle Total"> <a href=# class="jl-btn jl-btn-dark jl-btn-medium">visitar site<ion-icon name=share-alt></ion-icon></a></div>
                                                    </div>
                                                </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_template_part('parts/footer', 'home'); ?>
