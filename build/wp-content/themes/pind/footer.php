  <!--  footer START -->
  <footer class="c-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="c-footer__neuron"></div>
    <div class="o-wrapper">
      <div class="c-footer__box">
          <div class="c-logo--footer">
            <h6 class="c-logo__type">PIND</h6>
            <p class="c-logo__slogan"><?php bloginfo('name') ?></p>
          </div>
          <a href="http://www.pitt.edu" target="_blank" class="c-footer__pitt-logo">University of Pittsburgh</a>
          <p class="c-footer__date">&copy; <?php echo date('Y') ?></p>
      </div>
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets')) : endif; ?>
    </div>
  </footer>
  <!--  footer END -->
  <?php wp_footer(); ?>
  </body>
</html>
