<?php if (have_rows('slider_homepage')):?>
<section class="c-slider c-section js-slider">

  <?php while (have_rows('slider_homepage')) : the_row(); ?>
    <?php $slider_image = get_sub_field('slider_image'); ?>
    <?php $slider_title = get_sub_field('slider_title'); ?>
    <?php $slider_link = get_sub_field('slider_link'); ?>
    <?php $slider_content = get_sub_field('slider_caption'); ?>

    <?php if (get_sub_field('slider_video')): ?>
      <?php $slider_video_link = get_sub_field('slider_video_url'); ?>
      <?php $slider_video_image = get_sub_field('slider_video_image'); ?>
      <div class="c-slider__item js-slider-item">
       <div class="c-slider__content c-slider__content--video">
          <div class="c-slider__image" style="background-image: url(<?php echo $slider_image['sizes']['hero']; ?>)"></div>
           <div class="c-slider__text">
             <h3 class="c-slider__title"><?php echo $slider_title; ?></h3>
             <p class="c-slider__caption"><?php echo $slider_content; ?></p>
             <a href="<?php echo $slider_video_link; ?>" class="c-button c-button--white js-video">&#9658; Watch now</a>
           </div>

           <div class="c-slider__video">
             <a href="<?php echo $slider_video_link; ?>" class="c-slider__video-link js-video" style="background-image: url(<?php echo $slider_video_image['sizes']['post-thumb']; ?>)">
               <span class="c-slider__video-icon">&#9658;</span>
             </a>
           </div>

       </div>
     </div>

    <?php else: ?>

      <div class="c-slider__item js-slider-item">
        <div class="c-slider__content">
          <div class="c-slider__image" style="background-image: url(<?php echo $slider_image['sizes']['hero']; ?>)"></div>
          <div class="c-slider__text">
            <h3 class="c-slider__title"><?php echo $slider_title; ?></h3>
            <p class="c-slider__caption"><?php echo $slider_content; ?></p>
            <a href="<?php echo $slider_link; ?>" class="c-button c-button--white">Learn More</a>
          </div>
        </div>
      </div>

    <?php endif; ?>

  <?php endwhile; ?>

</section>
<?php endif; ?>
