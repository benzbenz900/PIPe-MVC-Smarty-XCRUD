<?php
/* <!-- PIPe MCV & Smarty HHVM By lnwPHP.in.th & cii3.net -->  */


/* Modify For PIPe MVC HHVM By Smarty version 3.1.33, created on 2019-02-22 18:21:29
  from '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/viewLayout/sidebar_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c703da9c08052_04775708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9496308f9c48db2704b817548490d0a1a0d7d72' => 
    array (
      0 => '/home/tckck/tc.kck.co.th/public_html/application/views/frontend/templates/lnwphpTheme/viewLayout/sidebar_view.tpl',
      1 => 1550858126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c703da9c08052_04775708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/tckck/tc.kck.co.th/public_html/application/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),1=>array('file'=>'/home/tckck/tc.kck.co.th/public_html/application/libs/plugins/function.html_select_time.php','function'=>'smarty_function_html_select_time',),2=>array('file'=>'/home/tckck/tc.kck.co.th/public_html/application/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
PIPe MVC&Smarty3
<br>

This is an example of the html_select_date function:

<form>
<?php echo smarty_function_html_select_date(array('start_year'=>1998,'end_year'=>2010),$_smarty_tpl);?>

</form>

This is an example of the html_select_time function:

<form>
<?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

</form>

This is an example of the html_options function:

<form>
<select name=states>
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_values']->value,'selected'=>$_smarty_tpl->tpl_vars['option_selected']->value,'output'=>$_smarty_tpl->tpl_vars['option_output']->value),$_smarty_tpl);?>

</select>
</form><?php }
}
