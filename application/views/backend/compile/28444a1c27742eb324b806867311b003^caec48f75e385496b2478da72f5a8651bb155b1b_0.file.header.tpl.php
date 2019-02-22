<?php
/* <!-- PIPe MCV & Smarty HHVM By lnwPHP.in.th & cii3.net -->  */


/* Modify For PIPe MVC HHVM By Smarty version 3.1.33, created on 2019-02-22 18:35:30
  from '/home/tckck/tc.kck.co.th/public_html/application/views/backend/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7040f29d6749_46785228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caec48f75e385496b2478da72f5a8651bb155b1b' => 
    array (
      0 => '/home/tckck/tc.kck.co.th/public_html/application/views/backend/templates/header.tpl',
      1 => 1550860530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7040f29d6749_46785228 (Smarty_Internal_Template $_smarty_tpl) {
echo '<!-- lnwPHP.in.th & cii3.net compiled at 2019-02-22 18:35:30 -->';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="lnwPHP Movie V4">
	<meta name="generator" content="cii3.net">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_COMPONENT']->value;?>
static/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_COMPONENT']->value;?>
css/album.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_COMPONENT']->value;?>
css/lnwphp.css?v=4" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<header>
		<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
			<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">ปิด &times;</button>
			<div class="w3-dropdown-click">
				<button class="w3-button" onclick="myDropFunc('movieDrop')">หนัง <i class="fa fa-caret-down"></i></button>
				<div id="movieDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
s/super/<?php echo $_smarty_tpl->tpl_vars['nameAdmin']->value;?>
/movie/" class="w3-bar-item w3-button">รายการหนัง</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
s/super/<?php echo $_smarty_tpl->tpl_vars['nameAdmin']->value;?>
/movie/add/" class="w3-bar-item w3-button">เพิ่มหนัง</a>
				</div>
			</div>

			<div class="w3-dropdown-click">
				<button class="w3-button" onclick="myDropFunc('adsDrop')">โฆษณา <i class="fa fa-caret-down"></i></button>
				<div id="adsDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
s/super/<?php echo $_smarty_tpl->tpl_vars['nameAdmin']->value;?>
/ads/" class="w3-bar-item w3-button">รายการโฆษณา</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
s/super/<?php echo $_smarty_tpl->tpl_vars['nameAdmin']->value;?>
/ads/add/" class="w3-bar-item w3-button">เพิ่มโฆษณา</a>
				</div>
			</div>
			
			<a href="#" class="w3-bar-item w3-button">ตั้งค่าเว็บ</a>
		</div>
		<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
		<div class="navbar navbar-light bg-light shadow-sm p-0">
			<button class="w3-button w3-white w3-xxlarge pt-0 pb-0" onclick="w3_open()">&#9776;</button>
			<div class="container d-flex justify-content-between">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" class="navbar-brand d-flex align-items-center">
					<img class="logoSite" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" src="https://www.lnwphp.in.th/templates/six/img/logo_color_new.png">
				</a>
				<a href="#" class="navbar-brand d-flex align-items-center">
					ADMIN LITE MODE
				</a>
			</div>
		</div>
	</header>
	<main role="main"><?php }
}
