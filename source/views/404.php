<?php get_header(); ?>
  <!--  main START-->
  <main role="main" class="c-main">

        <div class="c-slider__content">
          <div class="c-slider__image" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/not-found.jpg)"></div>
          <div class="c-slider__text">
            <h1 class="c-slider__title">Ooops! Nothing in here</h1>
            <p class="c-slider__caption">Bad news. This page does not exist.</p>
            <a href="<?php echo home_url() ?>" class="c-button c-button--white">Go to homepage</a>
          </div>
        </div>


  </main>
  <!--  main END -->
  <?php get_footer(); ?>
