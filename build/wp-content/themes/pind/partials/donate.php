<?php if (have_rows('donate')):?>
<div class="o-wrapper">
  <section class="c-donate">

    <?php while (have_rows('donate')) : the_row(); ?>
      <?php $donate_title = get_sub_field('donate_title'); ?>
      <?php $donate_icon = get_sub_field('donate_icon'); ?>
      <?php $donate_content = get_sub_field('donate_content'); ?>

      <div class="c-donate__section">
        <img class="c-donate__icon" src="<?php echo $donate_icon ?>" alt="icon">
        <h3 class="c-heading"><?php echo $donate_title ?></h3>
        <div class="c-content__main">
          <?php echo $donate_content ?>
        </div>
      </div>
    <?php endwhile; ?>

  </section>
</div>
<?php endif; ?>
