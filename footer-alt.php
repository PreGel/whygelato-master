					<footer class="footer-alt" role="contentinfo">
						<div id="inner-footer" class="row expanded">
							<div class="row foot-sections">
								<?php get_sidebar('footer'); ?>
								<div class="large-4 medium-6 columns">
							     <ul id="wg-footer-social-links">
							       <li><a href="https://twitter.com/WhyGelato"><i class="fi-social-twitter large"></i></a></li>
							       <li><a href="https://www.instagram.com/whygelato/"><i class="fi-social-instagram large"></i></a></li>		
							       <li><a href="https://www.facebook.com/WhyGelato/"><i class="fi-social-facebook large"></i></a></li>
							     </ul>
							    </div>
								<div class="large-4 medium-12 columns">
									<h4 class="widget-title">Explore</h4>
									<nav role="navigation">
										<?php joints_footer_links_alt(); ?>
									</nav>	
								</div>
								
								
								<!-- <div class="large-4 medium-6 small-12 columns end">
								 <div id="twitter-footer-container">
									    <h4 class="widget-title">Our Twitter</h4>
										<a class="twitter-timeline" data-theme="dark" data-width="300" data-height="500" data-link-color="#FDD26E" data-chrome="transparent noheader nofooter noborders scrollbar" href="https://twitter.com/WhyGelato">WhyGelato</a> 
										<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								  </div>		
								</div> -->
								
							</div>
							<div class="row">
								<div class="large-12 columns text-center">
									<p class="claimer">Why<strong>Gelato</strong>.com is brought to you by <a href="https://pregelamerica.com" target="blank">PreGel America</a> whose mission is to spread the love for gelato the world over.</p>
								</div>
								<div class="large-12 columns text-center">
										<?php joints_footer_secondary_links(); ?>
								</div>
								<div class="large-12 columns text-center">
									<p class="source-org copyright">4450 Fortune Ave NW Concord, NC 28027 &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
								</div>
							</div>
						</div> <!-- end #inner-footer -->

					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<!-- get the business panel content -->
		<?php get_template_part( 'parts/content', 'offcanvas-business' ); ?>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->