<?php
/*
The Single Post
===============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="white-box hotarari-emise" role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header>
      <h5>
        <?php the_title()?>
      </h5>
    </header>
    <div class="row">
      <div class="col-2">
        <div class="d-flex align-content-end flex-wrap">
          <p class="mb-0">Data:</p>
          <strong><?php the_field( 'data' ); ?></strong>
        </div>
      </div>
      <div class="col-7">
        <?php the_content(); ?>
      </div>
      <div class="col-3">
        <?php $atasament = get_field( 'atasament' ); ?>
          <?php if ( $atasament ) { ?>
            <a class="btn btn-green"
               <?php if($atasament['subtype'] === "pdf") { echo 'target="_blank"';} ?>
               href="<?php echo $atasament['url']; ?>">
               <?php if($atasament['subtype'] === "pdf") {
                 echo '<i class="fas fa-file-pdf"></i>';
               } else {
                 echo '<i class="fas fa-file"></i>';
               } ?>
               Descarcă
            </a>
          <?php } ?>
      </div>
    </div>

  </article>
<?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>
