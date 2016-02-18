<?php if (get_field('video_section') && get_field('video_url')): ?>
<section class="c-section">
  <?php $hero = get_field('video_background'); ?>
  <?php $url = get_field('video_url'); ?>
  <?php $slogan = get_field('video_slogan'); ?>

  <div class="c-video" style="background-image: url(<?php echo $hero['sizes']['hero']; ?>)">
      <div class="c-video__content">
      <h5 class="c-video__title"><?php echo $slogan; ?></h5>
      <a href="<?php echo $url; ?>" class="c-button c-button--white js-video">&#9658; Watch now</a>
    </div>
  </div>
</section>
<?php endif; ?>
