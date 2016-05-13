<footer id="colophon" class="site-footer" role="contentinfo">
	<?php include '../template-parts/footer/footer-cta.php'; ?>
		<div class="footer-body">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-9 footer-nav">
						<div class="row">
							<div class="col-md-3 hidden-xs hidden-sm">
								<a class="logo" href="">
									<img width="150" src="/assets/images/logo.png" />
								</a>
							</div>
							<div class="col-sm-4 col-md-3">
								<ul class="menu">
									<li><a href="#">About</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Blog</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-md-3">
								<ul class="menu">
									<li><a href="#">Meet the Team</a></li>
									<li><a href="#">Random Page</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-md-3">
								<ul class="menu">
									<li><a href="#">Another Random Page</a></li>
									<li><a href="#">Random Page</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-3">
						<?php include '../template-parts/footer/footer-social.php'; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-close">
			<div class="container">
				<p>&copy; Businesstastic 2015. All rights reserved.</p>
				<p class="bt-credits">Site Designed by <a href="http://businesstastic.com">Businesstastic</a></p>
			</div>
		</div>
	</footer>


</div><!-- #page -->



</body>
<script type="text/javascript">
	//delete this and script tag when done editing
	jQuery(document).ready(function($){
		$('.carousel').carousel({
			interval: 4000,
		});
	})
</script>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.10.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
<script>
$(document).ready(function(){
  var height = $('.content-center').height()
      $('.sidebar').height(height)
   });
</script>
</html>
