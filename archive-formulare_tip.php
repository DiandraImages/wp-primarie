<?php get_header(); ?>

<main class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/formulare_tip_template', get_post_format()); ?>
      </div><!-- /#content -->
    </div>


  </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
