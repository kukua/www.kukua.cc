<div class="donate <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h2><?= $title; ?></h2>
				<p><?= $text; ?></p>
			</div>
			<div class="col-sm-5 col-sm-offset-2">
				<h2>&nbsp;</h2>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="FUAX4VJVBRTQQ">
					<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
				</form>
				<?php if (isset($_GET["payment"])): ?>
					<h2>&nbsp;</h2>
					<?php if ($_GET["payment"] == "error"): ?>
						<p class="text-muted"><i class="glyphicon glyphicon-remove"></i> The donation has been cancelled.</p>
					<?php elseif ($_GET["payment"] == "success"): ?>
						<p class="text-muted"><i class="glyphicon glyphicon-ok"></i> Thanks you for your donation!</p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
