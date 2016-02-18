<?php get_header(); ?>
<!--  main START-->
<main role="main" class="c-main">
  <?php get_template_part("partials/header") ?>
  <div class="o-wrapper">
    <div class="c-blog">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  		<article id="post-<?php the_ID(); ?>" <?php post_class('c-blog__post'); ?>>
        <time class="c-blog__date" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
          <?php the_date(); ?> <?php the_time(); ?>
        </time>
        <?php if (has_post_thumbnail()) : ?>
          <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large'); ?>
          <div class="c-blog__hero" style="background-image: url(<?php echo $thumb_url['0'] ?>)"></div>
        <?php endif; ?>

        <div class="c-content__main">
  			  <?php the_content(); ?>
        </div>

  			<p class="c-blog__meta"><?php _e('Posted in: ', 'html5blank'); the_category(', '); // Separated by commas ?></p>

  			<?php edit_post_link(); ?>
  		</article>

  	<?php endwhile; ?>

  	<?php else: ?>

  		<!-- article -->
  		<article>

  			<h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

  		</article>
  		<!-- /article -->

  	<?php endif; ?>
      <aside class="c-blog__sidebar">
        <?php get_template_part("partials/sidebar") ?>
      </aside>
    </div>
  </div>
</main>
<!--  main END -->
<?php get_footer(); ?>
