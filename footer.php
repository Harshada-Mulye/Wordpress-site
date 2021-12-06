
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
					<?php dynamic_sidebar( 'footer1' ); ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php dynamic_sidebar( 'footer2' ); ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1" id="site-navigation">
						<h4 class="social-media">Social media</h4>
						<ul class="footer-menu">
						<li><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></li>
</ul>
						
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright © Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>
<?php wp_footer();

?>


</body>
</html>

