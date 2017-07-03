<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tourist
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main" role="main">

		<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
      ?>
      <section id="what">
        <h1>What's Tourist?</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
        </p>
      </section>
      <section id="how">
        <h1>How does it work?</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
        </p>
        <table class="step left first">
					<tr>
						<td class="title-col">
		          <div class="step-number">1</div>
		          <div class="step-title">Your home screen</div>
							<div class="step-description-desktop">
								<strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
							</div>
							<div class="curved-line-left"></div>
						</td>
						<td class="image-col" rowspan="2">
							<div class="step-image"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/06/home-portrait-e1497739311850.png" /></div>
						</td>
					</tr>
					<tr>
          	<td class="step-description">
							<strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
							<div class="straight-line"></div>
						</td>
					</tr>
        </table>
				<table class="step right first">
					<tr>
						<td class="title-col">
							<div class="step-number">2</div>
		          <div class="step-title">Request a tour</div>
							<div class="step-description-desktop"><strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.</div>
							<div class="curved-line-right"></div>
						</td>
						<td class="image-col" rowspan="2">
							<div class="step-image"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/06/enter-details-portrait-e1497741030182.png" /></div>
						</td>
					</tr>
					<tr>
						<td class="step-description">
							<strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
							<div class="straight-line"></div>
						</td>
					</tr>
				</table>
				<table class="step left last">
					<tr>
						<td class="title-col">
							<div class="step-number">3</div>
		          <div class="step-title">Chat with a guide</div>
							<div class="step-description-desktop"><strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.</div>
							<div class="curved-line-left"></div>
						</td>
						<td class="image-col" rowspan="2">
							<div class="step-image"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/06/request-tour-portrait-e1497741084664.png" /></div>
						</td>
					</tr>
					<tr>
						<td class="step-description">
							<strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
							<div class="straight-line"></div>
						</td>
					</tr>
				</table>
				<table class="step right last">
					<tr>
						<td class="title-col">
							<div class="step-number">4</div>
		          <div class="step-title">Take your tour!</div>
							<div class="step-description-desktop"><strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.</div>
						</td>
						<td class="image-col" rowspan="2">
							<div class="step-image"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/06/uber-portrait-e1497740941565.png" /></div>
						</td>
					</tr>
					<tr>
						<td class="step-description">
							<strong>Lorem ipsum dolor sit amet</strong><br> consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
						</td>
					</tr>
				</table>
      </section>
      <section id="guide">
        <h1>Become a Guide</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
        </p>
        <video controls poster="http://shiftone.co.za/shiftone/wp-content/uploads/2016/09/o-TOURIST-facebook.jpg">
          <source src="movie.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <button>Become a Guide</button>
      </section>
      <section id="refer">
        <h1>Referrals</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum tempus diam, tristique elementum est.
        </p>
        <video controls poster="http://shiftone.co.za/shiftone/wp-content/uploads/2016/09/o-TOURIST-facebook.jpg">
          <source src="movie.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <button>Send Referrals</button>
      </section>
			<section class="follow">
				<h2>Follow Us!</h2>
				<div class="social-icons">
					<span class="social-icon">
						<a href="" target="_blank"><i class="fa fa-facebook-official"></i></a>
					</span>
					<span class="social-icon">
						<a href="" target="_blank"><i class="fa fa-snapchat-ghost"></i></a>
					</span>
					<span class="social-icon">
						<a href="" target="_blank"><i class="fa fa-twitter"></i></a>
					</span>
					<span class="social-icon">
						<a href="" target="_blank"><i class="fa fa-instagram"></i></a>
					</span>
					<span class="social-icon">
						<a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
					</span>
				</div>
				<!-- <?php dynamic_sidebar( 'sidebar-2' ); ?> -->
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
