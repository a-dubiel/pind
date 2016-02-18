<?php get_header(); ?>
<!--  main START-->
<main role="main" class="c-main">
  <?php get_template_part("partials/header") ?>
  <div class="o-wrapper">
    <div class="c-blog">
      <section class="c-blog__posts">
        <?php get_template_part("partials/loop") ?>
        <?php get_template_part("partials/pagination") ?>
      </section>
      <aside class="c-blog__sidebar">
        <?php get_template_part("partials/sidebar") ?>
      </aside>
    </div>
  </div>
</main>
<!--  main END -->
<?php get_footer(); ?>
