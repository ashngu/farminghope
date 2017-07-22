<?php /* Template Name: Home */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="intro" class="section">
				<div class="left">
					<div id="intro-text">
						<p>
						We’re turning the soup kitchen on its head. </p>
						<p>
							We empower people out of homelessness through culinary training and employment in our community gardens and dinners.
						</p>
					</div>

					<div class="button-container">
						<a href="../donate">
							<div class="default-button"> Support our mission</div>
						</a>
					</div>
				</div>

				<div class="right">
					<div class="video-container">
						<iframe frameBorder="0" width="560" height="315" src="https://www.youtube.com/embed/1EccxIhHtl0?rel=0&autoplay=1&cc_load_policy=1&controls=0" ccframeborder="0" volume="0" allowfullscreen></iframe>
					</div>
				</div>
			
			</section>

			<section id="events" class="section">
				<div class="left grey">
					<div class="table">
							<div class="squareImage tableCell">
								<img src="<?php bloginfo('template_url')?>/images/popupdinners.jpg">
							</div>
							<div class="rightOfImage tableCell">
								<h1>Pop-up Dinners</h1>
								<p><strong>Monthly dinners</br>
								In San Francisco
								</strong></p>

								<p>The Farming Hope team regularly cooks and hosts four-course dinners featuring seasonal produce from our gardens. Your attendance allows us to hire four unhoused individuals working their way to self-sustainability.
								</p>
								<div class="button-container">
									<a href="https://eatfeastly.com/account/profile/kevin.m@@9b145fa4/">
										<div class="default-button"> Buy Feastly tickets</div>
									</a>
								</div>
							</div>
					</div>
				</div>
				<div class="right grey">
					<div class="table">
							<div class="squareImage tableCell">
								<img src="<?php bloginfo('template_url')?>/images/farmersmarket.jpg">
							</div>
							<div class="rightOfImage tableCell">
								<h1>Farmers' Market</h1>
								<p><strong>
									Every Wednesday</br>
									11:00am-1:30pm</br>
									Heart of the City Farmers’ Market, SF
								</strong></p>

								<p> Visit our stand at the market. Our team serves up delicious gourmet and vegetarian sandwiches, soup, salad, desserts and tea. Featuring produce from partner	gardens where we work, this stand allows us to expand our culinary training and employment programs.</p>
							</div>
					</div>
				</div>
			</section>

			<section class="quote" class="section">
				<div class="table">
					<div class="tableCell squareImage">
						<img src="<?php bloginfo('template_url')?>/images/phillip.jpg">
					</div>
					<div class="rightOfImage tableCell">
						<h2>“This is therapy, the work. It gives me peace, and the space to think about my schedule... I said to myself I have a body and I'm going to use it."</h2>

						<p>— Phillip, a Farming Hope SF team leader talks about the therapeutic benefits of gardening and community involvement while watering lettuce he just planted.</p>
						<div class="button-container">
							<a href="../our-team">
								<div class="default-button green"> Meet our team</div>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="help">
				<div class="left">
					<h1>Ways to get involved</h1>
					<div class="table">
						<div class="tableCell squareImage">
							<img src="<?php bloginfo('template_url')?>/images/volunteer.jpg">
						</div>
						<div class="rightOfImage tableCell">
							<p>
								<strong>Join our volunteer squad</strong>
								Come wear a corn shirt and volunteer at our farmers' market stand, pop-up meals, and gardens.
							</p>
							<p>
								<strong>Join the team</strong>
								We're looking for committed, part-time volunteers for as life coaching and garden coordinating.
							</p>
							<div class="button-container">
								<a href="../volunteer">
									<div class="default-button green"> Get Involved</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="right">
					<h1>Join the Farming Hope family</h1>
					<p>
						Sign up for updates on dinners, volunteering, and the positive impact we’re having in our community.
					</p>
					<p>
					<script type="text/javascript">(function() {
						if (!window.mc4wp) {
							window.mc4wp = {
								listeners: [],
								forms    : {
									on: function (event, callback) {
										window.mc4wp.listeners.push({
											event   : event,
											callback: callback
										});
									}
								}
							}
						}
					})();					
					</script><!-- MailChimp for WordPress v4.1.5 - https://wordpress.org/plugins/mailchimp-for-wp/ --></p>
					<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-73" method="post" data-id="73" data-name="Get updates from Farming Hope" >
					<div class="mc4wp-form-fields">
					<p>
						<input type="email" name="EMAIL" placeholder="Your email address" required  size="30"/>
					</p>
					<p>
					    <input type="text" name="FNAME" placeholder="First Name" required size="30"/>
					</p>
					<p>
					    <input type="text" name="LNAME" placeholder="Last Name" required size="30">
					</p>
					<p>
					    <textarea name="INTEREST" placeholder="What got you interested in Farming Hope?" required size="30"></textarea>
					</p>
					<p>
					    <input type="submit" value="Subscribe">
					</p>
					<div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></div>
					<p><input type="hidden" name="_mc4wp_timestamp" value="1500712574" /><input type="hidden" name="_mc4wp_form_id" value="73" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /></div>
					<div class="mc4wp-response"></div>
					</form>
					<p><!-- / MailChimp for WordPress Plugin --></p>
				</div>
			</section>

			
			<section class="supportSection section">
			<div class="support">
				<h1 style="text-align: center;">Support our mission</h1>
				<p>
					<strong>Give once</strong></br>
					A donation of $45 supports the continued employment of one of our unhoused team members through one pop-up meal.
				</p>
				<p>
					<strong>Give monthly</strong></br>
					You'll become part of our Support Team helping empower unhoused and low-income people in our community.
				</p>

				<p>Donations are made to Bountiful Churchyards, our sponsoring non-profit organization</p>

				<div class="button-container">
					<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XYUWNVAZYVJUQ">
						<div class="default-button"> Donate with Paypal</div>
					</a>
				</div>
				</div>
			</section>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
