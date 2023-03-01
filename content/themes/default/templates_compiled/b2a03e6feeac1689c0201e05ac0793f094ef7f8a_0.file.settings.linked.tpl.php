<?php
/* Smarty version 4.3.0, created on 2023-01-15 14:37:32
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.linked.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c40facece943_95971163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2a03e6feeac1689c0201e05ac0793f094ef7f8a' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.linked.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c40facece943_95971163 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <i class="fa fa-share-alt mr10" style="color: #009da0;"></i><?php echo __("Linked Accounts");?>

</div>
<div class="card-body">
  <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-facebook-square fa-3x" style="color: #3B579D"></i>
      </div>
      <div>
        <div class="form-control-label h6 mb5"><?php echo __("Facebook");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Facebook");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Facebook");?>

          <?php }?>
        </div>
      </div>
      <div class="text-right">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/facebook"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-google fa-3x" style="color: #DC4A38"></i>
      </div>
      <div>
        <div class="form-control-label h6 mb5"><?php echo __("Google");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Google");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Google");?>

          <?php }?>
        </div>
      </div>
      <div class="text-right">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/google"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-twitter-square fa-3x" style="color: #55ACEE"></i>
      </div>
      <div>
        <div class="form-control-label h6 mb5"><?php echo __("Twitter");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Twitter");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Twitter");?>

          <?php }?>
        </div>
      </div>
      <div class="text-right">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/twitter"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-linkedin fa-3x" style="color: #1A84BC"></i>
      </div>
      <div>
        <div class="form-control-label h6 mb5"><?php echo __("Linkedin");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Linkedin");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Linkedin");?>

          <?php }?>
        </div>
      </div>
      <div class="text-right">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/linkedin"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-vk fa-3x" style="color: #527498"></i>
      </div>
      <div>
        <div class="form-control-label h6 mb5"><?php echo __("Vkontakte");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Vkontakte");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Vkontakte");?>

          <?php }?>
        </div>
      </div>
      <div class="text-right">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/vkontakte"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>
</div><?php }
}
