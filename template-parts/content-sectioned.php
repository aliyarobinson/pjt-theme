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
        <?php
            if( have_rows('section') ):
                while ( have_rows('section') ) : the_row();?>
                <?php 
                $section_title = get_sub_field('section_title');
                $section_title_str = strtolower( get_sub_field('section_title') );
                $sectionArr = explode(" ",$section_title_str); 
                $sectionStr = implode("-",$sectionArr); 
                $sectionID = "#" . $sectionStr; ?>
                  <li><a href="<?php echo $sectionID; ?>" class="soft-scroll"><?php echo $section_title; ?></a></li>
                <?php
                endwhile;
            else :
                // no rows found
            endif;
        ?>
        </ul>
      </nav>

      <?php
          if( have_rows('section') ):
              while ( have_rows('section') ) : the_row();?>
              <?php 
              $section_title = get_sub_field('section_title');
              $section_title_str = strtolower( get_sub_field('section_title') );
              $sectionArr = explode(" ",$section_title_str); 
              $sectionStr = implode("-",$sectionArr);?>
                <section class="<?php echo $sectionStr ; ?> clear-fix" id="<?php echo $sectionStr ; ?>">
                  <h3><?php the_sub_field('section_title'); ?></h3>
                  <?php //the_sub_field('section_content'); ?>
                  <?php

                    // check if the flexible content field has rows of data
                    if( have_rows('section_content') ):

                      // loop through the rows of data
                        while ( have_rows('section_content') ) : the_row();

                        // check current row layout
                        if( get_row_layout() == 'content_with_full_image' ):
                            ?>
                            <?php echo the_sub_field('content'); ?>
                              <div class="img-wrapper">
                                <img src="<?php echo the_sub_field('full_image'); ?>" alt="">
                              </div>

                        <?php
                        elseif ( get_row_layout() == 'general_content' ) :
                          echo the_sub_field('content'); 
                        ?>


                        <?php
                        elseif ( get_row_layout() == 'infographic' ) :
                          $infographic_image = get_sub_field('image'); $section_title_str
                        ?>
                        <div class="infographic"> 
                          <img src="<?php echo $infographic_image; ?>" alt="<?php echo $section_title_str ?>">
                          <div class="share-mod">
                            <ul class="share-bar-small">
                              <li class="share-item fb">
                                <a href="https://www.facebook.com/sharer.php?u=<?php echo $infographic_image; ?>#<?php echo $sectionStr; ?>&t=Project%20Tsehigh%2DA%20Not%20for%20Profit%20Organization%20dedicated%20to%20providing%20uninterrupted%20energy%20to%20impoverished%20communities%20around %20the%20world%2E%20Please%20support%20us%21"> 
                                  <svg  aria-hidden="true" class="icon" preserveAspectRatio="xMinYMin meet" viewBox="0 0 136 260" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M 41,200.5 41,141 21,141 1,141 1,118.5 1,96 21,96 41,96 41.01478,72.75 C 41.031204,46.917684 41.840533,41.324098 47.187464,30.0882 51.176265,21.706242 61.24529,11.412285 69.512029,7.2649273 80.010363,1.9979962 87.559308,0.62241394 105.62395,0.68454855 c 8.86817,0.0305027 19.10567,0.37477495 22.75,0.76504945 L 135,2.1591879 l 0,20.3394231 0,20.339424 -17.75,0.330982 C 100.86032,43.474634 99.220767,43.673643 95.856462,45.765763 89.302414,49.841448 88.540625,52.821967 88.192811,75.75 L 87.885622,96 110.44281,96 c 20.83632,0 22.5532,0.133506 22.50483,1.75 -0.0288,0.9625 -1.28762,10.975 -2.7974,22.25 l -2.74504,20.5 -19.7026,0.27114 L 88,141.04228 88,200.52114 88,260 64.5,260 41,260 41,200.5 Z" />
                                  </svg>
                                  <span class="hide-copy" aria-label="My Facebook Account">  
                                    Facebook
                                  </span>
                                </a>
                              </li>
                              <li class="share-item twitter">
                                <a href="https://twitter.com/intent/tweet?url=<?php echo $infographic_image; ?>#<?php echo $sectionStr; ?>&text=Project+Tsehigh+is+a+nonprofit+org+dedicated+to+providing+energy+to+impoverished +communities.&hashtags=projecttsehigh">
                                  <svg  aria-hidden="true" class="icon" preserveAspectRatio="xMinYMin meet" viewBox="0 0 245 200" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M 65.5,199.01784 C 46.176371,197.41264 31.258574,193.26594 14,184.70239 L 1.5,178.5 l 14,-0.6508 c 15.193092,-0.70626 24.527332,-2.68357 36.586309,-7.75021 6.777105,-2.84744 21.873398,-11.93856 21.900775,-13.18884 0.0071,-0.32441 -3.170111,-1.15868 -7.060477,-1.85393 C 52.100815,152.4067 36.924801,141.37026 30.75,128.74754 29.2375,125.65564 28,122.9218 28,122.67235 c 0,-0.24944 4.024745,-0.46628 8.943878,-0.48185 4.919133,-0.0156 9.756633,-0.48454 10.75,-1.04215 2.004143,-1.12501 2.398911,-0.8693 -5.651186,-3.66046 C 32.438454,114.15787 22.311918,105.5075 16.591999,95.747196 13.234525,90.0181 10.018049,79.817702 10.007639,74.866242 L 10,71.232483 l 5.75,2.319128 c 3.1625,1.275519 8.225,2.640242 11.25,3.032717 l 5.5,0.71359 -6.523036,-6.484533 C 18.501182,63.381731 13.710937,55.11779 11.539783,45.906932 9.0089821,35.170312 9.6521771,27.350144 14.027968,15.654795 l 2.044944,-5.465604 10.213544,10.190804 c 23.329721,23.277777 55.520697,38.638998 86.361894,41.211056 l 7.97987,0.665496 -0.41566,-8.878274 C 119.48078,37.747823 123.76283,26.451292 134.58804,15.454101 142.20055,7.7206605 152.4485,2.4300219 162.5,1.044192 c 14.71817,-2.02923679 31.35655,2.933992 39.96806,11.922468 1.59837,1.668337 3.89953,3.03334 5.1137,3.03334 3.14526,0 14.80657,-3.718684 22.32606,-7.1195783 3.5243,-1.5939611 6.60642,-2.6995108 6.84916,-2.456777 0.24273,0.2427337 -0.84079,2.8312545 -2.40782,5.7522683 -2.83116,5.27739 -10.62119,14.011626 -15.28883,17.14194 -1.34181,0.89988 -2.18823,1.887583 -1.88091,2.194896 0.7984,0.798406 15.32075,-2.33098 21.22078,-4.572816 2.73933,-1.040861 5.10147,-1.771598 5.24921,-1.623859 0.62337,0.623372 -13.56709,15.941321 -18.25091,19.701014 l -5.1015,4.094966 -0.56485,12.700608 C 217.99675,100.83281 200.2809,137.98205 170.5,165.04999 c -9.64396,8.76541 -18.58614,14.70379 -30.83647,20.47808 -15.24966,7.18804 -31.662,11.7804 -46.16353,12.91709 -15.841662,1.24173 -19.134986,1.30909 -28,0.57268 z" />
                                  </svg>
                                  <span class="hide-copy" aria-label="My Twitter Account">  
                                    Twitter
                                  </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>


                        <?php          
                        elseif ( get_row_layout() == 'team' ) :
                        ?>
                          <?php
                          // check if the nested repeater field has rows of data
                              if( have_rows('team_members') ):

                            echo '<ul class="team-members">';

                            // loop through the rows of data
                              while ( have_rows('team_members') ) : the_row();

                              $memberName = get_sub_field('member_name');
                              $memberTitle = get_sub_field('member_title');
                              $memberBio = get_sub_field('member_bio');
                              $hasImage = get_sub_field('has_photo');
                              $gender = get_sub_field('gender');
                              $image = get_sub_field('member_photo');
                              $fImage = IMAGES . "/team/default-female-icon.png";
                              $mImage = IMAGES . "/team/default-male-icon.png";
                          ?>
                            
                              <li class="team-member block block-2-wide">
                                <div class="member-content-wrapper">
                                  <div class="img-wrapper">
                                    <img src="<?php echo $image; ?>" alt="<?php echo $memberName; ?>">
                                  </div>
                                  <div class="content-wrapper">
                                    <div class="member-title-bar">
                                      <h4 class="name"><?php echo $memberName; ?></h4>
                                      <h5 class="title"><?php echo $memberTitle; ?></h5>
                                    </div>
                                    <div class="bio">
                                      <?php echo $memberBio; ?>
                                    </div>
                                  </div>
                                </div>
                                
                              </li>
                          <?php

                            endwhile;

                            echo '</ul>';

                          endif;
                          ?>
                        <?php
                            endif;

                        endwhile;

                    else :

                        // no layouts found

                    endif;

                    ?>
                </section>
              <?php
              endwhile;
          else :
              // no rows found
          endif;
      ?>
      <!-- <section class="the-conception clear-fix" id="the-conception">
        <h3>The Conception</h3>
        <p>
          Grace Mahary, Eritrean-Canadian international model, frequented Eritrea on several occasions in the past few years. The amount of citizens living in the the country without electricity moved and inspired her to make a change. Over the last four years, she has been researching renewable energy solutions, especially for countries lacking electrical and mechanical infrastructure. Drawing from her global network, Grace drafted a team who is now creating tangible clean energy solutions for communities around the world.
        </p>
      </section>

      <section class="the-plan" id="the-plan">
        <h3>The Plan</h3>
        <p>
          Commencing in the country of Eritrea, Project Tsehigh plans to: donate solar panels, batteries, and related accessories to communities throughout Eritrea, provide on the ground support to assemble and implement such technology, and train local citizens to operate and maintain such technology without the need for ongoing non-local assistance.
        </p>
        <p>
          Launching with household products, PjT hopes to spread solar power endeavors into a variety of larger fields including Agriculture, Education, Medical, and Public
          Establishments. Through a proposed partnership with HEBCOSS, a solar energy company based in Eritrea, PjT will supply the solar products necessary to achieve our objective.
        </p>
        <p>
          With approximately 70% of Eritrea off the electrical grid, there is plenty of room for improvement in the quality of life for the people of the country. Thus, the goal of PjT is to connect all regions of Eritrea with access to sustainable electricity.
        </p>
      </section>

      <section class="the-team" id="the-team">
        <h3>The Team</h3>
        <ul class="team-members">
          <li class="team-member block block-2-wide">
            <div class="img-wrapper">
              <img src="./img/team/team-grace.jpg" alt="grace mehary">
            </div>
            <div class="member-title-bar">
              <h4 class="name">Grace Mehary</h4>
              <h5 class="title">Founder &amp; Executive Director</h5>
            </div>
          </li>
          <li class="team-member block block-2-wide no-image">
            <div class="img-wrapper">
              <img src="./img/team/default-female-icon.png" alt="">
            </div>
            <div class="member-title-bar">
              <h4 class="name">Joey Yusuf</h4>
              <h5 class="title">Board Member</h5>
            </div>
          </li>
          <li class="team-member block block-2-wide">
            <div class="img-wrapper">
              <img src="./img/team/team-eden.jpg" alt="">
            </div>
            <div class="member-title-bar">
              <h4 class="name">Eden Ghebresellassie</h4>
              <h5 class="title">Chief Financial Officer</h5>
            </div>
          </li>
          <li class="team-member block block-2-wide no-image">
            <div class="img-wrapper">
              <img src="./img/team/default-male-icon.png" alt="">
            </div>
            <div class="member-title-bar">
              <h4 class="name">Isack Abraham</h4>
              <h5 class="title">Chief Technology Officer</h5>
            </div>
          </li>
        </ul>
      </section> -->
    </div>
</article><!-- #post-## -->
