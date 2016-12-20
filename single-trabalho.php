<?php get_header() ?>
  <div class="col-md-10">
    <div class="row">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <div class="col-md-9">
            <?php
            $images = get_field('galeria');
            if( $images ):
              foreach( $images as $image ):
              ?>
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
              <?php
              endforeach;
            endif;
            ?>
          </div>
          <div class="col-md-3">
            <h1 class="titulo-trabalhos"><?php the_title() ?></h1>
            <div class="descricao-trabalho"> <?php the_content(); ?> </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
<?php get_footer() ?>
