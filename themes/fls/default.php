<?php defined('C5_EXECUTE') or die("Access Denied.");?>

<?php $this->inc('elements/header.php'); ?>

	<div id="top" class="section top"> 
		<?php
			$a = new Area('Top Block');
			$a->display($c);
		?>
	</div>
	<div id="about" class="section about"> 
		<h2>About FLS</h2>
		<?php
			$a = new Area('About Block');
			$a->display($c);
		?>
	</div>
	<div id="services" class="section services"> 
		<h2>Our Services</h2>
		<?php
			$a = new Area('Services Block');
			$a->display($c);
		?>
	</div>
	<div id="gallery" class="section gallery"> 
		<h2>Our Work</h2>
		<?php
			$a = new Area('Gallery Block');
			$a->display($c);
		?>
	</div>
	<div id=contact"" class="section contact"> 
		<h2>Let's Connect</h2>
		<?php
			$a = new Area('Contact Block');
			$a->display($c);
		?>
	</div>

<?php  $this->inc('elements/footer.php'); ?>