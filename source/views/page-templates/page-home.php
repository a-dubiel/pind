<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<!--  main START-->
<main role="main" class="c-main">
  <?php get_template_part("partials/slider") ?>
  <?php get_template_part("partials/box") ?>
  <?php get_template_part("partials/about") ?>
  <?php get_template_part("partials/latest_posts") ?>
  <?php get_template_part("partials/video") ?>
</main>
<!--  main END -->
<?php get_footer(); ?>
