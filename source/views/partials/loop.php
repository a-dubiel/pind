
<?php if (have_posts()): ?>
  <div class="c-post-box__row">
  <?php while (have_posts()) : the_post(); ?>

  <div class="c-post-box c-post-box--blog">
    <article <?php post_class('c-post-box__article'); ?>>
      <?php $thumb_url = get_thumbnail_url(get_the_ID(), 'post-thumb'); ?>
      <a class="c-post-box__thumbnail" title="<?php the_title_attribute()?>" href="<?php the_permalink() ?>" style="background-image: url(<?php echo $thumb_url ?>)">
        <?php the_title_attribute() ?>
      </a>
      <div class="c-post-box__content">
        <?php $trim_title = get_the_title(); ?>
        <?php $short_title = wp_trim_words($trim_title, $num_words = 4, $more = '… '); ?>
        <h3 class="c-post-box__title"><a class="c-post-box__link" href="<?php the_permalink() ?>" title="<?php the_title_attribute()?>"><?php echo $short_title; ?></a></h3>
        <span class="c-post-box__date">
          <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
            <?php the_date(); ?> <?php the_time(); ?>
          </time>
        </span>
        <?php if (!empty_content(get_the_content())): ?>
        <?php $trim_excerpt = get_the_excerpt(); ?>
        <?php $short_excerpt = wp_trim_words($trim_excerpt, $num_words = 20, $more = '… '); ?>
        <p class="c-post-box__excerpt"><?php echo $short_excerpt; ?></p>
        <?php endif; ?>
        <?php if (get_post_type(get_the_ID()) == "labs"): ?>
          <?php if (get_field('profile_type') == "Laboratory"): ?>
          <?php $trim_excerpt =  get_field('lab_short_information'); ?>
          <?php $short_excerpt = wp_trim_words($trim_excerpt, $num_words = 20, $more = '… '); ?>
          <p class="c-post-box__excerpt"><?php echo $short_excerpt; ?></p>
          <?php endif; ?>
        <?php endif;?>
        <?php if (has_category()): ?>
        <p class="c-post-box__meta"><?php _e('Posted in: ', 'html5blank'); the_category(', '); ?></p>
        <?php endif; ?>
      </div>
    </article>
  </div>

<?php endwhile; ?>
</div>
<?php else: ?>

	<!-- article -->
	<article>
		<p><?php _e('Sorry, nothing to display.', 'html5blank'); ?></p>
	</article>
	<!-- /article -->

<?php endif; ?>
