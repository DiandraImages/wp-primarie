<?php
/*
The Single Post
===============
*/
?>

<div class="row">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="col-4">
      <article class="white-box functionari-publici" role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <main>
          <?php $imagine_functionar = get_field( 'imagine_functionar' ); ?>
          <?php if ( $imagine_functionar ) { ?>
          	<img src="<?php echo $imagine_functionar['url']; ?>" height="250px" style="margin-bottom:15px;" alt="<?php echo $imagine_functionar['alt']; ?>" />
          <?php } ?>
          <div class="d-flex flex-column justify-content-center text-center">
            <span class="consilier-local nume"><?php the_title(); ?></span>
            <span class="consilier-local functie"><?php the_field( 'functie' ); ?></span>
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
