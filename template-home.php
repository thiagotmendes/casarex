<?php /* template name: Home */ ?>
<?php get_header() ?>
  <div class="col-md-2">
    <div class="descricao" role="content">
      <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <?php the_content() ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query() ?>
    </div>
  </div>
  <div class="col-md-8">
    <div class="row">
      <?php
      $argTrabalhosHome = array(
        'post_type' => 'trabalho'
      );
      $trabalhoHome = new wp_query($argTrabalhosHome);
      if ($trabalhoHome->have_posts()) {
        while($trabalhoHome->have_posts()){ $trabalhoHome->the_post();
        ?>
        <div class="col-md-3">
          <?php if (has_post_thumbnail()): ?>
            <div class="img-noticia">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
        <?php
        }
      }
      ?>
    </div>
  </div>
<?php get_footer() ?>
