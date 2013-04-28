<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">

<head>

<?php   Loader::element('header_required'); ?>

<!-- Site Header Content //-->

<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/normalize.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('typography.css')?>" />

</head>

<body>

<!--start main container -->

<div id="main-container" class="container">

	<div id="header" class="section">

		<?php  
		$a = new GlobalArea('Header Nav');
		$a->display();
		?>
	
	</div>


