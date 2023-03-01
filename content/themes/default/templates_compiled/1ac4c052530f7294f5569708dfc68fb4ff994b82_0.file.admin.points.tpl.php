<?php
/* Smarty version 4.3.0, created on 2023-01-15 13:57:36
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.points.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c40650cbcc97_23127389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ac4c052530f7294f5569708dfc68fb4ff994b82' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.points.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_63c40650cbcc97_23127389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-piggy-bank mr10"></i><?php echo __("Points System");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?> &rsaquo; <?php echo __("Payment Requests");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <form class="js_ajax-forms" data-url="admin/settings.php?edit=points">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"piggy_bank",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Points Enabled");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo __("Enable or Disable the points system");?>
</div>
          </div>
          <div class="text-right">
            <label class="switch" for="points_enabled">
              <input type="checkbox" name="points_enabled" id="points_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled']) {?>checked<?php }?>>
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
            <label class="switch" for="points_money_withdraw_enabled">
              <input type="checkbox" name="points_money_withdraw_enabled" id="points_money_withdraw_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_withdraw_enabled']) {?>checked<?php }?>>
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
              <input type="checkbox" class="custom-control-input" name="method_paypal" id="method_paypal" <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" name="method_skrill" id="method_skrill" <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" name="method_bank" id="method_bank" <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline" id="js_custome-withdrawal">
              <input type="checkbox" class="custom-control-input" name="method_custom" id="method_custom" <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_custom"><?php echo __("Custom Method");?>
</label>
            </div>
            <span class="form-text">
              <?php echo __("Users can send withdrawal requests via any of these methods");?>

            </span>
          </div>
        </div>

        <div id="js_custome-withdrawal-name" <?php if (!in_array("custom",$_smarty_tpl->tpl_vars['system']->value['points_payment_method_array'])) {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Custom Method Name");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="points_payment_method_custom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_payment_method_custom'];?>
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
            <input type="text" class="form-control" name="points_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_min_withdrawal'];?>
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
            <label class="switch" for="points_money_transfer_enabled">
              <input type="checkbox" name="points_money_transfer_enabled" id="points_money_transfer_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Points");?>
/<?php echo print_money("1.00");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_per_currency" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_currency'];?>
">
            <span class="form-text">
              <?php echo __("How much points eqaul to");?>
 <?php echo print_money("1");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Points/Post");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_per_post" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_post'];?>
">
            <span class="form-text">
              <?php echo __("How many points user will get for each new post");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Points/Post View");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_per_post_view" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_post_view'];?>
">
            <span class="form-text">
              <?php echo __("How many points user will get for each new post view");?>
<br>
              <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/posts"><?php echo __("Posts Views System");?>
</a>
            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Points/Comment");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_per_comment" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_comment'];?>
">
            <span class="form-text">
              <?php echo __("How many points user will get for each new comment");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Points/Reaction");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_per_reaction" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_reaction'];?>
">
            <span class="form-text">
              <?php echo __("How many points user will get for each reaction");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Points/Follower");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_per_follow" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_follow'];?>
">
            <span class="form-text">
              <?php echo __("How many points user will get for each follower");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Points/Referred");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_per_referred" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_per_referred'];?>
">
            <span class="form-text">
              <?php echo __("How many points user will get for each referred user");?>
<br>
              <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/affiliates"><?php echo __("Affiliates System");?>
</a>
            </span>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Free Users Daily Limit");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_limit_user" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_limit_user'];?>
">
            <span class="form-text">
              <?php echo __("The maximum number of points regular user can get per day");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Pro Users Daily Limit");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="points_limit_pro" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['points_limit_pro'];?>
">
            <span class="form-text">
              <?php echo __("The maximum number of points pro user can get per day");?>

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
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="points" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                    <i class="fa fa-check"></i>
                  </button>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="points" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
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
