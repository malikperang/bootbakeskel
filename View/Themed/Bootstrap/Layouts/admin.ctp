<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta(array("name"=>"viewport","content"=>"width=device-width,  initial-scale=1.0"));
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		// docs.css is only for this exapmple, remove for app dev
		echo $this->Html->css('backend');
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>

</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<h1>Admin</h1>
	<?php echo $this->element('menu/admin_top_menu'); ?>
	<div class="container-fluid">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>

	<footer class="container">

	</footer><!-- /container -->


	<?php echo '<pre>'.$this->element('sql_dump').'</pre>'; ?>
	<?php
		echo $this->Html->script('libs/jquery');
		echo $this->Html->script('libs/modernizr.min');
		echo $this->Html->script('libs/bootstrap.min');
		echo $this->fetch('script');
 	?>
</body>
</html>
