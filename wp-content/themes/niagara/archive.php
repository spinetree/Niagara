<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title test">', '</h1>' );
					?>
				</header><!-- .page-header -->

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<header class="entry-header">
								<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
									<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
								<?php endif; ?>

								<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
							</header><!-- .entry-header -->

							<div class="flexbox">
								<div class="thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
									
								<div class="excerpt">
									<?php the_excerpt();?>
								</div><!-- .entry-content -->

								<div class="morelink linkbutton">
									<a href=" <?php echo esc_url( get_permalink() );?> ">Full Article</a>
								</div>
							</div>

						</article><!-- #post-## -->

			<?	endwhile;
			endif;
			?>
			
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
