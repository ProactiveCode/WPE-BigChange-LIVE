<?php
/**
* Template Name: Email marketing
*/


get_header('ppc'); 

$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

	<main id="primary" class="site-main email-marketing <?php if (strpos($url,'thank-you') !== false) { echo 'email-marketing--thanks'; } ?>">
		<div class="em__hero container">
			<div class="em__hero-wrapper">
				<div class="em__hero-title">
				<?php if (strpos($url,'thank-you') !== false) { ?>
					<h1>THANK YOU!</h1>
					<p>You can download the report below.</p>
					<a href="https://www.bigchange.com/wp-content/uploads/2021/05/BigChange-Mobile-Working-Guide-May-2021.pdf" class="btn-normal btn-normal--yellow">Download</a>
				<?php } else { ?>
					<h1><span class="new-blue">BE IN CONTROL</span>EASE THE CHALLENGES OF MANAGING A<span class="dark-blue">FIELD BASED WORKFORCE</span></h1>
					<a href="#em-form" class="btn-normal btn-normal--orange">Download your free guide now</a>
				<?php } ?>
				</div>
				<?php if (strpos($url,'thank-you') == false) { ?>
					<div class="em__hero-image">
						<img src="https://www.bigchange.com/wp-content/uploads/2021/06/brochure-cut.png" alt="BigChange brochures">
					</div>
				<?php } ?>
			</div>
		</div>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	
	</main><!-- #primary -->

<?php
get_footer();
