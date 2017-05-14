<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

	</div><!-- .site-inner -->

</div><!-- .site -->

<div id="footer">

	<div class="content">

			<footer id="colophon" class="site-footer" role="contentinfo">

						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>


						<div class="copyright">&copy;2016 Big Rock Press</div>
					
						<div class="icons connect">
						<p>Connect:</p>
							<a href="https://www.facebook.com/lindagraceniagara/" title="" class="genericon genericon-facebook"></a>
							<a href="/feed/" title="" class="genericon genericon-feed"></a>
							<a href="/contact/" title="" class="genericon genericon-mail"></a>
						</div>

					</footer><!-- #colophon -->
						
		<?php wp_footer(); ?>
	
	</div><!-- /content -->

</div><!-- #footer --> 

</body>
	
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-17887842-8', 'auto');
	ga('send', 'pageview');

	</script>

</html>
