<?php
/*
Template Name: sapkak
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
<h1 id="sapkak-headline">Válasszon évszakra bontott sapkáink közül!</h1>

<div id="sapkak" class="main-container">


   <div class="kategoria-banner">
      <a href="#"><h2>Füles csecsemő és baba sapkák</h2></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/kathead-baba.png" alt="baba sapka kategória"/></a>
   </div>

   <div class="kategoria-banner">
      <a href="#"><h2>Füles őszi gyereksapkák</h2></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/kathead-osz.png" alt="baba sapka kategória"/></a>
   </div>

   <div class="kategoria-banner">
      <a href="#"><h2>Füles téli gyereksapkák</h2></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/kathead-tel.png" alt="baba sapka kategória"/></a>
   </div>

   <div class="kategoria-banner">
      <a href="#"><h2>Füles tavaszi gyereksapkák</h2></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/kathead-tavasz.png" alt="baba sapka kategória"/></a>
   </div>

   <div class="kategoria-banner">
      <a href="#"><h2>Füles nyári gyereksapkák</h2></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/kathead-nyar.png" alt="baba sapka kategória"/></a>
   </div>

</div><!-- main-container -->

<?php
get_footer();
