<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9">

          <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

            <div class="page-header">
              <h1><?php the_title();?></h1>
            </div>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          <?php endwhile; else: ?>

            <div class="page-header">
              <h1>Oeps!</h1>
            </div>
            <div class="entry-content">
            <p>De pagina die je zocht is niet gevonden</p>
            </div>


          <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

    </div>

<?php get_footer(); ?>      