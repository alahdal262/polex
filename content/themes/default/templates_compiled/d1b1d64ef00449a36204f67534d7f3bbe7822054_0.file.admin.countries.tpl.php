<?php
/* Smarty version 4.3.0, created on 2023-01-15 15:08:37
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.countries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c416f5af43e2_75001028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b1d64ef00449a36204f67534d7f3bbe7822054' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.countries.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c416f5af43e2_75001028 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/countries/add" class="btn btn-sm btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New Country");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/countries" class="btn btn-sm btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-globe mr10"></i><?php echo __("Countries");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['country_name'];
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Country");
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
              <th><?php echo __("Title");?>
</th>
              <th><?php echo __("Code");?>
</th>
              <th><?php echo __("Phone");?>
</th>
              <th><?php echo __("Order");?>
</th>
              <th><?php echo __("Default");?>
</th>
              <th><?php echo __("Enabled");?>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['country_id'];?>
</td>
                <td>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/countries/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['country_id'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['country_name'];?>

                  </a>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['country_code'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone_code'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['country_order'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['default']) {?>
                    <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['enabled']) {?>
                    <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/countries/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['country_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="country" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['country_id'];?>
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/countries.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['country_id'];?>
">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Default");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="default">
              <input type="checkbox" name="default" id="default" <?php if ($_smarty_tpl->tpl_vars['data']->value['default']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Make it the default country of the site");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Make it enbaled so the user can select it");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Country Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country_name'];?>
">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Country Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_code" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country_code'];?>
">
            <span class="form-text">
              <?php echo __("Country Code, For Example: us, sa or fr");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Phone Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="phone_code" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone_code'];?>
">
            <span class="form-text">
              <?php echo __("Phone Code, For Example: +1, +44 or +971");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country_order'];?>
">
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

    <form class="js_ajax-forms" data-url="admin/countries.php?do=add">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Default");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="default">
              <input type="checkbox" name="default" id="default">
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Make it the default country of the site");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled">
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Make it enbaled so the user can select it");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Country Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_name">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Country Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_code">
            <span class="form-text">
              <?php echo __("Country Code, For Example: us, sa or fr");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Phone Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="phone_code">
            <span class="form-text">
              <?php echo __("Phone Code, For Example: +1, +44 or +971");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_order">
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
