<!DOCTYPE html>
<html lang="en" class="dark">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="color-scheme" content="dark light">

	<title>ODE Admin Template</title>

	<link rel="stylesheet" href="assets/css/admin.min.css?v=<?=filemtime('assets/css/admin.min.css')?>">
	<link rel="stylesheet" href="assets/css/admin.dev.css?v=<?=filemtime('assets/css/admin.dev.css')?>">

	<script src="assets/js/docready.js"></script>
</head>
<body>

<nav class="navbar navbar-expand fixed-top navbar-light">
	<div class="container-fluid">
		<a id="logo" class="navbar-brand" href="/" target="_blank">
			<img src="assets/img/logo.png" alt="" class="img-fluid">
		</a>
		
		<button id="sidebar-toggler" class="panel-toggler">
			<i class="bi bi-layout-sidebar"></i>
		</button>

		<div class="collapse navbar-collapse" id="topnav">
			<ul class="navbar-nav ms-auto me-1 px-3">
				<li class="nav-item"><a class="nav-link" href="javascript:void(0)" id="darkmode-switcher" title="Dark/light theme"><i class="fa fa-toggle-on" aria-hidden="true"></i></a></li>
				<!-- <li class="nav-item"><a class="nav-link" href="#profile" data-oa>Profile</a></li> -->
				<li class="nav-item"><a class="nav-link text-end" href="#signout">Sign out</a></li>
			</ul>
		</div>

		<button id="aside-menu-toggler" class="panel-toggler px-3">
			<i class="bi bi-layout-sidebar-reverse"></i>
		</button>
	</div>
</nav>

<div id="sidebar-main-wrapper" class="d-flex">
	<div id="sidebar" class="navbar-light">
		<ul>
			<li class="nav-item">
				<a href="#action1" class="nav-link">
					<i class="bi bi-globe nav-item-icon"></i>
					Action 1
				</a>
			</li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action3" class="nav-link active">Action 3</a></li>
			<li class="sidebar-dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="sidebardropdown">
					<!-- <i class="fa fa-ellipsis-v" aria-hidden="true"></i> -->
					Dropdown toggle
				</a>
				<div class="sidebar-dropdown-menu">
					<a href="#dropdown1" class="nav-link">&bull; Dropdown item 1</a>
					<a href="#dropdown2" class="nav-link">&bull; Dropdown item 2</a>
				</div>
			</li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
			<li class="nav-item"><a href="#action2" class="nav-link">Action 2</a></li>
		</ul>

		<button id="sidebar-minifier" class="btn btn-secondary" type="button"><i class="bi bi-chevron-left"></i></button>
	</div>
	<main id="main" class="flex-fill p-3">
		<div style="height: 75vh;">Content 1</div>
		<div style="height: 75vh;" id="c2">Content 2</div>
		<div style="height: 75vh;">
			<a href="#c2">Scroll to Content 2</a>
		</div>
	</main>
</div>

<div id="aside-panel" class="p-3">
	Бокова панель
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/admin.js?v=<?=filemtime('assets/js/admin.js')?>"></script>

<script src="node_modules/bootstrap-dark-5/dist/js/darkmode.min.js"></script>
<script>docReady(() => document.querySelector('#darkmode-switcher').onclick = e => darkmode.toggleDarkMode())</script>

<script src="assets/vanilla-notify/vanilla-notify.min.js"></script>
<?php
$msgbox = [
	[
		'text'	=>	'Message',
		'title'	=>	'Title!',
		'function'	=>	'notify'
	],
];
?>
<script>
docReady(() => {
	var alerts = <?=json_encode($msgbox)?>;
	Array.from(alerts).forEach(alert => {
		vNotify[alert.function]({text: alert.text, title: alert.title, fadeInDuration: 10, position: vNotify.positionOption.bottomRight})
	})
})
</script>

</body>
</html>
