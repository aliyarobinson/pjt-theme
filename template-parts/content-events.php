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
    <div class="intro-wrapper">
      <div class="intro">
        <?php the_field('intro'); ?>
      </div>
      <button class="more">
        <span class="hide-copy">more</span>
        <span class="arrow">&raquo;</span>
      </button>
    </div>
    
    <nav class="sub-nav">
      <ul>
        <li><button data-filter="*" class="filter-btn">All</button></li>
        <li><button data-filter="future" class="filter-btn">Future Events</button></li>
        <li><button data-filter="past" class="filter-btn">Past Events</button></li>
      </ul>
    </nav>
    <section class="grid" id="event-grid">
      
      <ul>
      <?php

        $dateNow = new DateTime("now");

        if( have_rows('event') ):

          // get repeater field data
          $repeater = get_field('event');

          // vars
          $order = array();

          // populate order
          foreach( $repeater as $i => $row ) {
            $dateObj = date_create($row['date']);
            $order[ $i ] = date_format($dateObj,"Ymd");
          }

          // multisort
          array_multisort( $order, SORT_DESC, SORT_NUMERIC, $repeater );

          // loop through the rows of data
          foreach( $repeater as $i => $row ):
            $dateCat = "future";
            $eventCat = date_create($row['date'] );
            $tagStr = [];

            $tags = $row['tags'];

            if( $tags ):
              foreach( $tags as $tag ): 
                array_push($tagStr,$tag);
              endforeach; 
            endif; 

            $tagsStr = implode(" ",$tagStr);

            if ($eventCat > $dateNow) :
              $dateCat = "future";
            else: 
              $dateCat = "past";
            endif;

            $classStr = 'grid-item ' . $tagsStr .  ' ' . $dateCat;
          ?>

            <li class="<?php echo $classStr; ?>" data-category="<?php echo $dateCat; ?>">
            <?php if ($dateCat == "future") : ?>
              <a href="<?php echo $row['event_url'] ?>" target="_blank">
            <?php endif; ?>
                <div class="cycle-slideshow event-img" 
                  data-cycle-swipe=true
                  data-cycle-fx=scrollHorz
                  data-cycle-timeout=0
                  data-cycle-pause-on-hover="true"
                  >
                  <!-- empty element for pager links -->
                  <div class="cycle-pager"></div>
                  <?php
                  $images = $row['images'];
                    foreach( $images as $j => $iRow ): ?>
                    <img src="<?php echo $iRow['image']; ?>" alt="event image" class="poster">
                  <?php
                    endforeach;
                  ?>
                </div>
                <h3 class="title">
                    <?php echo $row['title'] ?> 
                </h3>
              <?php if ($dateCat == "future") : ?>
              </a>
              <?php endif; ?>
              <div class="desc">
                <?php echo $row['description'] ?> 
              </div>
              <div class="meta-bar">
                <ul class="tags">
                  <?php
                  if( $tags ):
                    foreach( $tags as $tag ): ?>
                      <li class="tag"><button class="filter-btn hover-effect" data-filter="<?php echo $tag; ?>"><?php echo $tag; ?></button></li>
                    <?php 
                    endforeach; 
                  endif; 
                  ?>
                </ul>
                <?php 
                  $year = substr($row['date'],2, 2);
                  $month = substr($row['date'],4, 2);
                  $day = substr($row['date'],6, 2);
                  $dateStr = $month . "." . $day . "." . $year;
                ?>
                <date class="date"><?php echo $dateStr; ?> </date>
              </div>
            </li>
        <?php
            endforeach; 
        endif; ?>
      </ul>
    </section>
  </div>
</article><!-- #post-## -->
