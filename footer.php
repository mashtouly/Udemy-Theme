	<!-- Footer
    ============================================= -->
	<footer id="footer" class="dark">

		<!-- Copyrights
        ============================================= -->
		<div id="copyrights">

			<div class="container clearfix">

				<div class="col_half">
					<?php
						if(get_theme_mod('ud_copyright')):
					 		echo get_theme_mod('ud_copyright') ;
						endif;
					?>
					<div class="copyright-links">
					<?php
						if(get_theme_mod('ud_term')):
					?>
					<a href="<?php the_permalink(get_theme_mod('ud_term')) ?>">Terms of Use</a>  
					<?php
						endif;
					?>
					<?php
						if(get_theme_mod('ud_privacy')):
					?>
					/ <a href="<?php the_permalink(get_theme_mod('ud_privacy')) ?>">Privacy Policy</a>
					<?php
						endif;
					?>
						
						
					</div>
				</div>

				<div class="col_half col_last tright">
					<div class="fright clearfix">
					<?php
						if(get_theme_mod('ud_facebook_handle')){
					?>
						<a href="<?php echo get_theme_mod('ud_facebook_handle')?>" class="social-icon si-small si-borderless si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
					<?php
						}
					?>
					<?php
						if(get_theme_mod('ud_twitter_handle')){
					?>
						<a href="<?php echo get_theme_mod('ud_twitter_handle')?>" class="social-icon si-small si-borderless si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

					</div>
					<?php
						}
					?>
					<div class="clear"></div>

					<i class="icon-envelope2"></i> <?php if(get_theme_mod('ud_mail_handle')) {echo get_theme_mod('ud_mail_handle') ;} ?> <span class="middot">&middot;</span> <i class="icon-headphones"></i> +2<?php if(get_theme_mod('ud_phone_handle')) {echo get_theme_mod('ud_phone_handle') ;} ?>
				</div>

			</div>

		</div><!-- #copyrights end -->

	</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<?php wp_footer() ?>

</body>
</html>