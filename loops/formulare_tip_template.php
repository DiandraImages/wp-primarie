<?php
/*
The Single Post
===============
*/
?>

<div class="row">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="col-6">
      <article class="white-box formulare-tip" role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
          <h6><?php the_title()?></h6>
        </header>
        <main>
          <?php $fisier_pdf = get_field( 'fisier_pdf' ); ?>
          <?php if ( $fisier_pdf ) { ?>
            <a class="btn btn-sm btn-green" href="<?php echo $fisier_pdf['url']; ?>"><i class="fas fa-file-pdf"></i> Descarcă PDF</a>
          <?php } ?>
          <?php $fisier_doc = get_field( 'fisier_doc' ); ?>
          <?php if ( $fisier_doc ) { ?>
            <a class="btn btn-sm  btn-green" href="<?php echo $fisier_doc['url']; ?>"><i class="fas fa-file-word"></i> Descarcă Word</a>
          <?php } ?>
        </main>
      </article>
  </div>


<?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>
</div>
