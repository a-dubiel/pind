<?php if (have_rows('box_homepage')):?>
<section class="c-section c-section--box">
  <div class="o-wrapper o-wrapper--mobile-wide">

    <?php $box_classes = array('--first', '--second', '--third', '--fourth'); ?>
    <?php $i = 0; ?>

    <?php while (have_rows('box_homepage')) : the_row(); ?>
      <?php $box_icon = get_sub_field('box_icon'); ?>
      <?php $box_title = get_sub_field('box_title'); ?>
      <?php $box_link = get_sub_field('box_link'); ?>
      <?php $box_content = get_sub_field('box_content'); ?>
      <?php ?>

      <div class="c-box">
        <div class="c-box__content c-box__content<?php echo $box_classes[$i]?>">
          <img class="c-box__icon" src="<?php echo $box_icon; ?>" alt="<?php echo $box_title; ?>" />
          <h3 class="c-box__title"><?php echo $box_title; ?></h3>
          <div class="c-box__text"><?php echo $box_content; ?></div>
        </div>
        <div class="c-box__bottom c-box__bottom<?php echo $box_classes[$i]?>">
          <a href="<?php echo $box_link; ?>" class="c-button c-button--white">Learn More</a>
        </div>
      </div>
      <?php $i++; ?>
    <?php endwhile; ?>


  </div>
</section>
<?php endif; ?>
