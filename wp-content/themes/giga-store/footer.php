<?php if ( is_active_sidebar( 'giga-store-footer-area' ) ) { ?>
	<div class="footer-widgets"> 
		<div class="container">		
			<div id="content-footer-section" class="row clearfix">
				<?php dynamic_sidebar( 'giga-store-footer-area' ) ?>
			</div>
		</div>
	</div>	
<?php } ?>
<footer id="colophon" class="rsrc-footer" role="contentinfo">
	<div class="container">  
		<div class="row">
					<div id="footerLink">
						<p class="text-center">
							<a href="http://www.chinapudi.cn/" target="_blank" >上海浦迪</a> <b>|</b>
							<a href="http://www.znkia.cn/" target="_blank" >正基</a> <b>|</b>
							<a href="http://www.dasen.cn/" target="_blank" >苏州大森</a>
							<b>|</b>
						</p>
					</div>
				</div>
	</div>       
</footer> 
<p id="back-top">
	<a href="#top"><span></span></a>
</p>
<!-- end main container -->
</div>
<nav id="menu" class="off-canvas-menu">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'main_menu',
		'container'		 => false,
	) );
	?>
</nav>
<?php wp_footer(); ?>
<div id="contactUs" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request a Free Quote</h4>
      </div>
      <div class="modal-body">
		<?php echo do_shortcode( '[contact-form-7 id="244" title="Contact form 1"]' ); ?>
      </div>
    </div>
  </div>
</div>
</body>
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</html>
