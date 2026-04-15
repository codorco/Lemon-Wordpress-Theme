<main class=jl-post>
      <div class=container>
        <div class=row>
          <div class=col-sm-12>
            <section class="jl-post-section">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </section>
          </div>
        </div>
      </div>