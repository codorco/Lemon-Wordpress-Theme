<?php
/* Template Name: Sobre */
get_header();
?>
<section class="jl-section-offset-top jl-section-sobre">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-4 jl-avatar-sobre order-2 order-lg-1">
                <div class="jl-box-img">
                    <img
                        src="<?php echo esc_url( jl_get_field('foto-sobre') ); ?>"
                        alt="Joao Lemon Designer"
                        class="jl-img-responsive"
                        title="Joao Lemon Designer"
                    >
                </div>
            </div>

            <div class="col-sm-12 col-lg-8 order-1 order-lg-2">
                <div class="jl-mar-bottom-30 jl-titulo-sobre">
                    <h1 class="jl-text-light jl-title jl-title-xlarge">
                        <?php jl_the_field('nome-sobre'); ?>
                        <span class="jl-text-green"><?php jl_the_field('sobrenome-sobre'); ?></span>
                    </h1>
                </div>

                <div class="jl-text-light jl-info-sobre">
                    <h4 class="jl-text-green jl-mar-bottom-15 jl-subtitle">
                        <?php jl_the_field('subtitulo-1-sobre'); ?>
                    </h4>

                    <?php echo jl_get_field('texto-1-sobre'); ?>

                    <div class="jl-contact-info-inner jl-mar-top-30">
                        <div class="jl-mar-bottom-30 jl-social-links-circle">
                            <a
                                href="<?php echo esc_url( get_option('copacf_options_instagram') ); ?>"
                                class="jl-social jl-bg-green jl-mar-right-30 jl-text-black"
                            >
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>

                            <a
                                href="<?php echo esc_url( get_option('copacf_options_x') ); ?>"
                                class="jl-social jl-bg-green jl-mar-right-30 jl-text-black"
                            >
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>

                            <a
                                href="<?php echo esc_url( get_option('copacf_options_dribbble') ); ?>"
                                class="jl-social jl-bg-green jl-mar-right-30 jl-text-black"
                            >
                                <ion-icon name="logo-dribbble"></ion-icon>
                            </a>
                        </div>

                        <p><?php echo esc_html( get_option('copacf_options_email') ); ?></p>
                        <br>
                        <p><?php echo esc_html( get_option('copacf_options_telefone') ); ?></p>
                    </div>
                </div>

                <div class="jl-premios-sobre">
                    <h4 class="jl-text-green jl-mar-bottom-15 jl-subtitle">
                        <?php jl_the_field('subtitulo-2-sobre'); ?>
                    </h4>
                    <?php echo jl_get_field('texto-2-sobre'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/footer', 'sobre'); ?>