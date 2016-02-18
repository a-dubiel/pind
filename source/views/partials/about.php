<?php if (get_field('about_content') && get_field('about_image')): ?>
<?php $about_image = get_field('about_image'); ?>
<?php $about_content = get_field('about_content'); ?>

<section class="c-section">
  <div class="o-wrapper">
    <article class="c-about u-clearfix">
      <img src="<?php echo $about_image['sizes']['post-thumb'] ?>" class="c-about__photo" alt="<?php bloginfo('name') ?>">
      <div class="c-about__content">
        <h1 class="c-heading c-heading--h2"><?php bloginfo('name') ?></h1>
        <div class="c-about__text">
          <?php echo $about_content; ?>
        </div>
        <a class="c-button" href="<?php echo home_url('/about') ?>">Learn More</a>
      </div>
    </article>
  </div>
</section>
<?php endif; ?>
