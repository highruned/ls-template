<!doctype html>
<html lang="en">
	<head>
		<title><?= h($this->page->title) ?> - My Company</title>
		<meta charset="utf-8" />
		<meta name="keywords" content="<?= h($this->page->keywords) ?>" />
		<meta name="description" content="<?= h($this->page->description) ?>" />
		
		<link rel="shortcut icon" href="<?= root_url('/') ?>favicon.ico" />
		
		<link rel="stylesheet" type="text/css" href="<?= root_url('/') ?>resources/css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?= root_url('/') ?>resources/css/clear-fix.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?= root_url('/') ?>resources/css/grid-960-12.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?= root_url('/') ?>resources/css/main.css" media="screen" />
	
		<script type="text/javascript" src="resources/js/jquery-1.6.2.min.js"></script>
	
		<?= include_resources() ?>
		
		<? $this->render_head() ?>
	</head>
	<body class="<?= $body_class ?> <?= $this->render_partial('tool:detect_platform') ?>">
		<div id="wrapper">
			<div id="header">
				<? $this->render_partial('header'); ?>
			</div>
			<div id="content-wrapper" class="text-center">
				<div id="content" class="wrap-12 margin-center clear-fix">
					<div id="sidebar" class="col-2">
						<? $this->render_partial('sidebar'); ?>
					</div><!-- /#sidebar -->
					<div id="page" class="col-10">
						<? $this->render_page(); ?>
					</div><!-- /#page -->
				</div><!-- /#content -->
			</div><!-- /#content_wrapper -->
			<div id="footer" class="text-center">
				<? $this->render_partial('footer'); ?>
			</div>
		</div><!-- /#wrapper -->
	</body>
</html>