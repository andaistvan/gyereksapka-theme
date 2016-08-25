<?php
/*
Template Name: hol kapható
*/

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<h1 id="holkaphato-headline">Hol kaphatók a Füles gyereksapkák<span>?</span></h1>

<div id="holkaphato" class="main-container">
   <div class="col2">

      <p>
         Füles Gyereksapka nagykereskedés<br>Trend2 fsz. 1014-es üzlet
      </p>

      <div class="dashed-line"></div>

      <p>
         Nyitva tartás:<br>
         Hétfő - Csütörtök: 8.00 – 16.00<br>
         Péntek - Szombat: zárva<br>
         Vasárnap: 7.00 – 13.00
      </p>

      <div class="dashed-line"></div>

      <p>
         Más időpontban telefonos egyeztetéssel.
      </p>

   </div><!-- col2 -->

   <div class="col2">

      <p>
         SMK Trade Kft.2040 Budaörs, Gyár u. 2.
      </p>

      <div class="dashed-line"></div>

      <p>
         +36-23-506-331E<br>
         <a href="mailto:fules@gyereksapka.hu">fules@gyereksapka.hu</a>
      </p>

      <div class="dashed-line"></div>

      <div id="social-media-links">
         <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/sharing-facebook.png" alt="facebook icon"/></a>
         <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/sharing-instagram.png" alt="instagram icon"/></a>
         <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/sharing-twitter.png" alt="twitter icon"/></a>
      </div>

   </div><!-- col2 -->

</div><!-- main-container -->

<!-- GOOGLE MAP -->
<div id="map-container" class="main-container">
   térkép helye
</div><!-- main-container -->


<?php
get_footer();
