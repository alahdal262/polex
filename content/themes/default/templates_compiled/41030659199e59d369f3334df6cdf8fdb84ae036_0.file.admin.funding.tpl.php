<?php
/* Smarty version 4.3.0, created on 2023-01-15 13:56:12
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.funding.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c405fc0d3962_63183218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41030659199e59d369f3334df6cdf8fdb84ae036' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.funding.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_63c405fc0d3962_63183218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),1=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/funding/requests" class="btn btn-sm btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-hand-holding-usd mr10"></i><?php echo __("Funding");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?> &rsaquo; <?php echo __("Payment Requests");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "requests") {?> &rsaquo; <?php echo __("Funding Requests");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?> &rsaquo; <?php echo __("Find");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <form class="js_ajax-forms" data-url="admin/settings.php?edit=funding">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Funding");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo __("Turn the funding On and Off");?>
</div>
          </div>
          <div class="text-right">
            <label class="switch" for="funding_enabled">
              <input type="checkbox" name="funding_enabled" id="funding_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Who Can Raise Funding");?>

          </label>
          <div class="col-md-9">
            <select class="form-control selectpicker" name="funding_permission">
              <option value="admins" <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_permission'] == "admins") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Admins");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only Admins and Moderators");?>
</span></div></div>"><?php echo __("Admins");?>
</option>
              <option value="pro" <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_permission'] == "pro") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-rocket fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Pro Users");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only Admins, Moderators and Pro Users");?>
</span></div></div>"><?php echo __("Pro Users");?>
</option>
              <option value="verified" <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_permission'] == "verified") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-check-circle fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Verified Users");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only Admins, Moderators, Pro and Verified Users");?>
</span></div></div>"><?php echo __("Verified Users");?>
</option>
              <option value="everyone" <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_permission'] == "everyone") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Everyone");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Any user in the system can");?>
</span></div></div>"><?php echo __("Everyone");?>
</option>
            </select>
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
            <label class="switch" for="funding_money_withdraw_enabled">
              <input type="checkbox" name="funding_money_withdraw_enabled" id="funding_money_withdraw_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_money_withdraw_enabled']) {?>checked<?php }?>>
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
              <input type="checkbox" class="custom-control-input" name="method_paypal" id="method_paypal" <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" name="method_skrill" id="method_skrill" <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" name="method_bank" id="method_bank" <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline" id="js_custome-withdrawal">
              <input type="checkbox" class="custom-control-input" name="method_custom" id="method_custom" <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>checked<?php }?>>
              <label class="custom-control-label" for="method_custom"><?php echo __("Custom Method");?>
</label>
            </div>
            <span class="form-text">
              <?php echo __("Users can send withdrawal requests via any of these methods");?>

            </span>
          </div>
        </div>

        <div id="js_custome-withdrawal-name" <?php if (!in_array("custom",$_smarty_tpl->tpl_vars['system']->value['funding_payment_method_array'])) {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Custom Method Name");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="funding_payment_method_custom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['funding_payment_method_custom'];?>
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
            <input type="text" class="form-control" name="funding_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['funding_min_withdrawal'];?>
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
            <label class="switch" for="funding_money_transfer_enabled">
              <input type="checkbox" name="funding_money_transfer_enabled" id="funding_money_transfer_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_money_transfer_enabled']) {?>checked<?php }?>>
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
            <input type="text" class="form-control" name="funding_commission" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['funding_commission'];?>
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
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="funding" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                    <i class="fa fa-check"></i>
                  </button>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="funding" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "requests" || $_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>

    <div class="card-body">

      <!-- search form -->
      <div class="mb20">
        <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/funding/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <div class="input-group-append">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search mr5"></i><?php echo __("Search");?>
</button>
              </div>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo __('Search by Funding Title or Description');?>

        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Author");?>
</th>
              <th><?php echo __("Title");?>
</th>
              <th><?php echo __("Time");?>
</th>
              <th><?php echo __("Link");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['post_id'];?>
</td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['post_author_url'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['post_author_picture'];?>
">
                      <?php echo $_smarty_tpl->tpl_vars['row']->value['post_author_name'];?>

                    </a>
                  </td>
                  <td>
                    <span title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],30);?>
</span>
                  </td>
                  <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</span></td>
                  <td>
                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['row']->value['post_id'];?>
" target="_blank">
                      <i class="fa fa-eye mr5"></i><?php echo __("View");?>

                    </a>
                  </td>
                  <td>
                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="post" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['post_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="6" class="text-center">
                  <?php echo __("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

      <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>


    </div>

  <?php }?>
</div><?php }
}
