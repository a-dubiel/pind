<?php
  if (is_post_type_archive('labs')) {
      $title = 'Laboratories + Personnel';
  } elseif (is_home()) {
      $title = 'News + Events';
  } elseif (is_category()) {
      $title =  'Category: ' . single_cat_title('', false);
  } elseif (is_archive() && !is_post_type_archive('labs')) {
      $title = 'Archives';
  } elseif (is_search()) {
      $title = 'Search results for: '. get_search_query();
  } elseif (is_tag()) {
      $title = 'Tag: '. single_tag_title('', false);
  } elseif (is_404()) {
      $title = 'Oopps! Not found';
  } else {
      $title = get_the_title();
  }

?>

<header class="c-page-header">
  <div class="o-wrapper">
    <h1 class="c-heading c-heading--h1 c-heading--page"><?php echo $title ?></h1>
  </div>
</header>
