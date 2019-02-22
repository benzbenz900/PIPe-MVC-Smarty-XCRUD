<?php
/* <!-- PIPe MCV & Smarty HHVM By lnwPHP.in.th & cii3.net -->  */


/* Modify For PIPe MVC HHVM By Smarty version 3.1.33, created on 2019-02-22 18:33:36
  from '/home/tckck/tc.kck.co.th/public_html/application/views/backend/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c704080690674_52737576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f4a4aa5d6612aa87e17d0b6a0fba3cf9b42032' => 
    array (
      0 => '/home/tckck/tc.kck.co.th/public_html/application/views/backend/templates/footer.tpl',
      1 => 1549775555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c704080690674_52737576 (Smarty_Internal_Template $_smarty_tpl) {
?></main>

<footer class="text-muted">
	<div class="container">
		<p class="float-right">
			<a href="#">Back to top</a>
		</p>
		<p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
		<p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.2/getting-started/introduction/">getting started guide</a>.</p>
	</div>
</footer>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php echo '<script'; ?>
 type="text/javascript">
	function w3_open() {
		document.getElementById("mySidebar").style.display = "block";
		document.getElementById("myOverlay").style.display = "block";
	}

	function w3_close() {
		document.getElementById("mySidebar").style.display = "none";
		document.getElementById("myOverlay").style.display = "none";
	}

	function myDropFunc(id) {
		var x = document.getElementById(id);
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
			x.previousElementSibling.className += " w3-green";
		} else { 
			x.className = x.className.replace(" w3-show", "");
			x.previousElementSibling.className = 
			x.previousElementSibling.className.replace(" w3-green", "");
		}
	}
<?php echo '</script'; ?>
>


</body>
</html><?php }
}
