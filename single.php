<?php get_header(); ?>
<?php get_template_part('parts/section', 'portfolio-hero'); ?> <!-- Banner do projeto -->
<?php get_template_part('parts/section', 'portfolio-body'); ?> <!-- Abre o Main -->

<?php if (get_field('pre_gallery')) : ?> 
    <?php get_template_part('parts/section', 'pre-gallery'); ?>
<?php endif; ?>

<?php if (get_field('galeria')) : ?>
    <?php get_template_part('parts/section', 'gallery'); ?>
<?php endif; ?>                                                <!-- Fecha o Main -->

  

<?php get_template_part('parts/footer', 'single'); ?>