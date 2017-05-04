<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PJT
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="wrapper">
    <nav class="sub-nav">
      <ul>
        <li class="non-link"><?php the_title(); ?></li>
      </ul>
    </nav>

    <section class="intro clear-fix">
      <div class="img-wrapper">
        <img src="<?php print IMAGES; ?>/support-us-light.png" alt="">
      </div>
      <?php the_field('intro'); ?>
    </section>

    <section class="support-links share-mod">
      <ul>
        <li>
          <button class="btn light overlay-trigger" data-overlay="volunteer">Volunteer</button>
        </li>
        <li>
          <button class="btn light overlay-trigger" data-overlay="donate">Donate</button>
        </li>
        <li>
          <button class="btn light share overlay-trigger" data-overlay="share">Share
          </button>      
        </li>
      </ul>
    </section>
  </div>
</article><!-- #post-## -->
