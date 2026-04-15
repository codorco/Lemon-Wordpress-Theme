<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="container-fluid jl-hero">
      <div class=container>
        <div class="row align-items-center jl-hero-inner jl-text-light">
          <div class="col-sm-12 col-lg-6">
            <h1 class="jl-title jl-title-large jl-mar-bottom-15"><?php the_title(); ?></h1>
            <p class="jl-mar-bottom-30"><?php the_excerpt(); ?></p>
          </div>
          <div class="col-sm-12 col-lg-6">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/hero-manage-it.jpg' ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="jl-img-responsive" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="300">
          </div>
        </div>
      </div>
    </section>

    <main>
      <section class=jl-post-content>
        <div class=container>
          <?php the_content(); ?>
        </div>

<?php endwhile; else :
    echo '<p>Desculpe, nenhum post encontrado.</p>'; ?>
<?php endif; ?>

<?php get_footer(); ?>