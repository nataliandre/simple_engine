<?php
/* Smarty version 3.1.28, created on 2016-02-11 22:49:59
  from "/home/umr1/artndev.space/www/view/elements/pagination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56bcf3f70c8870_25961916',
  'file_dependency' => 
  array (
    '982479735d9af1441b1c44109b7b1d61c74badd3' => 
    array (
      0 => '/home/umr1/artndev.space/www/view/elements/pagination.tpl',
      1 => 1455223797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bcf3f70c8870_25961916 ($_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
<ul class="pagination upper ">

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lang_0_saved_item = isset($_smarty_tpl->tpl_vars['lang']) ? $_smarty_tpl->tpl_vars['lang'] : false;
$_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable();
$__foreach_lang_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_lang_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$__foreach_lang_0_saved_local_item = $_smarty_tpl->tpl_vars['lang'];
?>
  <li class="<?php if ($_smarty_tpl->tpl_vars['lang']->value['title'] == $_smarty_tpl->tpl_vars['cur_lang']->value) {?> active <?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['lang']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_local_item;
}
}
if ($__foreach_lang_0_saved_item) {
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_item;
}
?>
 </ul>
 <?php }
}
}
