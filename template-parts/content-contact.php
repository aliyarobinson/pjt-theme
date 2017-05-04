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
        <p>
          Contact us at <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
        </p>
      </section>

      <section class="social-links">
      <h3><?php the_field('social_title'); ?></h3>
      <div class="hr-line"></div>
        <ul>
          <li>
            <a href="https://www.facebook.com/Project-Tsehigh-1397017517016058/" target="_blank" class="btn light">Facebook</a>
          </li>
          <li>
            <a href="https://twitter.com/projecttsehigh" target="_blank" class="btn light">Twitter</a>
          </li>
          <li>
            <a href="https://www.instagram.com/projecttsehigh/" target="_blank" class="btn light">Instagram</a>
          </li>
        </ul>
      </section>
    </div>
</article><!-- #post-## -->
