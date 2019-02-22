{tplheader}
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="lnwPHP Movie V4">
	<meta name="generator" content="cii3.net">
	<title>{$title}</title>
	<link rel="icon" href="{$BASE_COMPONENT}static/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css">
	<link href="{$BASE_COMPONENT}css/album.css" rel="stylesheet">
	<link href="{$BASE_COMPONENT}css/lnwphp.css?v=4" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<header>
		<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
			<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">ปิด &times;</button>
			<div class="w3-dropdown-click">
				<button class="w3-button" onclick="myDropFunc('movieDrop')">หนัง <i class="fa fa-caret-down"></i></button>
				<div id="movieDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
					<a href="{$BASE_URL}s/super/{$nameAdmin}/movie/" class="w3-bar-item w3-button">รายการหนัง</a>
					<a href="{$BASE_URL}s/super/{$nameAdmin}/movie/add/" class="w3-bar-item w3-button">เพิ่มหนัง</a>
				</div>
			</div>

			<div class="w3-dropdown-click">
				<button class="w3-button" onclick="myDropFunc('adsDrop')">โฆษณา <i class="fa fa-caret-down"></i></button>
				<div id="adsDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
					<a href="{$BASE_URL}s/super/{$nameAdmin}/ads/" class="w3-bar-item w3-button">รายการโฆษณา</a>
					<a href="{$BASE_URL}s/super/{$nameAdmin}/ads/add/" class="w3-bar-item w3-button">เพิ่มโฆษณา</a>
				</div>
			</div>
			
			<a href="#" class="w3-bar-item w3-button">ตั้งค่าเว็บ</a>
		</div>
		<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
		<div class="navbar navbar-light bg-light shadow-sm p-0">
			<button class="w3-button w3-white w3-xxlarge pt-0 pb-0" onclick="w3_open()">&#9776;</button>
			<div class="container d-flex justify-content-between">
				<a href="{$BASE_URL}" class="navbar-brand d-flex align-items-center">
					<img class="logoSite" title="{$title}" alt="{$title}" src="https://www.lnwphp.in.th/templates/six/img/logo_color_new.png">
				</a>
				<a href="#" class="navbar-brand d-flex align-items-center">
					ADMIN LITE MODE
				</a>
			</div>
		</div>
	</header>
	<main role="main">