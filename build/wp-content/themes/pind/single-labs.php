<?php
  if (get_field('profile_type') == "Personell") {
      wp_redirect(home_url('/labs'));
      exit;
  }
?>
<?php get_header(); ?>
  <!--  main START-->
  <main role="main" class="c-main">
    <?php get_template_part("partials/header") ?>

      <?php
        $lab_profile_photo =      get_field('lab_profile_photo');
        $lab_name =               get_field('lab_name');
        $lab_director =           get_field('lab_director');
        $lab_director_title =     get_field('lab_director_title');
        $lab_email =              get_field('lab_email');
        $lab_website =            get_field('lab_website');
        $lab_interests =          get_field('lab_interests');
        $lab_training =           have_rows('lab_training');
        $lab_positions =          have_rows('lab_positions');
        $lab_awards =             get_field('lab_awards');
        $lab_gallery =            get_field('lab_gallery');
        $lab_publications =       get_field('lab_publications');
        $lab_publications_url =   get_field('lab_publications_url');
        $lab_members =            have_rows('lab_members');

      ?>

      <article class="c-lab">
        <div class="o-wrapper">
          <?php $lab_profile_photo = get_field('lab_profile_photo'); ?>
          <div class="c-lab__card">
            <?php if (!empty($lab_profile_photo)): ?>
              <img src="<?php echo $lab_profile_photo['sizes']['avatar-big'] ?>" alt="<?php echo $lab_director ?>" class="c-lab__profile-photo">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri() ?>/images/default-avatar.png" alt="" class="c-lab__profile-photo">
            <?php endif; ?>

            <?php if (!empty($lab_director)):?>
              <h2 class="c-lab__director"><?php echo $lab_director ?></h2>
            <?php endif;?>
            <?php if (!empty($lab_director_title)):?>
              <h5 class="c-lab__director-title"><?php echo $lab_director_title ?></h5>
            <?php endif; ?>
            <?php if (!empty($lab_email)):?>
              <a href="mailto:<?php echo $lab_email ?>" class="c-button">E-mail</a>
            <?php endif; ?>
            <?php if (!empty($lab_website)):?>
              <a href="<?php echo $lab_website ?>" class="c-button" target="_blank">Website</a>
            <?php endif;?>
          </div>


          <div class="c-lab__information">

            <?php if (!empty_content($lab_interests)): ?>
              <section class="c-lab__section">
                <h3 class="c-heading u-text-uppercase">Interests</h3>
                <div class="c-lab__textarea">
                  <?php echo $lab_interests; ?>
                </div>
              </section>
            <?php endif; ?>

            <?php if ($lab_training): ?>
            <section class="c-lab__section">
              <h3 class="c-heading u-text-uppercase">Training</h3>
              <div class="c-lab__table">
                <table>
                  <?php while (have_rows('lab_training')) : the_row(); ?>
                    <?php if (!empty_content(get_sub_field('lab_training_degree'))): ?>
                      <tr>
                        <td><?php echo get_sub_field('lab_training_degree') ?></td>
                        <td><?php echo get_sub_field('lab_training_area') ?></td>
                        <td><?php echo get_sub_field('lab_training_institution') ?></td>
                        <td><?php echo get_sub_field('lab_training_year') ?></td>
                      </tr>
                    <?php endif; ?>
                  <?php endwhile; ?>
                </table>
              </div>
            </section>
            <?php endif; ?>

            <?php if ($lab_positions): ?>
            <section class="c-lab__section">
              <h3 class="c-heading u-text-uppercase">Positions Held</h3>
              <div class="c-lab__table">
                <table>
                  <?php while (have_rows('lab_positions')) : the_row(); ?>
                    <?php if (!empty_content(get_sub_field('lab_positions_name'))): ?>
                      <tr>
                        <td><?php echo get_sub_field('lab_positions_name') ?></td>
                        <td><?php echo get_sub_field('lab_positions_institution') ?></td>
                        <td><?php echo get_sub_field('lab_positions_year') ?></td>
                      </tr>
                    <?php endif;?>
                  <?php endwhile; ?>
                </table>
              </div>
            </section>
            <?php endif;?>

            <?php if (!empty_content($lab_awards)): ?>
            <section class="c-lab__section">
              <h3 class="c-heading u-text-uppercase">Honors and awards</h3>
              <div class="c-lab__textarea--awards">
                <?php echo $lab_awards ?>
              </div>
            </section>
            <?php endif; ?>

            <?php if (!empty($lab_gallery)): ?>
            <section class="c-lab__section">
              <h3 class="c-heading u-text-uppercase">Gallery</h3>
              <div class="c-gallery">
                <div class="c-gallery__row">

                  <?php foreach ($lab_gallery as $image): ?>
                    <a href="<?php echo $image['sizes']['gallery-image']; ?>" title="<?php echo $image['caption']; ?>" class="c-gallery__item--labs js-gallery">
                      <img src="<?php echo $image['sizes']['gallery-thumb']; ?>" alt="<?php echo $image['alt']; ?>" class="c-gallery__thumb" />
                    </a>
                  <?php endforeach; ?>

                </div>
              </div>
            </section>
            <?php endif; ?>

            <?php if (!empty_content($lab_publications)):?>
            <section class="c-lab__section">
              <h3 class="c-heading u-text-uppercase">Selected Publications</h3>
              <div class="c-lab__textarea">
                <?php echo $lab_publications ?>
              </div>
              <?php if (!empty_content($lab_publications_url)): ?>
                <a href="<?php echo $lab_publications_url ?>" target="_blank" class="c-lab__publications-url"/>More publications</a>
              <?php endif;?>
            </section>
            <?php endif; ?>

            <?php if ($lab_members): ?>
            <section class="c-lab__section">
              <h3 class="c-heading u-text-uppercase">Lab Members</h3>
              <ul class="c-lab__members">
                <?php while (have_rows('lab_members')) : the_row(); ?>
                  <?php if (!empty_content(get_sub_field('lab_member_name'))): ?>
                    <li class="c-lab__member">
                      <div class="c-lab__member-info">
                        <h5 class="c-lab__member-name"><?php echo get_sub_field('lab_member_name') ?></h5>
                        <p class="c-lab__member-title"><?php echo get_sub_field('lab_member_title') ?></p>
                        <a href="<?php echo get_sub_field('lab_member_email') ?>" class="c-lab__member-email"><?php echo get_sub_field('lab_member_email') ?></a>
                        <?php if (!empty_content(get_sub_field('lab_member_bio'))):?>
                          <p class="c-lab__member-bio"><?php echo get_sub_field('lab_member_bio') ?></p>
                        <?php endif; ?>
                      </div>
                    </li>
                  <?php endif; ?>
                <?php endwhile; ?>
              </ul>
            </section>
            <?php endif; ?>

          </div>
        </div>
      </article>
  </main>
  <!--  main END -->
  <?php get_footer(); ?>
