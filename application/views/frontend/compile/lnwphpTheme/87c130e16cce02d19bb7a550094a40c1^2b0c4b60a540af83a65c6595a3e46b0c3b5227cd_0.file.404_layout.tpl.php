<?php
/* <!-- PIPe MCV & Smarty HHVM By lnwPHP.in.th & cii3.net -->  */


/* Modify For PIPe MVC HHVM By Smarty version 3.1.33, created on 2019-02-22 17:46:54
  from '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/sectionLayout/404_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c70358e07fc63_65967773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b0c4b60a540af83a65c6595a3e46b0c3b5227cd' => 
    array (
      0 => '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/sectionLayout/404_layout.tpl',
      1 => 1550331429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:viewLayout/error_view.tpl' => 1,
    'file:viewLayout/sidebar404_view.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c70358e07fc63_65967773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/tckck/tc.kck.co.th/public_html/application/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
			<div class="col-md-<?php echo $_smarty_tpl->tpl_vars['settingSite']->value['main_block'];?>
">

				<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:viewLayout/error_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" class="navbar-brand d-flex align-items-center">
					<img class="img-fluid m-auto" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['settingSite']->value['logo'];?>
">
				</a>

				
				<h4>ดูเรื่องอื่นๆ จากหมวดหมู่ ข้างล่างนี้</h4>
				<div class="list-group overflow-hidden mb-2">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorySite']->value, 'categorySiteItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorySiteItem']->value) {
?>
					<a class="list-group-item list-group-item-action" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
c/<?php echo $_smarty_tpl->tpl_vars['categorySiteItem']->value['id'];?>
/<?php echo mb_strtolower(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categorySiteItem']->value['name'],' ','-'),'/','-'), 'UTF-8');?>
/" class="text-white"><?php echo $_smarty_tpl->tpl_vars['categorySiteItem']->value['name'];?>
</a>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>

			</div>
			<div class="col-md-<?php echo $_smarty_tpl->tpl_vars['settingSite']->value['slide_block'];?>
">

				<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:viewLayout/sidebar404_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>

		</div>
	</div>
</div>


<?php echo "<!-- lnwPHP.in.th & cii3.net -->";
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
