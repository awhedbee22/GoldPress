			</div> <!-- /#main-content -->
		</div> <!-- /.wrapper -->

			<!-- footer -->
			<footer id="footer" class="global-footer footer" role="contentinfo">

				<!-- Footer Menu -->
				<ul>
					<?php html5blank_nav('footer-menu'); ?>
				</ul>

				<!-- Copyright Statement -->
				<div class="copyright">
					Copyright &copy; <?php echo date('Y'); ?> State of California
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

			<!-- Extra Decorative Content -->
			<div class="decoration-last">&nbsp;</div>


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', '<?php echo get_option('googleanalytics'); ?>', '<?php echo get_option('mydomain'); ?>');
		ga('send', 'pageview');
		</script>

		<!-- FOR DEV ONLY -->
		<a href="http://localhost/wordpress/wp-admin" style="position: absolute; bottom:0; right:0">Admin</a>
	</body>
</html>
