<?php
/* Smarty version 4.3.0, created on 2023-01-20 23:11:04
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.blocking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cb1f8827cc89_16029730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '034a0c97b29a82ce21f9eb8533152f7a8254ce31' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.blocking.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_63cb1f8827cc89_16029730 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <i class="fa fa-minus-circle mr10" style="color: #f44336;"></i><?php echo __("Manage Blocking");?>

</div>
<div class="card-body">
  <div class="alert alert-warning">
    <div class="icon">
      <i class="fa fa-exclamation-triangle fa-2x"></i>
    </div>
    <div class="text pt5">
      <?php echo __("Once you block someone, that person can no longer see things you post on your timeline");?>

    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['blocks']->value) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"blocked"), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
      <!-- see-more -->
      <div class="alert alert-info see-more js_see-more" data-get="blocks">
        <span><?php echo __("See More");?>
</span>
        <div class="loader loader_small x-hidden"></div>
      </div>
      <!-- see-more -->
    <?php }?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
</div><?php }
}
