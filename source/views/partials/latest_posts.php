<section class="c-section c-section--latest-posts">
  <div class="o-wrapper">
    <h2 class="c-heading c-heading--h2">Latest News + Events</h2>
    <div class="c-post-box__row">
    <?php $the_query = new WP_Query(array( 'posts_per_page' => 3, 'ignore_sticky_posts' => 1 )); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

      <div class="c-post-box">
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
	          <?php $short_excerpt = wp_trim_words($trim_excerpt, $num_words = 12, $more = '… '); ?>
            <p class="c-post-box__excerpt"><?php echo $short_excerpt; ?></p>
            <?php endif; ?>
            <?php if (has_category()): ?>
            <p class="c-post-box__meta"><?php _e('Posted in: ', 'html5blank'); the_category(', '); ?></p>
            <?php endif; ?>
          </div>
        </article>
      </div>

    <?php endwhile; wp_reset_postdata(); ?>



    </div>
  </div>
</section>
