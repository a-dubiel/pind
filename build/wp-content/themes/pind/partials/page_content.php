<article class="c-content">

  <?php while (the_flexible_field('page_content')): ?>

    <?php if (get_row_layout() == 'text_section_content'): ?>

      <section class="c-content__section">
        <div class="o-wrapper o-wrapper--content">
          <h6 class="c-heading c-content__subtitle"><?php the_sub_field('text_section_title'); ?></h6>
        </div>
        <div class="c-content__main">
          <div class="o-wrapper o-wrapper--content">
            <?php the_sub_field('text_section_editor'); ?>
          </div>
        </div>
      </section>

    <?php elseif (get_row_layout() == 'author_info_content'): ?>

      <?php $author_photo = get_sub_field('author_info_photo'); ?>
      <?php $author_name = get_sub_field('author_info_name'); ?>
      <?php $author_title = get_sub_field('author_info_title'); ?>

      <footer class="c-content__section">
        <div class="o-wrapper o-wrapper--content">
          <div class="c-content__author">
            <?php if ($author_photo):?>
            <img src="<?php echo $author_photo['sizes']['avatar']; ?>" class="c-content__author-pic">
            <?php endif; ?>
            <?php if ($author_photo):?>
            <h6 class="c-content__author-name"><?php the_sub_field('author_info_name'); ?></h6>
            <?php endif; ?>
            <?php if ($author_title):?>
            <p class="c-content__author-title"><?php the_sub_field('author_info_title'); ?><p>
            <?php endif; ?>
          </div>
        </div>
      </footer>

    <?php elseif (get_row_layout() == 'page_gallery_content'): ?>

      <?php $images = get_sub_field('page_gallery'); ?>

      <?php if ($images): ?>
        <section class="c-content__gallery">
          <div class="o-wrapper">
            <div class="c-gallery">
              <div class="c-gallery__row">
              <?php foreach ($images as $image): ?>

                  <a href="<?php echo $image['sizes']['gallery-image']; ?>" title="<?php echo $image['caption']; ?>" class="c-gallery__item js-gallery">
                    <img src="<?php echo $image['sizes']['gallery-thumb']; ?>" alt="<?php echo $image['alt']; ?>" class="c-gallery__thumb" />
                  </a>


              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

    <?php elseif (get_row_layout() == 'hero_image_content'): ?>

      <?php $hero_image = get_sub_field('hero_image'); ?>

      <?php if ($hero_image):?>
      <div class="c-content__hero">
        <div class="o-wrapper o-wrapper--mobile-wide">
          <div class="c-content__hero-img" style="background-image: url(<?php echo $hero_image['sizes']['hero'] ?>)"></div>
          <?php if (get_sub_field('hero_image_caption')): ?>
            <p class="c-content__hero-caption"><?php the_sub_field('hero_image_caption'); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php endif;?>

    <?php endif;?>

  <?php endwhile;?>
  
</article>
