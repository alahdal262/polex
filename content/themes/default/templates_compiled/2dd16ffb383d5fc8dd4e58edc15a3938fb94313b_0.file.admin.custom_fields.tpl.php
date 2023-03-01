<?php
/* Smarty version 4.3.0, created on 2023-01-20 15:52:36
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.custom_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cab8c4ae9cd0_82480833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd16ffb383d5fc8dd4e58edc15a3938fb94313b' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.custom_fields.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cab8c4ae9cd0_82480833 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/custom_fields/add" class="btn btn-sm btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New Field");?>

        </a>
      </div>
    <?php } else { ?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/custom_fields" class="btn btn-sm btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-bars mr10"></i><?php echo __("Custom Fields");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Field");
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
              <th><?php echo __("Label");?>
</th>
              <th><?php echo __("For");?>
</th>
              <th><?php echo __("Type");?>
</th>
              <th><?php echo __("Place");?>
</th>
              <th><?php echo __("Order");?>
</th>
              <th><?php echo __("Mandatory");?>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['label'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "user") {?><i class="fa fa-user fa-fw mr5"></i><?php echo __("User");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "page") {?><i class="fa fa-flag fa-fw mr5"></i><?php echo __("Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "group") {?><i class="fa fa-users fa-fw mr5"></i><?php echo __("Group");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "event") {?><i class="fa fa-calendar fa-fw mr5"></i><?php echo __("Event");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "product") {?><i class="fa fa-cart-plus fa-fw mr5"></i><?php echo __("Product");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "job") {?><i class="fa fa-briefcase fa-fw mr5"></i><?php echo __("Job");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['field_for'] == "offer") {?><i class="fa fa-tag fa-fw mr5"></i><?php echo __("Offer");
}?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == "textbox") {
echo __("Text Box");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == "textarea") {
echo __("Text Area");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == "selectbox") {
echo __("Select Box");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == "multipleselectbox") {
echo __("Multiple Select");
}?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "basic") {
echo __("Basic Info");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "work") {
echo __("Work Info");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "location") {
echo __("Location Info");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "education") {
echo __("Education Info");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "other") {
echo __("Other Info");
}?>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_order'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['mandatory']) {?>
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
/custom_fields/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="custom_field" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
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

    <form class="js_ajax-forms" data-url="admin/custom_fields.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['field_id'];?>
">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Field For");?>

          </label>
          <div class="col-md-9">
            <select id="js_field-for" class="form-control" name="field_for">
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "user") {?>selected<?php }?> value="user"><?php echo __("User");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "page") {?>selected<?php }?> value="page"><?php echo __("Page");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "group") {?>selected<?php }?> value="group"><?php echo __("Group");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "event") {?>selected<?php }?> value="event"><?php echo __("Event");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "product") {?>selected<?php }?> value="product"><?php echo __("Product");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "job") {?>selected<?php }?> value="job"><?php echo __("Job");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] == "offer") {?>selected<?php }?> value="offer"><?php echo __("Offer");?>
</option>
            </select>
            <span class="form-text">
              <?php echo __("Where you want to use this field for");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Label");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="label" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Type");?>

          </label>
          <div class="col-md-9">
            <select id="js_field-type" class="form-control" name="type">
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "textbox") {?>selected<?php }?> value="textbox"><?php echo __("Text Box");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "textarea") {?>selected<?php }?> value="textarea"><?php echo __("Text Area");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "selectbox") {?>selected<?php }?> value="selectbox"><?php echo __("Select Box");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "multipleselectbox") {?>selected<?php }?> value="multipleselectbox"><?php echo __("Multiple Select");?>
</option>
            </select>
          </div>
        </div>

        <div id="js_field-select-options" <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] != 'selectbox' && $_smarty_tpl->tpl_vars['data']->value['type'] != 'multipleselectbox') {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Select Options");?>

            </label>
            <div class="col-md-9">
              <textarea rows="5" class="form-control" name="select_options"><?php echo $_smarty_tpl->tpl_vars['data']->value['select_options'];?>
</textarea>
              <span class="form-text">
                <?php echo __("One option per line");?>

              </span>
            </div>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="description"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
            <span class="form-text">
              <?php echo __("The description will show under the field");?>

            </span>
          </div>
        </div>

        <div id="js_field-place" <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] != 'user') {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Place");?>

            </label>
            <div class="col-md-9">
              <select class="form-control" name="place">
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "basic") {?>selected<?php }?> value="basic"><?php echo __("Basic Info");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "work") {?>selected<?php }?> value="work"><?php echo __("Work Info");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "location") {?>selected<?php }?> value="location"><?php echo __("Location Info");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "education") {?>selected<?php }?> value="education"><?php echo __("Education Info");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "other") {?>selected<?php }?> value="other"><?php echo __("Other Info");?>
</option>
              </select>
              <span class="form-text">
                <?php echo __("Field place in settings page");?>

              </span>
            </div>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Value Length");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="length" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['length'];?>
">
            <span class="form-text">
              <?php echo __("Default value is 32, and max value is 1000");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="field_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['field_order'];?>
">
            <span class="form-text">
              <?php echo __("The order of this field, custom fields will be displayed in ascending order");?>

            </span>
          </div>
        </div>

        <div id="js_field-clickable" <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] != 'textbox') {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Clickable");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="is_link">
                <input type="checkbox" name="is_link" id="is_link" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_link']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Make the value shows as link");?>

              </span>
            </div>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Mandatory");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="mandatory">
              <input type="checkbox" name="mandatory" id="mandatory" <?php if ($_smarty_tpl->tpl_vars['data']->value['mandatory']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("User must fill the field");?>

            </span>
          </div>
        </div>

        <div id="js_field-showin" <?php if (in_array($_smarty_tpl->tpl_vars['data']->value['field_for'],array('product','job','offer'))) {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Show in Registration");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="in_registration">
                <input type="checkbox" name="in_registration" id="in_registration" <?php if ($_smarty_tpl->tpl_vars['data']->value['in_registration']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Show the field in the user registration, create page, create group or create event");?>

              </span>
            </div>
          </div>

          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Show in Target Page");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="in_profile">
                <input type="checkbox" name="in_profile" id="in_profile" <?php if ($_smarty_tpl->tpl_vars['data']->value['in_profile']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Show the field in the user's profile, page, group or event");?>

              </span>
            </div>
          </div>
        </div>

        <div id="js_field-searchable" <?php if ($_smarty_tpl->tpl_vars['data']->value['field_for'] != "user") {?>class="x-hidden" <?php }?>>
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Show in Search");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="in_search">
                <input type="checkbox" name="in_search" id="in_search" <?php if ($_smarty_tpl->tpl_vars['data']->value['in_search']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Show the field in the find people page");?>

              </span>
            </div>
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

    <form class="js_ajax-forms" data-url="admin/custom_fields.php?do=add">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Field For");?>

          </label>
          <div class="col-md-9">
            <select id="js_field-for" class="form-control" name="field_for">
              <option value="user"><?php echo __("User");?>
</option>
              <option value="page"><?php echo __("Page");?>
</option>
              <option value="group"><?php echo __("Group");?>
</option>
              <option value="event"><?php echo __("Event");?>
</option>
              <option value="product"><?php echo __("Product");?>
</option>
              <option value="job"><?php echo __("Job");?>
</option>
              <option value="offer"><?php echo __("Offer");?>
</option>
            </select>
            <span class="form-text">
              <?php echo __("Where you want to use this field for");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Label");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="label">
            <span class="form-text">
              <?php echo __("The label of your custom field, also will be used as a placeholder");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Type");?>

          </label>
          <div class="col-md-9">
            <select id="js_field-type" class="form-control" name="type">
              <option value="textbox"><?php echo __("Text Box");?>
</option>
              <option value="textarea"><?php echo __("Text Area");?>
</option>
              <option value="selectbox"><?php echo __("Select Box");?>
</option>
              <option value="multipleselectbox"><?php echo __("Multiple Select");?>
</option>
            </select>
            <span class="form-text">
              <?php echo __("The type of your custom field");?>

            </span>
          </div>
        </div>

        <div id="js_field-select-options" class="x-hidden">
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Select Options");?>

            </label>
            <div class="col-md-9">
              <textarea rows="5" class="form-control" name="select_options"></textarea>
              <span class="form-text">
                <?php echo __("One option per line");?>

              </span>
            </div>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="description"></textarea>
            <span class="form-text">
              <?php echo __("The description will show under the field");?>

            </span>
          </div>
        </div>

        <div id="js_field-place">
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Place");?>

            </label>
            <div class="col-md-9">
              <select class="form-control" name="place">
                <option value="basic"><?php echo __("Basic Info");?>
</option>
                <option value="work"><?php echo __("Work Info");?>
</option>
                <option value="location"><?php echo __("Location Info");?>
</option>
                <option value="education"><?php echo __("Education Info");?>
</option>
                <option value="other"><?php echo __("Other Info");?>
</option>
              </select>
              <span class="form-text">
                <?php echo __("Field place in settings page");?>

              </span>
            </div>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Value Length");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="length" value="32">
            <span class="form-text">
              <?php echo __("Default value is 32, and max value is 1000");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="field_order" value="1">
            <span class="form-text">
              <?php echo __("The order of this field, custom fields will be displayed in ascending order");?>

            </span>
          </div>
        </div>

        <div id="js_field-clickable">
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Clickable");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="is_link">
                <input type="checkbox" name="is_link" id="is_link">
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Make the value shows as link");?>

              </span>
            </div>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Mandatory");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="mandatory">
              <input type="checkbox" name="mandatory" id="mandatory">
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("User must fill the field");?>

            </span>
          </div>
        </div>

        <div id="js_field-showin">
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Show in Registration");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="in_registration">
                <input type="checkbox" name="in_registration" id="in_registration">
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Show the field in the user registration, create page, create group or create event");?>

              </span>
            </div>
          </div>

          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Show in Target Page");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="in_profile">
                <input type="checkbox" name="in_profile" id="in_profile">
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Show the field in the user's profile, page, group or event");?>

              </span>
            </div>
          </div>
        </div>

        <div id="js_field-searchable">
          <div class="form-group form-row">
            <label class="col-md-3 form-control-label">
              <?php echo __("Show in Search");?>

            </label>
            <div class="col-md-9">
              <label class="switch" for="in_search">
                <input type="checkbox" name="in_search" id="in_search">
                <span class="slider round"></span>
              </label>
              <span class="form-text">
                <?php echo __("Show the field in the find people page");?>

              </span>
            </div>
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
