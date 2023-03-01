<?php
/* Smarty version 4.3.0, created on 2023-01-28 01:58:10
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.blacklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d48132de7340_25710909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c76fd15c14aaa14bbeda8fb9187486b84c7757da' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.blacklist.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d48132de7340_25710909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/blacklist/add" class="btn btn-sm btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/blacklist" class="btn btn-sm btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-minus-circle mr5"></i><?php echo __("Blacklist");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Type");?>
</th>
              <th><?php echo __("Value");?>
</th>
              <th><?php echo __("Added");?>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "ip") {?>
                    <span class="badge badge-lg badge-danger">IP</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "email") {?>
                    <span class="badge badge-lg badge-primary"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['node_type']);?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "username") {?>
                    <span class="badge badge-lg badge-info"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['node_type']);?>
</span>
                  <?php }?>
                </td>
                <td><span class="badge badge-lg badge-warning"><?php echo $_smarty_tpl->tpl_vars['row']->value['node_value'];?>
</span></td>
                <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['row']->value['created_time'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['created_time'];?>
</span></td>
                <td>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="blacklist_node" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

    <form class="js_ajax-forms" data-url="admin/blacklist.php?do=add">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Type");?>

          </label>
          <div class="col-md-9">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" name="node_type" id="ip" value="ip" class="custom-control-input" checked>
              <label class="custom-control-label" for="ip"><?php echo __("IP");?>
</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" name="node_type" id="email" value="email" class="custom-control-input">
              <label class="custom-control-label" for="email"><?php echo __("Email Provider");?>
</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" name="node_type" id="username" value="username" class="custom-control-input">
              <label class="custom-control-label" for="username"><?php echo __("Username");?>
</label>
            </div>
            <span class="form-text">
              <?php echo __("Select what you want to add to the blackist");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Value");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="node_value">
            <span class="form-text">
              <?php echo __("IP (example: 192.168.687.123) | Email Povider (example: outlook.com or gmail.com) | Username (example: admin or superadmin)");?>
<br>
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

  <?php }?>
</div><?php }
}
