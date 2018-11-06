<?php
/*
The Single Post
===============
*/
?>

<div class="row">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="col-4">
      <article class="white-box consiliul-local" role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <main>
          <?php $imagine = get_field( 'imagine' ); ?>
          <?php if ( $imagine ) { ?>
          	<img class="consiliu-local imagine" height="250px" src="<?php echo $imagine['url']; ?>" alt="<?php echo $imagine['alt']; ?>" />
          <?php } ?>
          <div class="d-flex flex-column justify-content-center text-center">
            <span class="consilier-local nume"><?php the_field( 'nume_si_prenume' ); ?></span>
            <span class="consilier-local functie"><?php the_field( 'functie' ); ?></span>
          </div>

          <button type="button" class="btn btn-sm btn-green w-100" data-toggle="modal" data-target="#info_membru_<?php the_ID()?>">
            Vezi detalii
          </button>

          <div class="modal fade" id="info_membru_<?php the_ID()?>" tabindex="-1" role="dialog" aria-labelledby="info_membru_<?php the_ID()?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="container">
                    <div class="white-box info-box">
                      <div class="row">
                        <div class="col-3  border-bottom">
                          <?php $imagine = get_field( 'imagine' ); ?>
                          <?php if ( $imagine ) { ?>
                            <img class="consiliu-local imagine" height="250px" src="<?php echo $imagine['url']; ?>" alt="<?php echo $imagine['alt']; ?>" />
                          <?php } ?>
                        </div>
                        <div class="col-9  border-bottom">
                          <h1 id="lastNameBold"><?php the_field( 'nume_si_prenume' ); ?></h1>
                          <p class="consilier-local functie"><?php the_field( 'functie' ); ?></p>
                          <div class="row">
                            <div class="col-6">
                              <p><i class="far fa-envelope"></i> <strong>Număr de telefon:</strong> <?php the_field( 'numar_de_telefon' ); ?></p>
                              <p><i class="fas fa-phone-square"></i> <strong>Adresă de e-mail:</strong> <?php the_field( 'adresa_de_email' ); ?></p>
                            </div>
                            <div class="col-6">
                              <?php $cv = get_field( 'cv' ); ?>
                              <?php if ( $cv ) { ?>
                              	<a class="btn btn-green" href="<?php echo $cv['url']; ?>">Descarcă CV-ul</a>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-3 border-bottom">
                              <i class="far fa-user-circle"></i> <strong>Locul și data nașterii:</strong>
                            </div>
                            <div class="col-9 border-bottom">
                              <p><?php the_field( 'locul_si_data_nasterii' ); ?></p>
                            </div>
                            <div class="col-3 border-bottom">
                              <i class="far fa-flag"></i> <strong>Naționalitate:</strong>
                            </div>
                            <div class="col-9 border-bottom">
                              <p><?php the_field( 'nationalitate' ); ?></p>
                            </div>
                            <div class="col-3 border-bottom">
                              <i class="fas fa-ring"></i> <strong>Stare civilă:</strong>
                            </div>
                            <div class="col-9 border-bottom">
                              <p><?php the_field( 'stare_civila' ); ?></p>
                            </div>
                            <div class="col-3 border-bottom">
                              <i class="fas fa-graduation-cap"></i> <strong>Studii:</strong>
                            </div>
                            <div class="col-9 border-bottom">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis viverra mauris. Aliquam sit amet ullamcorper massa. Integer nec purus ultrices, porta lorem at, tristique nunc.</p>
                            </div>
                            <div class="col-3 border-bottom">
                              <i class="fas fa-users-cog"></i> <strong>Experienta:</strong>
                            </div>
                            <div class="col-9 border-bottom">
                              <p><?php the_field( 'experienta' ); ?></p>
                            </div>
                            <div class="col-3 border-bottom">
                              <i class="fas fa-info-circle"></i> <strong>Descriere:</strong>
                            </div>
                            <div class="col-9 border-bottom">
                              <p><?php the_field( 'desciere' ); ?></p>
                            </div>
                            <?php if( have_rows('declaratii_de_avere') ): ?>
                            <div class="col-3">
                              <i class="fas fa-euro-sign"></i> <strong>Declarații de avere:</strong>
                            </div>
                            <div class="col-9">
                                <?php while( have_rows('declaratii_de_avere') ): the_row(); ?>
                                  <?php $file = get_sub_field('fisier_declaratie_avere');?>
                                    <div class="d-block mb-2">
                                      <a href="<?php echo $file['url'];?>"><i class="fas fa-file-pdf"></i> <?php echo $file['filename'];?></a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-green" data-dismiss="modal">Inchide</button>
                </div>
              </div>
            </div>
          </div>
        </main>
      </article>
  </div>


<?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>
</div>
