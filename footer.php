<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
      <div class="main-container">
         <div id="footer-site-info">
            <p>©<?php echo date('Y'); ?> Nagykereskedés SMK Trade Kft.</p>
   		</div><!-- .site-info -->
         <div id="footer-social-cont">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/footer-phone.png" alt="phone icon" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/footer-mail.png" alt="mail icon" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/footer-facebook.png" alt="facebook icon" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/footer-twitter.png" alt="twitter icon" /></a>

         </div>
      </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- **********  off canvas  *************-->
      </div><!-- off-canvas-content -->
   </div><!-- off-canvas-wrapper-inner -->
</div><!-- off-canvas-wrapper -->
<!-- **********  off canvas  *************-->

<?php wp_footer(); ?>
<script type="text/javascript">
   $(document).foundation();
</script>

</body>
</html>
