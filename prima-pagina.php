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

<section class="benefits-and-mayor-info">
  <div class="container">
       <div class="tool-nav">
         <div class="row">
           <?php if( have_rows('beneficii') ): ?>
             <?php while( have_rows('beneficii') ): the_row(); ?>
               <?php $imagine_beneficiu = get_sub_field('imagine'); ?>
               <a class="col-12 col-sm-6 col-lg-3 col-xl-3 tool-nav-link" href="<?php echo get_sub_field('link_beneficiu');?>">
                   <img class="img-fluid tool-nav-img" src="<?php echo $imagine_beneficiu['url']; ?>">
                   <h5 class="tool-nav-title"><?php echo get_sub_field('titlu_beneficiu');?></h5>
                   <p class="tool-nav-desc"><?php echo get_sub_field('descriere_beneficiu');?></p>
               </a>
             <?php endwhile; ?>
           <?php endif; ?>
         </div>
       </div>
       <?php if( have_rows('despre_primar') ): ?>
         <?php while( have_rows('despre_primar') ): the_row(); ?>
           <?php $imagine_primar = get_sub_field('imagine_primar'); ?>
           <div class="about-major">
               <div class="row">
                   <div class="col-12 col-lg-5 col-xl-5">
                       <img src="<?php echo $imagine_primar['url'];?>" class="img-fluid">
                   </div>
                   <div class="col-12 col-lg-7 col-xl-7">
                       <div class="about-inner">
                           <h4 class="about-major-title"><?php echo get_sub_field('nume_primar'); ?><span><?php echo get_sub_field('subtitlu_primar') ?></span></h4>
                           <?php echo get_sub_field('descriere_primar'); ?>
                           <a href="<?php echo get_sub_field('link_primar') ?>" class="btn btn-success">Citește mai mult</a>
                       </div>
                   </div>
               </div>
           </div>
         <?php endwhile; ?>
       <?php endif; ?>
   </div>
</section>

<section class="about-town">
   <div class="container">
       <div class="row">
           <div class="col-12 col-lg-5 col-xl-5">
               <h3 class="about-town-title">Comuna <strong>Bârsău</strong></h3>
               <p class="about-town-subtitle">Despre Comuna Noastră</p>
           </div>
           <div class="col-12 col-lg-7 col-xl-7">
               <p class="about-town-description">Din punct de vedere geografic comuna Bârsău se află aşezată în partea de sud - est a judeţului Satu Mare, învecinându-se cu judeţul Maramureş, prin localităţile Fărcaşa şi Asuaju de Sus.</p>
               <p class="about-town-description">Având în vedere coordonatele geografice, cele două sate: Bârsău de Sus şi Bârsău de Jos se află aşezate pe paralela de 47 de grade şi 60 de minute latitudine nordică, respectiv pe meridianul de 23 de grade, 22 minute, longitudine estică- Bârsău de Sus, şi 23 de grade şi 27 minute, longitudine estică- Bârsău de Jos.</p>
               <p class="about-town-description">În cele ce urmează sunt reproduse elemente din monografia realizată recent de Prof. Augustin Jurje. „Situată sub poalele Munţilor Codrului, la marginea sud-estică judeţului Satu Mare, în interiorul unui semicerc de culmi deschis către răsărit, comuna Bârsău este alcătuită din două sate: Bârsău de Jos şi Bârsău de Sus. Privind configuraţia localităţilor dinspre Codru (Apus), de pe Dealul Bârsăului, cuprinzi cu vederea între culmi un relief neregulat, fragmentat de acţiuni geologice anterioare, relief brăzdat de o depresiune mai mare aşezată pe lângă Valea Bârsăului. </p>
           </div>
       </div>
   </div>
</section>

<section class="content-row last-posts">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <h1 class="article-main-title">Ultimele Știri</h1>
              <p class="article-sub-title">Lorem ipsum dolor asit amet</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-lg-6">
              <div class="featured-article">
                  <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/theme/img/barasau-biserica.png" alt="" class="thumb">
                  </a>
                  <div class="block-title">
                      <p class="by-author"><small>June 6,2018</small> / <small>Noutati</small></p>
                      <h2>Lorem ipsum dolor asit amet</h2>
                      <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-12 col-lg-6">
              <ul class="media-list main-list">
                  <li class="media">
                      <a class="" href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/theme/img/barasau-biserica.png" alt="...">
                      </a>
                      <div class="media-body">
                          <p class="by-author"><small>June 6,2018</small> / <small>Noutati</small></p>
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Citeste mai mult</a></p>
                      </div>
                  </li>
                  <li class="media">
                      <a class="pull-left" href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/theme/img/barasau-biserica.png" alt="...">
                      </a>
                      <div class="media-body">
                          <p class="by-author"><small>June 6,2018</small> / <small>Noutati</small></p>
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Citeste mai mult</a></p>
                      </div>
                  </li>
                  <li class="media">
                      <a class="pull-left" href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/theme/img/barasau-biserica.png" alt="...">
                      </a>
                      <div class="media-body">
                          <p class="by-author"><small>June 6,2018</small> / <small>Noutati</small></p>
                          <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                          <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Citeste mai mult</a></p>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</section>



<?php get_footer(); ?>
