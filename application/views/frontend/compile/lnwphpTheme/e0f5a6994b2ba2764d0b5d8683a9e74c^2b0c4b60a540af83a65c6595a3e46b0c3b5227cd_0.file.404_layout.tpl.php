<?php
/* <!-- PIPe MCV & Smarty HHVM By lnwPHP.in.th & cii3.net -->  */


/* Modify For PIPe MVC HHVM By Smarty version 3.1.33, created on 2019-02-22 18:26:53
  from '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/sectionLayout/404_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c703eed2bb081_51180935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b0c4b60a540af83a65c6595a3e46b0c3b5227cd' => 
    array (
      0 => '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/sectionLayout/404_layout.tpl',
      1 => 1550860067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:viewLayout/error_view.tpl' => 1,
    'file:viewLayout/sidebar_view.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c703eed2bb081_51180935 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->_assignInScope('title', "lnwPHP");
}?>

<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
}

@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}
</style>


<div class="album py-5">
	<div class="container">

		<div class="row">
			<div class="col-md-8">

				<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:viewLayout/error_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
			</div>
			<div class="col-md-4">

				<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:viewLayout/sidebar_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>

		</div>
	</div>
</div>


<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
