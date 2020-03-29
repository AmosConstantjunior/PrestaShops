<?php
/* Smarty version 3.1.33, created on 2020-03-26 11:30:11
  from '/var/www/html/bredala/bredala/admin128z8cjkh/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7c843364b9c1_90773530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57361709ac705491c1536854c64c342aedfad655' => 
    array (
      0 => '/var/www/html/bredala/bredala/admin128z8cjkh/themes/default/template/content.tpl',
      1 => 1583241249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7c843364b9c1_90773530 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
