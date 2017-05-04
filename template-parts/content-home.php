<?php
/**
 * Template part for displaying page content in home page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PJT
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="hero">
      <div class="wrapper">
        <div class="hero-copy">
          <p class="description">
            <?php the_field('intro_copy'); ?>
          </p>
          <a href="<?php the_field('intro_link'); ?>" class="btn light learn-more">Learn More</a>
        </div>
        <div class="cta-block">
          <h4>JOIN #PROJECTTSEHIGH</h4>
          <p class="instructions">Stay update with PjT’s newsletter and upcoming events</p>

          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="//projecttsehigh.us14.list-manage.com/subscribe/post?u=fa7dcdefa7a5e8630d568446f&amp;id=8744a3e2cc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <div class="mc-field-group block block-2-wide">
                  <label for="mce-NAME">Name </label>
                  <input type="text" value="" name="NAME" class="" id="mce-NAME" placeholder="Name">
                </div>
                <div class="mc-field-group block block-2-wide">
                  <label for="mce-EMAIL">Email Address  </label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="text" name="b_fa7dcdefa7a5e8630d568446f_8744a3e2cc" tabindex="-1" value="">
                </div>
                <div class="clear">
                  <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
              </div>
            </form>
          </div>

          <!--End mc_embed_signup-->
        </div>
      </div>
    </section>
    
    <section class="mission">
      <div class="bkgd"></div>
      <div class="wrapper">
        <div class="our-mission block block-2-wide">
          <h3>Our Mission</h3>
          <p class="description">
            The mission of Project Tsehigh is to provide sustainable and renewable energy solutions for communities around the world with limited access to clean energy.
          </p>
        </div>
        <div class="our-vision block block-2-wide">
          <h3>Our Vision</h3>
          <p class="description">
            The vision of Project Tsehigh is a world with clean energy accessible to all.
          </p>
        </div>
      </div>   
    </section>

    <section class="event">
      <div class="wrapper">
        <h3>Latest Event</h3>
        <h4><?php the_field('event_title'); ?></h4>
        <div class="cycle-slideshow event-img" 
            data-cycle-swipe=true
            data-cycle-fx=scrollHorz
            data-cycle-timeout=3000
            data-cycle-pause-on-hover="true"
            >
            <!-- empty element for pager links -->
            <div class="cycle-pager"></div>
            <?php
            if( have_rows('event_images') ):
                while ( have_rows('event_images') ) : the_row();?>
              <img src="<?php the_sub_field('image'); ?>">
                <?php
                endwhile;
            else :
                // no rows found
            endif;
            ?>
        </div>
        <div class="cta-btn-block">
          <button class="btn light overlay-trigger" data-overlay="latest-event">More Info</button>
          <!-- <a href="#" class="btn light overlay-trigger" data-overlay="latest-event">More Info</a> -->
          <a href="<?php the_field('events_page_url'); ?>" class="btn light">More Events</a>
        </div>
      </div>
    </section>

</article><!-- #post-## -->
