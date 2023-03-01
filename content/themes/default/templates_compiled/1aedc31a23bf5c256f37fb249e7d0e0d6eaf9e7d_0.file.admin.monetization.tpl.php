<?php
/* Smarty version 4.3.0, created on 2023-01-20 00:33:32
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.monetization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c9e15cd9b641_82842288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aedc31a23bf5c256f37fb249e7d0e0d6eaf9e7d' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.monetization.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
  ),
),false)) {
function content_63c9e15cd9b641_82842288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-comment-dollar mr5"></i><?php echo __("Content Monetization");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?> &rsaquo; <?php echo __("Payment Requests");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <form class="js_ajax-forms" data-url="admin/monetization.php?do=settings">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"paid_content",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Content Monetization Enabled");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Enable content monetization to enable your users to earn money from their content");?>
<br>
              <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
            </div>
          </div>
          <div class="text-right">
            <label class="switch" for="monetization_enabled">
              <input type="checkbox" name="monetization_enabled" id="monetization_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Who Can Monetize Content");?>

          </label>
          <div class="col-md-9">
            <select class="form-control selectpicker" name="monetization_permission">
              <option value="admins" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_permission'] == "admins") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Admins");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only Admins and Moderators");?>
</span></div></div>"><?php echo __("Admins");?>
</option>
              <option value="pro" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_permission'] == "pro") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-rocket fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Pro Users");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only Admins, Moderators and Pro Users");?>
</span></div></div>"><?php echo __("Pro Users");?>
</option>
              <option value="verified" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_permission'] == "verified") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-check-circle fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Verified Users");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only Admins, Moderators, Pro and Verified Users");?>
</span></div></div>"><?php echo __("Verified Users");?>
</option>
              <option value="everyone" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_permission'] == "everyone") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Everyone");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Any user in the system can");?>
</span></div></div>"><?php echo __("Everyone");?>
</option>
            </select>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Users Can Subscribe Via Wallet Balance");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Enable users to subscribe via their wallet balance");?>
<br>
              <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wallet"><?php echo __("Wallet System");?>
</a>
            </div>
          </div>
          <div class="text-right">
            <label class="switch" for="monetization_wallet_payment_enabled">
              <input type="checkbox" name="monetization_wallet_payment_enabled" id="monetization_wallet_payment_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_wallet_payment_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"withdrawal",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Users Can Withdraw Earned Money");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo __("If enabled users will be able to withdraw earned money");?>
</div>
          </div>
          <div class="text-right">
            <label class="switch" for="monetization_money_withdraw_enabled">
              <input type="checkbox" name="monetization_money_withdraw_enabled" id="monetization_money_withdraw_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_withdraw_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Payment Method");?>

          </label>
          <div class="col-md-9">
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" name="method_paypal" id="method_paypal" <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" name="method_skrill" id="method_skrill" <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" name="method_bank" id="method_bank" <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline" id="js_custome-withdrawal">
              <input type="checkbox" class="custom-control-input" name="method_custom" id="method_custom" <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_custom"><?php echo __("Custom Method");?>
</label>
            </div>
            <span class="form-text">
              <?php echo __("Users can send withdrawal requests via any of these methods");?>

            </span>
          </div>
        </div>

        <div id="js_custome-withdrawal-name" <?php if (!in_array("custom",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Custom Method Name");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="monetization_payment_method_custom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_custom'];?>
">
              <span class="form-text">
                <?php echo __("Set the name of your custom withdrawal payment method");?>

              </span>
            </div>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Minimum Withdrawal Request");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="monetization_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['monetization_min_withdrawal'];?>
">
            <span class="form-text">
              <?php echo __("The minimum amount of money so user can send a withdrawal request");?>

            </span>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Users Can Transfer Earned Money To Wallet");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("If wallet enabled users will be able to transfer earned money to their wallet");?>
<br>
              <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wallet"><?php echo __("Wallet System");?>
</a>
            </div>
          </div>
          <div class="text-right">
            <label class="switch" for="monetization_money_transfer_enabled">
              <input type="checkbox" name="monetization_money_transfer_enabled" id="monetization_money_transfer_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_transfer_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Commission");?>
 (%)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="monetization_commission" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['monetization_commission'];?>
">
            <span class="form-text">
              <?php echo __("Leave it 0 if you don't want to get any commissions");?>

            </span>
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
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>

    <div class="card-body">
      <div class="alert alert-primary">
        <div class="icon">
          <i class="fa fa-money-check-alt fa-2x"></i>
        </div>
        <div class="text">
          <strong><?php echo __("Payment Requests");?>
</strong><br>
          <?php echo __("You will need to make the payments from your Paypal, Skrill, Bank Account... etc");?>
.<br>
          <?php echo __("After making the payment you can mark the payment request as paid");?>
.
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("User");?>
</th>
              <th><?php echo __("Amount");?>
</th>
              <th><?php echo __("Method");?>
</th>
              <th><?php echo __("Transfer To");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];
}?>
                  </a>
                </td>
                <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['row']->value['amount'],2));?>
</td>
                <td>
                  <span class="badge badge-pill badge-lg badge-<?php echo $_smarty_tpl->tpl_vars['row']->value['method_color'];?>
">
                    <?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['method']);?>

                  </span>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['method_value'];?>
</td>
                <td>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Mark as Paid");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="monetization" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                    <i class="fa fa-check"></i>
                  </button>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="monetization" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                    <i class="fa fa-times"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php }?>
</div><?php }
}
