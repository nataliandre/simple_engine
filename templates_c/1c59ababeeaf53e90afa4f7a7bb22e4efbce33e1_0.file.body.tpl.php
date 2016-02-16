<?php
/* Smarty version 3.1.28, created on 2016-02-12 00:05:56
  from "/home/umr1/artndev.space/www/view/common/body.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56bd05c48c9280_83020931',
  'file_dependency' => 
  array (
    '1c59ababeeaf53e90afa4f7a7bb22e4efbce33e1' => 
    array (
      0 => '/home/umr1/artndev.space/www/view/common/body.tpl',
      1 => 1455228264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bd05c48c9280_83020931 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html><head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['styles']->value;?>

    <link rel="shortcut icon" href="custom/img/favicon.png" type="image/x-icon">
     <link rel="stylesheet" href="standart/css/style.css">
     <link rel="stylesheet" href="standart/css/bootstrap.css">

    <link rel="stylesheet" href="custom/css/style.css">
       <link rel="icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
	  
	  


<div class="bar">
	  
      <div class="logo"></div>
      
		<div class="padding-20 uppercase">
		<div class="list-group">
		  <a href="<?php echo ROUTE_MAIN;?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tab_active']->value == '') {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_title_main']->value;?>
</a>
		  <a href="<?php echo ROUTE_ARTICLES;?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tab_active']->value == T_A_ARTICLES) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_title_articles']->value;?>
</a>
		  <a href="<?php echo ROUTE_PROJECTS;?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tab_active']->value == T_A_PROJECTS) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_title_projects']->value;?>
</a>
		  <a href="<?php echo ROUTE_CONTACTS;?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tab_active']->value == T_A_CONTACTS) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_title_social']->value;?>
</a>
		  <a href="<?php echo ROUTE_SOCIAL;?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tab_active']->value == T_A_SOCIAL) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_title_contacts']->value;?>
</a>
		</div>
		</div>
       
		<p class="margin-"><b>Choose language</b></p>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>





    
      <footer>
        © 2015 artndev.space
      </footer>
    </div>
    
   <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "body", array (
  0 => 'block_164900921156bd05c48c4c11_84734321',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
 
    
    
    



</body></html>
<?php }
/* {block 'body'}  file:view/common/body.tpl */
function block_164900921156bd05c48c4c11_84734321($_smarty_tpl, $_blockParentStack) {
?>

   fff
   
   <?php
}
/* {/block 'body'} */
}
