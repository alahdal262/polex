<?php
/* Smarty version 4.3.0, created on 2023-01-15 14:40:33
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/ajax.live.conversations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c410619bd7e9_13095267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c265785a53e300b9d460c4658da36cb5b30279d' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/ajax.live.conversations.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_63c410619bd7e9_13095267 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conversations']->value, 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
