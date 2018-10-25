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

<section class="website-benefits-and-mayor-info">
  <div class="container">
    <div class="website-benefits-container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <div class="website-benefits-content-holder d-flex">
            <i class="fas fa-file-invoice"></i>
            <div class="d-flex align-content-center flex-wrap">
              <h5>Plata Amenzi</h5>
              <p>Plătește ameda electronic</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <div class="website-benefits-content-holder d-flex">
            <i class="fas fa-file-invoice-dollar"></i>
            <div class="d-flex align-content-center flex-wrap">
              <h5>Plată taxe și impozite</h5>
              <p>Plata impozitelor online</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <div class="website-benefits-content-holder d-flex">
            <i class="fas fa-file-invoice-dollar"></i>
            <div class="d-flex align-content-center flex-wrap">
              <h5>Programează audiență</h5>
              <p>Programează-ți audiența</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <div class="website-benefits-content-holder d-flex">
            <i class="fas fa-file-invoice-dollar"></i>
            <div class="d-flex align-content-center flex-wrap">
              <h5>Formulare TIP</h5>
              <p>Formuare în format editabil</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mayor-info">
      <div class="row">
        <div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <img src="<?php echo get_template_directory_uri();?>/theme/img/mayor.jpg" alt="">
        </div>
        <div class="col-12 col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
          <div class="mayor-info">
            <h1>Traian Ciurdaș</h1>
            <span>Primarul comunei Bârsău</span>
            <p>În calitate de primar al comunei Bârsău de Sus, adresez un sincer bun venit tuturor celor ce aţi accesat acest site, în numele comunităţii acestei comune, administraţiei publice locale şi al meu personal.</p>
            <p>Ne dorim ca pe această cale să venim în sprijinul cetăţenilor, oferindu-le dreptul la informaţia produsă şi gestionată de administraţia publică locală şi în acelaşi timp să fim o fereastră deschisă permanent tuturor celor ce vor să ne cunoască comuna şi pe noi.</p>
            <a href="">Citește mai mult</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
