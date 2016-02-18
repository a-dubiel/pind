<div class="o-wrapper">
<section class="c-contact">
      <?php $contact_image = get_field('contact_image'); ?>
      <?php $contact_map = get_field('contact_map'); ?>
      <?php $contact_content = get_field('contact_content'); ?>
      <?php $contact_title = get_field('contact_title'); ?>
      <article class="c-contact__section">
        <h3 class="c-heading"><?php echo $contact_title ?></h3>
        <div class="c-content__main">
          <?php echo $contact_content ?>
        </div>
      </article>
      <aside class="c-contact__section">
        <h3 class="c-heading">Send Message</h3>
          <div class="c-form">
            <?php echo do_shortcode('[contact-form-7 id="1915" title="Contact Form"]') ?>
          </div>
      </aside>
</section>
</div>
<div class="c-contact__section c-contact__section--no-pad">
  <a href="https://maps.google.com?daddr=3501+Fifth+Avenue+Pittsburgh+PA+15260" target="_blank">
    <img src="<?php echo $contact_map['sizes']['gallery-square'] ?>" class="c-contact__photo" alt="map">
  </a>
</div>
<div class="c-contact__section c-contact__section--no-pad">
  <img src="<?php echo $contact_image['sizes']['gallery-square'] ?>" class="c-contact__photo" alt="<?php bloginfo('name') ?>">
</div>
