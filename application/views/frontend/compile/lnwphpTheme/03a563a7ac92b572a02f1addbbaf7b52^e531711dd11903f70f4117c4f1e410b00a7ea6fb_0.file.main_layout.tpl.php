<?php
/* <!-- PIPe MCV & Smarty HHVM By lnwPHP.in.th & cii3.net -->  */


/* Modify For PIPe MVC HHVM By Smarty version 3.1.33, created on 2019-02-22 18:21:29
  from '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/sectionLayout/main_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c703da9bc5088_42529640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e531711dd11903f70f4117c4f1e410b00a7ea6fb' => 
    array (
      0 => '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/sectionLayout/main_layout.tpl',
      1 => 1550858546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:viewLayout/main_view.tpl' => 1,
    'file:viewLayout/".((string)$_smarty_tpl->tpl_vars[\'pageview\']->value)."_view.tpl' => 1,
    'file:viewLayout/sidebar_view.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c703da9bc5088_42529640 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->_assignInScope('title', "lnwPHP");
}?>

<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="album py-5">
	<div class="container">

		<div class="row">
			<div class="col-md-8">

				<?php if (!isset($_smarty_tpl->tpl_vars['pageview']->value)) {?>

				<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:viewLayout/main_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } else { ?>

				<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:viewLayout/".((string)$_smarty_tpl->tpl_vars['pageview']->value)."_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				
				<?php }?>
				

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
