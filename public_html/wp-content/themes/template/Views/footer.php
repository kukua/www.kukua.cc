	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-6 js-match-height">
					<div class="u-text-left item">
						<div class="social">
							<div class="icon">
							</div>
							<div class="text">
								<?= \Template\Settings\Menu::renderList("footer-menu"); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 js-match-height">
					<div class="u-text-center item">
						<div class="social">
							<div class="icon">
								<img src="<?= $base ; ?>/assets/icons/grocerystore.svg" class="img-responsive">
							</div>
							<div class="text">
								<?= $footer->getStreet(); ?>,
								<?= $footer->getPostalcode(); ?><br>
								<?= $footer->getCity(); ?><br>
								The Netherlands
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 js-match-height">
					<div class="u-text-center item">
						<div class="social">
							<div class="icon">
								<img src="<?= $base ; ?>/assets/icons/mail.svg" class="img-responsive">
							</div>
							<div class="text">
								<?= $footer->getEmail(); ?><br>
								<?= $footer->getPhoneNumber(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 js-match-height">
					<div class="u-text-center item">
						<div class="social">
							<div class="icon">
								<a href="<?= $footer->getFacebook(); ?>" target="_blank">
									<img src="<?= $base ; ?>/assets/img/facebook_icon.png" class="img-responsive">
								</a>
							</div>
							<div class="icon">
								<a href="<?= $footer->getLinkedin(); ?>" target="_blank">
									<img src="<?= $base ; ?>/assets/img/linkedin_icon.png" class="img-responsive">
								</a>
							</div>
							<div class="icon">
								<a href="<?= $footer->getTwitter(); ?>" target="_blank">
									<img src="<?= $base ; ?>/assets/img/twitter_icon.png" class="img-responsive">
								</a>
							</div>
							<div class="icon">
								<a href="http://www.github.com/kukua" target="_blank">
									<img src="<?= $base ; ?>/assets/img/github_icon.png" class="img-responsive" style="opacity:0.5">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
    	    <div class="row">
    	        <div class="col-xs-12">
    	            <div class="u-text-center">
    	                &copy; 2012 - <?php echo date('Y'); ?> <a href="http://www.kukua.cc">kukua.cc</a>
    	            </div>
    	        </div>
    	    </div>
    	</div>
    </div>
	<script src="<?= $base; ?>/assets/dist/main.min.js"></script>
</body>
</html>
