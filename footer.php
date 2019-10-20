<footer id="footer" class="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

<div id="inner-footer" class="wrap">

	<div class="footer-section">
		<div class="footer-logo-section">
			<div id="logo" itemprop="logo">
				<a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url"
					title="<?php bloginfo('name'); ?>">
					<img src="<?php echo get_theme_file_uri(); ?>/library/images/Dirty-Martini-Logo.png" itemprop="logo"
						alt="site logo" />
				</a>
			</div>


			<div class='footer-logos'>
				<img src="<?php echo get_theme_file_uri(); ?>/library/images/apple_touch_icon.png" itemprop="logo"
					alt="site logo" />
			</div>
		</div>


		<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
	</div>

	<div class="footer-text">
		<?php get_sidebar('footer-info'); ?>
	</div>

</div>


</footer>

</div>

<?php // all js scripts are loaded in library/functions.php 
?>
<?php wp_footer(); ?>

</body>

</html> <!-- This is the end. My only friend. -->