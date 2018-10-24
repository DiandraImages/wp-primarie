<?php /* Template Name: Prima Pagina */ ?>

<?php get_header(); ?>

<section class="hero-carousel">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

      <?php if( have_rows('slideshow') ): ?>
      <div class="carousel-inner">
        <?php while( have_rows('slideshow') ): the_row(); ?>
          <?php $image = get_sub_field('background'); ?>
          <div class="carousel-item align-content-center  <?php echo get_sub_field('activ');?>" style="background-image: url( <?php echo $image['url']; ?> );height:650px;">
            <div class="container">
              <h3 class="hero-subtile"><?php echo get_sub_field('small_title');?></h3>
              <h1 class="hero-title"><?php echo get_sub_field('titlu_principal');?></h1>
              <p class="hero-desc"><?php echo get_sub_field('descriere');?></p>
              <?php if( get_sub_field('text_buton') ): ?>
                <a href="<?php echo get_sub_field('link_buton');?>" class="btn btn-lg btn-border-green br-0"><?php echo get_sub_field('text_buton');?></a>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>


<?php get_footer(); ?>
