<h4 class="c-heading">Archives</h4>
<ul class="c-blog__list">
  <?php wp_get_archives() ?>
</ul>
<h4 class="c-heading">Categories</h4>
<ul class="c-blog__list">
  <?php wp_list_categories(array('title_li' => '', 'depth' => 1)) ?>
</ul>
