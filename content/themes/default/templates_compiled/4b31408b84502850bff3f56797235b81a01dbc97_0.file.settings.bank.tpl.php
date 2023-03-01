<?php
/* Smarty version 4.3.0, created on 2023-01-16 06:55:36
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.bank.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c4f4e8405b72_97473219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b31408b84502850bff3f56797235b81a01dbc97' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.bank.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_no_transactions.tpl' => 1,
  ),
),false)) {
function content_63c4f4e8405b72_97473219 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <i class="fa fa-university mr10" style="color: #4caf50;"></i><?php echo __("Bank Transfers");?>

</div>
<div class="card-body">
  <div class="heading-small mb20">
    <?php echo __("Transactions History");?>

  </div>
  <div class="pl-md-4">
    <?php if ($_smarty_tpl->tpl_vars['transfers']->value) {?>
      <div class="table-responsive mt20">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Type");?>
</th>
              <th><?php echo __("Time");?>
</th>
              <th><?php echo __("Status");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transfers']->value, 'transfer');
$_smarty_tpl->tpl_vars['transfer']->iteration = 0;
$_smarty_tpl->tpl_vars['transfer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transfer']->value) {
$_smarty_tpl->tpl_vars['transfer']->do_else = false;
$_smarty_tpl->tpl_vars['transfer']->iteration++;
$__foreach_transfer_0_saved = $_smarty_tpl->tpl_vars['transfer'];
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['transfer']->iteration;?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['transfer']->value['handle'] == "packages") {?>
                    <?php echo __($_smarty_tpl->tpl_vars['transfer']->value['package_name']);?>
 <?php echo __("Package");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['transfer']->value['package_price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->tpl_vars['transfer']->value['handle'] == "wallet") {?>
                    <?php echo __("Add Wallet Balance");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['transfer']->value['price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->tpl_vars['transfer']->value['handle'] == "donate") {?>
                    <?php echo __("Funding Donation");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['transfer']->value['price']);?>
</strong>
                  <?php } elseif ($_smarty_tpl->tpl_vars['transfer']->value['handle'] == "subscribe") {?>
                    <?php echo __("Subscribe");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['transfer']->value['price']);?>
</strong>
                  <?php }?>
                </td>
                <td>
                  <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['transfer']->value['time'];?>
</span>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['transfer']->value['status'] == '0') {?>
                    <span class="badge badge-pill badge-lg badge-warning"><?php echo __("Pending");?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['transfer']->value['status'] == '1') {?>
                    <span class="badge badge-pill badge-lg badge-success"><?php echo __("Approved");?>
</span>
                  <?php } else { ?>
                    <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Declined");?>
</span>
                  <?php }?>
                </td>
              </tr>
            <?php
$_smarty_tpl->tpl_vars['transfer'] = $__foreach_transfer_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  </div>
</div><?php }
}
