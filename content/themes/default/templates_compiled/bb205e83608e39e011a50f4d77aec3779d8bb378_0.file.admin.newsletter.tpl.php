<?php
/* Smarty version 4.3.0, created on 2023-01-20 00:35:19
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c9e1c708b194_22847623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb205e83608e39e011a50f4d77aec3779d8bb378' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.newsletter.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_63c9e1c708b194_22847623 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-paper-plane mr10"></i><?php echo __("Newsletter");?>

  </div>

  <!-- Newsletter -->
  <form class="js_ajax-forms" data-url="admin/newsletter.php">
    <div class="card-body">
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"account_activation",'width'=>"40px",'height'=>"40px"), 0, false);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Test Message");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("The message will sent to Website Email only");?>
</div>
        </div>
        <div class="text-right">
          <label class="switch" for="is_test">
            <input type="checkbox" name="is_test" id="is_test">
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Send to");?>

        </label>
        <div class="col-sm-9">
          <select class="form-control" name="to">
            <option value="all_users"><?php echo __("All Users");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_all'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_activated"><?php echo __("Users who activated their account");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_activated'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_not_activated"><?php echo __("Users who did not activated their account");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_activated'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_not_logged_week"><?php echo __("Users who did not login from 1 week");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_week'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_not_logged_month"><?php echo __("Users who did not login from 1 month");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_month'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_not_logged_3_months"><?php echo __("Users who did not login from 3 months");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_3_months'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_not_logged_6_months"><?php echo __("Users who did not login from 6 months");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_6_months'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_not_logged_9_months"><?php echo __("Users who did not login from 9 months");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_9_months'];?>
 <?php echo __("user");?>
)</option>
            <option value="users_not_logged_year"><?php echo __("Users who did not login from 1 year");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_year'];?>
 <?php echo __("user");?>
)</option>
          </select>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Subject");?>

        </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="subject">
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Message");?>

        </label>
        <div class="col-sm-9">
          <textarea class="form-control js_wysiwyg-advanced" rows="10" name="message"></textarea>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-danger">
        <i class="fa fa-paper-plane mr10"></i><?php echo __("Send");?>

      </button>
    </div>
  </form>
  <!-- Newsletter -->

</div><?php }
}
