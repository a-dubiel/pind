<?php get_header(); ?>
  <!--  main START-->
  <main role="main" class="c-main">
    <?php get_template_part("partials/header") ?>
    <div class="o-wrapper">
      <?php $labs = new WP_Query(array('post_type' => 'labs', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1))?>

      <?php if ($labs->have_posts()) : ?>
        <h2 class="c-heading">Laboratories</h2>
        <?php $i = 1;?>
      	<?php while ($labs->have_posts()) : $labs->the_post(); ?>

          <?php if (get_field('profile_type') == "Laboratory"): ?>
            <?php
              $lab_profile_photo =      get_field('lab_profile_photo');
              $lab_name =               get_field('lab_name');
              $lab_department =         get_field('lab_department');
              $lab_director =           get_field('lab_director');
              $lab_short_information =  get_field('lab_short_information');
              $lab_email =              get_field('lab_email');
            ?>
            <?php if ($i % 4 === 1): ?>
              <div class="c-lab-card__row u-clearfix">
            <?php endif; ?>


            <div class="c-lab-card c-lab-card--lab">
              <?php if (!empty($lab_profile_photo)): ?>
                <a href="<?php echo the_permalink() ?>">
                  <img src="<?php echo $lab_profile_photo['sizes']['avatar-big'] ?>" alt="<?php echo $lab_director ?>" class="c-lab-card__profile-photo">
                </a>
              <?php else: ?>
                <a href="<?php echo the_permalink() ?>">
                  <img src="<?php echo get_template_directory_uri() ?>/images/default-avatar.png" alt="" class="c-lab-card__profile-photo">
                </a>
              <?php endif; ?>
              <?php if (!empty($lab_name)):?>
                <h3 class="c-lab-card__name"><?php echo $lab_name ?></h3>
              <?php endif;?>
              <?php if (!empty($lab_department)):?>
                <h4 class="c-lab-card__department"><?php echo $lab_department ?></h4>
              <?php endif;?>
              <?php if (!empty($lab_director)):?>
                <p class="c-lab-card__director"><?php echo $lab_director ?></p>
              <?php endif; ?>

              <?php if (!empty($lab_short_information)):?>
                <div class="c-lab-card__information"><p><?php echo $lab_short_information ?></p></div>
              <?php endif; ?>
              <div class="c-lab-card__btns">
              <?php if (!empty($lab_email)):?>
                <a href="mailto:<?php echo $lab_email ?>" class="c-button">E-mail</a>
              <?php endif; ?>
                <a href="<?php echo the_permalink() ?>" class="c-button">More Info</a>
              </div>

            </div>

            <?php if ($i % 4 === 0): ?>
              </div>
            <?php endif; ?>
            <?php $i++; ?>
          <?php endif; ?>
      	<?php endwhile; ?>

        <?php if ($i % 4 != 1): ?>
          </div>
        <?php endif; ?>

      	<?php wp_reset_postdata(); ?>

      <?php else : ?>
      	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <?php $personell = new WP_Query(array('post_type' => 'labs', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1))?>

    <?php if ($personell->have_posts()) : ?>
      <h2 class="c-heading">Personnel</h2>
      <?php $i = 1;?>
      <?php while ($personell->have_posts()) : $personell->the_post(); ?>

        <?php if (get_field('profile_type') == "Personell"): ?>
          <?php
            $lab_profile_photo =      get_field('lab_profile_photo');
            $personell_name =         get_field('personell_name');
            $personell_position =     get_field('personell_position');
            $personell_email =        get_field('personell_email');
          ?>
          <?php if ($i % 4 === 1): ?>
            <div class="c-lab-card__row u-clearfix">
          <?php endif; ?>
          <div class="c-lab-card">
            <?php if (!empty($lab_profile_photo)): ?>
              <img src="<?php echo $lab_profile_photo['sizes']['avatar-big'] ?>" alt="<?php echo $lab_director ?>" class="c-lab-card__profile-photo">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri() ?>/images/default-avatar.png" alt="" class="c-lab-card__profile-photo">
            <?php endif; ?>
            <?php if (!empty($personell_name)):?>
              <h5 class="c-lab-card__director--personell"><?php echo $personell_name ?></h5>
            <?php endif; ?>

            <?php if (!empty($personell_position)):?>
              <h4 class="c-lab-card__department"><?php echo $personell_position ?></h4>
            <?php endif;?>
            <?php if (!empty($personell_email)):?>
              <a href="mailto:<?php echo $personell_email ?>" class="c-button">E-mail</a>
            <?php endif; ?>

          </div>
          <?php if ($i % 4 === 0): ?>
            </div>
          <?php endif; ?>
          <?php $i++; ?>
        <?php endif; ?>

      <?php endwhile; ?>

      <?php if ($i % 4 != 1): ?>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

    </div>
  </main>
<!--  main END -->
<?php get_footer(); ?>
