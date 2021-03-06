<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PJT
 */

?>

	<!--</div>--><!-- #content -->

	<footer class="site-footer" role="contentinfo">
		<div class="wrapper">
		  <div class="footer-blocks">
		    <div class="block block-2-wide footer-about">
		      <h3 class="about-description">
		        Help us brighten up the world.
		      </h3>
		      <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TMMNUN2AA4SHE" target="_blank" class="btn light donate">Donate Today</a>
		    </div>
		    <div class="block block-2-wide footer-subscribe">
		      <h3>Sign up for our Newsletter</h3>
		      <p class="instructions">
		        Stay update with PjT’s newsletter and upcoming events
		      </p>
		      <!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="//projecttsehigh.us14.list-manage.com/subscribe/post?u=fa7dcdefa7a5e8630d568446f&amp;id=8744a3e2cc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
				<div class="mc-field-group">
					<label for="mce-NAME">Name </label>
					<input type="text" value="" name="NAME" class="" id="mce-NAME" placeholder="Name">
				</div>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email Address  </label>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fa7dcdefa7a5e8630d568446f_8744a3e2cc" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
				</div>

				<!--End mc_embed_signup-->



		    </div>
		  </div>
		  <div class="footer-logo-wrapper">
		    <img class="logo" src="<?php print IMAGES; ?>/footer-logo.png" />
		  </div>
		  <div class="social-legal">
		    <div class="social">
		      <ul class="social-icons">
		        <li class="social-item">
		          <a href="https://www.facebook.com/Project-Tsehigh-1397017517016058/" target="_blank"> 
		            <svg  aria-hidden="true" class="icon" preserveAspectRatio="xMinYMin meet" viewBox="0 0 136 260" xmlns="http://www.w3.org/2000/svg">
		              <path
		                 d="M 41,200.5 41,141 21,141 1,141 1,118.5 1,96 21,96 41,96 41.01478,72.75 C 41.031204,46.917684 41.840533,41.324098 47.187464,30.0882 51.176265,21.706242 61.24529,11.412285 69.512029,7.2649273 80.010363,1.9979962 87.559308,0.62241394 105.62395,0.68454855 c 8.86817,0.0305027 19.10567,0.37477495 22.75,0.76504945 L 135,2.1591879 l 0,20.3394231 0,20.339424 -17.75,0.330982 C 100.86032,43.474634 99.220767,43.673643 95.856462,45.765763 89.302414,49.841448 88.540625,52.821967 88.192811,75.75 L 87.885622,96 110.44281,96 c 20.83632,0 22.5532,0.133506 22.50483,1.75 -0.0288,0.9625 -1.28762,10.975 -2.7974,22.25 l -2.74504,20.5 -19.7026,0.27114 L 88,141.04228 88,200.52114 88,260 64.5,260 41,260 41,200.5 Z" />
		            </svg>
		            <span class="hide-copy" aria-label="My Facebook Account">  
		              Facebook
		            </span>
		          </a>
		        </li>
		        <li class="social-item">
		          <a href="https://twitter.com/projecttsehigh" target="_blank">
		            <svg  aria-hidden="true" class="icon" preserveAspectRatio="xMinYMin meet" viewBox="0 0 245 200" xmlns="http://www.w3.org/2000/svg">
		              <path
		                 d="M 65.5,199.01784 C 46.176371,197.41264 31.258574,193.26594 14,184.70239 L 1.5,178.5 l 14,-0.6508 c 15.193092,-0.70626 24.527332,-2.68357 36.586309,-7.75021 6.777105,-2.84744 21.873398,-11.93856 21.900775,-13.18884 0.0071,-0.32441 -3.170111,-1.15868 -7.060477,-1.85393 C 52.100815,152.4067 36.924801,141.37026 30.75,128.74754 29.2375,125.65564 28,122.9218 28,122.67235 c 0,-0.24944 4.024745,-0.46628 8.943878,-0.48185 4.919133,-0.0156 9.756633,-0.48454 10.75,-1.04215 2.004143,-1.12501 2.398911,-0.8693 -5.651186,-3.66046 C 32.438454,114.15787 22.311918,105.5075 16.591999,95.747196 13.234525,90.0181 10.018049,79.817702 10.007639,74.866242 L 10,71.232483 l 5.75,2.319128 c 3.1625,1.275519 8.225,2.640242 11.25,3.032717 l 5.5,0.71359 -6.523036,-6.484533 C 18.501182,63.381731 13.710937,55.11779 11.539783,45.906932 9.0089821,35.170312 9.6521771,27.350144 14.027968,15.654795 l 2.044944,-5.465604 10.213544,10.190804 c 23.329721,23.277777 55.520697,38.638998 86.361894,41.211056 l 7.97987,0.665496 -0.41566,-8.878274 C 119.48078,37.747823 123.76283,26.451292 134.58804,15.454101 142.20055,7.7206605 152.4485,2.4300219 162.5,1.044192 c 14.71817,-2.02923679 31.35655,2.933992 39.96806,11.922468 1.59837,1.668337 3.89953,3.03334 5.1137,3.03334 3.14526,0 14.80657,-3.718684 22.32606,-7.1195783 3.5243,-1.5939611 6.60642,-2.6995108 6.84916,-2.456777 0.24273,0.2427337 -0.84079,2.8312545 -2.40782,5.7522683 -2.83116,5.27739 -10.62119,14.011626 -15.28883,17.14194 -1.34181,0.89988 -2.18823,1.887583 -1.88091,2.194896 0.7984,0.798406 15.32075,-2.33098 21.22078,-4.572816 2.73933,-1.040861 5.10147,-1.771598 5.24921,-1.623859 0.62337,0.623372 -13.56709,15.941321 -18.25091,19.701014 l -5.1015,4.094966 -0.56485,12.700608 C 217.99675,100.83281 200.2809,137.98205 170.5,165.04999 c -9.64396,8.76541 -18.58614,14.70379 -30.83647,20.47808 -15.24966,7.18804 -31.662,11.7804 -46.16353,12.91709 -15.841662,1.24173 -19.134986,1.30909 -28,0.57268 z" />
		            </svg>
		            <span class="hide-copy" aria-label="My Twitter Account">  
		              Twitter
		            </span>
		          </a>
		        </li>
		        <li class="social-item">
		          <a href="https://www.instagram.com/projecttsehigh/" target="_blank">
		            <svg  aria-hidden="true" class="icon" preserveAspectRatio="xMinYMin meet" viewBox="0 0 241 240" xmlns="http://www.w3.org/2000/svg">
		              <path
		                 d="M 79,238.97547 C 59.210089,238.19124 47.901173,235.98995 37.714912,230.9393 24.348932,224.31204 15.37599,215.28967 9.4314022,202.5 2.1622956,186.86065 1.0016715,175.50187 1.0016715,120 c 0,-43.994545 0.8508682,-58.864111 4.0273086,-70.380266 C 11.748408,25.25851 28.83336,9.0536718 53.693689,3.4619358 65.239114,0.86506884 115.05851,-0.50369741 150.34654,0.80644055 c 30.22617,1.12220625 38.39417,2.12170315 47.78024,5.84674165 18.91578,7.5070868 32.30616,22.7046038 37.85741,42.9665518 3.16459,11.550677 4.01414,26.445859 4.01414,70.380266 0,56.82742 -1.12366,67.15966 -9.11246,83.79076 -8.04918,16.75681 -23.71646,28.38099 -44.25101,32.83157 -13.19411,2.85964 -65.8199,4.01016 -107.63486,2.35314 z m 102.06945,-22.26035 c 19.27463,-3.78315 30.85472,-14.63758 35.69287,-33.45619 C 218.31231,177.23006 218.5,170.39718 218.5,120 218.5,58.364122 218.35591,56.556075 212.52709,45.053455 209.22814,38.54329 201.38186,30.823179 194.78294,27.594627 183.28544,21.969426 178.48598,21.580874 120.5,21.580874 c -46.16677,0 -54.029132,0.219927 -60.982169,1.705802 -19.477765,4.16243 -30.415985,14.534593 -35.280151,33.454392 -2.630063,10.229971 -2.630063,116.287892 0,126.517862 3.574349,13.90289 10.979341,23.68652 21.938672,28.98583 12.171705,5.88555 22.013611,6.65347 80.323648,6.26732 36.49073,-0.24165 48.69254,-0.64346 54.56945,-1.79696 z M 106.41766,179.51751 C 90.389227,176.02978 72.809447,161.97203 65.753196,147 c -4.583521,-9.72536 -6.128723,-16.53273 -6.128723,-27 0,-17.35538 5.371252,-30.224532 17.769483,-42.574471 9.232056,-9.196097 16.749257,-13.703995 27.516004,-16.500737 14.13868,-3.672626 32.24474,-1.714488 44.41456,4.803356 2.84652,1.524519 9.05379,6.596852 13.79395,11.271852 12.9113,12.733829 18.25706,25.32444 18.25706,43 0,17.33139 -5.36245,30.19262 -17.76949,42.6181 -15.67535,15.69866 -35.62043,21.59251 -57.18838,16.89941 z m 30.70235,-22.69471 c 16.30574,-7.52364 25.72492,-25.02037 23.07628,-42.86571 C 158.25144,100.85348 150.05923,89.615975 138.19272,83.774113 131.89653,80.674507 130.95353,80.5 120.5,80.5 c -10.45353,0 -11.39653,0.174507 -17.69272,3.274113 -11.878367,5.847699 -20.058607,17.078627 -22.008509,30.216227 -1.868162,12.58687 1.481916,23.63437 10.066996,33.19777 8.474285,9.43998 17.139573,12.92127 31.134233,12.50821 7.72459,-0.22799 10.5503,-0.76501 15.12001,-2.87352 z M 178.4113,68.109054 C 173.34118,65.017325 171,61.277266 171,56.269433 c 0,-10.484319 10.10737,-17.159503 19.34499,-12.775964 10.12122,4.802832 10.47207,18.868876 0.60893,24.412275 -4.61161,2.59187 -8.52169,2.655251 -12.54262,0.20331 z" />
		            </svg>
		            <span class="hide-copy" aria-label="My Instagram Account">  
		              Instagram
		            </span>
		          </a>
		        </li>
		      </ul>
		    </div>
		    <div class="hr-line"></div>
		    <div class="legal">  
		      <span class="copyright">&copy; copyright <?php echo date('Y'); ?>. All Rights Reserved. Project Tsehigh.</span>
		    </div>
		  </div>
		</div>
		<button class="top hidden">
		  <svg  aria-hidden="true" class="icon" preserveAspectRatio="xMinYMin meet" viewBox="0 0 305 287.5" xmlns="http://www.w3.org/2000/svg">
		    <path
		      d="m 134.74892,286.39011 c -6.33746,-1.33789 -14.22381,-6.79589 -16.90156,-11.69727 -2.0449,-3.74301 -2.25118,-9.85062 -2.58327,-76.48698 l -0.3609,-72.41914 -31.514096,31.36879 C 48.877707,191.50779 47.503234,192.47159 35.576016,190.68299 30.246124,189.88372 28.429054,188.60694 17.42453,177.92862 10.698753,171.40221 4.308029,164.1915 3.222922,161.9048 0.59485655,156.36656 0.77123211,148.01484 3.6459201,141.875 5.2276965,138.4966 27.819865,115.12349 73.305967,69.807012 137.9545,5.3995645 140.86054,2.6907076 146.5625,1.5210474 c 3.85426,-0.79063541 8.02074,-0.79063541 11.875,0 5.70196,1.1696602 8.608,3.8785171 73.25654,68.2859646 45.4861,45.316478 68.07826,68.689588 69.66003,72.067988 2.86124,6.11109 3.05384,14.48572 0.45892,19.95412 -1.06535,2.24508 -7.11223,9.15639 -13.4375,15.35849 -12.95838,12.70604 -17.71613,15.00201 -27.93858,13.48248 -5.90452,-0.87768 -6.89637,-1.73115 -38.20105,-32.87143 l -32.13914,-31.97034 -0.36086,72.39834 c -0.41107,82.47211 0.24879,77.57321 -11.42047,84.78776 -5.68219,3.51303 -6.64914,3.6859 -22.43923,4.01175 -9.07564,0.18729 -18.5829,-0.0989 -21.12724,-0.63606 z" />
		  </svg>
		  <span class="hide-copy">  
		    To Top
		  </span>
		</button>
		<div class="overlay volunteer collapsed">
		  <div class="wrapper">
		    <button class="close">close</button>
		    <div class="content">
		      <h4>Volunteering?</h4>
		      <div class="hr-line"></div>
		      <?php the_field('volunteer_copy'); ?>
		    </div>
		  </div>
		</div>
		<div class="overlay donate collapsed">
		  <div class="wrapper">
		    <button class="close">close</button>
		    <div class="content">
		      <h4>Donations</h4>
		      <div class="hr-line"></div>
		      <?php the_field('donate_copy'); ?>
		      <a href="<?php the_field('donate_link'); ?>" target="_blank" class="btn light">Donate</a>
		      <!-- <a href="https://www.classy.org/checkout/donation?eid=30356" target="_blank" class="btn light">Donate</a> -->
		    </div>
		  </div>
		</div>
		<div class="overlay share collapsed">
		  <div class="wrapper">
		    <button class="close">close</button>
		    <div class="content">
		      <h4>Spread the news!</h4>
		      <div class="hr-line"></div>
		      <ul class="share-bar-small share-mod">
	              <li class="share-item fb">
	                <a href="https://www.facebook.com/sharer.php?u=http://projecttsehigh.com&t=Project%20Tsehigh%2DA%20Not%20for%20Profit%20Organization%20dedicated%20to%20providing%20uninterrupted%20energy%20to%20impoverished%20communities%20around %20the%20world%2E%20Please%20support%20us%21"> 
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
	                <a href="https://twitter.com/intent/tweet?url=http://projecttsehigh.com&text=Project+Tsehigh+is+a+nonprofit+org+dedicated+to+providing+energy+to+impoverished +communities.&hashtags=projecttsehigh">
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
		</div>
		<div class="overlay latest-event collapsed">
		  <div class="wrapper">
		    <button class="close">close</button>
		    <div class="content">
		      	<?php 
                  $year = substr(get_field('event_date'),2, 2);
                  $month = substr(get_field('event_date'),4, 2);
                  $day = substr(get_field('event_date'),6, 2);
                  $dateStr = $month . "." . $day . "." . $year;
                ?>
		      <h3 class="price"><?php the_field('event_price'); ?></h3>
		      <h3 class="date"><?php echo $dateStr; ?></h3>
		      <h4><?php the_field('event_title'); ?></h4>
		      <div class="hr-line"></div>
		      <div class="cycle-slideshow event-img block block-2-wide" 
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
		      <!-- <div class="img-wrapper block block-2-wide">
		      	<img src="<?php print IMAGES; ?>/latest-event/pedal-img-1.png">
		      </div> -->
		      <div class="copy block block-2-wide">
		      	<div class="description">
		      		<?php the_field('event_description'); ?>
		      	</div>
		      	<div class="location">
		      		<?php the_field('event_location'); ?>
		      	</div>
		      	<?php
		      		$dateNow = new DateTime("now");
          			$eventDate = date_create(get_field('event_date') );
		      		if ($eventDate > $dateNow) : ?>
		            	<a href="<?php echo get_field('event_url'); ?>" class="btn light" target="_blank">Sign Up!</a>
		            <?php
		          	else: 
		          	?>
		            	<a href="#" class="btn light" disabled="disabled">Sign Up!</a>
		          	<?php
		          	endif;
		      	?>
		      </div>
		      
		    </div>
		  </div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
