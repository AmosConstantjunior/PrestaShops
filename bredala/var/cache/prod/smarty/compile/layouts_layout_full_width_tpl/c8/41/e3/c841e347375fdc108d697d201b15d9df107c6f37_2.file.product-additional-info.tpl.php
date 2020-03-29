<?php
/* Smarty version 3.1.33, created on 2020-03-26 11:34:54
  from '/var/www/html/bredala/bredala/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7c854e724a44_91548411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c841e347375fdc108d697d201b15d9df107c6f37' => 
    array (
      0 => '/var/www/html/bredala/bredala/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1583241249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7c854e724a44_91548411 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
