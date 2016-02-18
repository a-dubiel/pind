<?php if (have_rows('link_group')):?>
<div class="o-wrapper">
  <section class="c-link">

    <?php while (have_rows('link_group')) : the_row(); ?>
      <?php $link_title = get_sub_field('link_group_title'); ?>
      <div class="c-link__group">
        <h3 class="c-heading"><?php echo $link_title ?></h3>
        <?php if (have_rows('link_group_links')):?>
        <ul class="c-link__list">
          <?php while (have_rows('link_group_links')) : the_row(); ?>
            <?php $link_title = get_sub_field('link_title'); ?>
            <?php $link_url = get_sub_field('link_address'); ?>
            <li class="c-link__item"><a href="<?php echo $link_url ?>" class="c-link__url" target="_blank"><?php echo $link_title ?></a></li>
          <?php endwhile;?>
        </ul>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>

  </section>
</div>
<?php endif; ?>
