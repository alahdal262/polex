<?php
/* Smarty version 4.3.0, created on 2023-01-15 13:54:20
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.pro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c4058c8d0037_51936718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2770d6331584cbffd0e80e6612647bb4ec15f9d6' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.pro.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_63c4058c8d0037_51936718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "packages") {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/add" class="btn btn-sm btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New Package");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/packages" class="btn btn-sm btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-cubes mr5"></i><?php echo __("Pro System");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "packages") {?> &rsaquo; <?php echo __("Packages");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Package");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "subscribers") {?> &rsaquo; <?php echo __("Subscribers");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {?> &rsaquo; <?php echo __("Earnings");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <form class="js_ajax-forms" data-url="admin/pro.php?do=settings">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_packages",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Pro Packages Enabled");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Enable pro packages to be used as upgrading plans or for subscriptions");?>
<br>
              <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
            </div>
          </div>
          <div class="text-right">
            <label class="switch" for="packages_enabled">
              <input type="checkbox" name="packages_enabled" id="packages_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Users Can Buy Packages From Wallet Balance");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Enable users to buy packages from their wallet balance");?>
<br>
              <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wallet"><?php echo __("Wallet System");?>
</a>
            </div>
          </div>
          <div class="text-right">
            <label class="switch" for="packages_wallet_payment_enabled">
              <input type="checkbox" name="packages_wallet_payment_enabled" id="packages_wallet_payment_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_wallet_payment_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"noads",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-control-label h6"><?php echo __("Ads FREE");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Disable any ads for all PRO user");?>

            </div>
          </div>
          <div class="text-right">
            <label class="switch" for="packages_ads_free_enabled">
              <input type="checkbox" name="packages_ads_free_enabled" id="packages_ads_free_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_ads_free_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "packages") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Name");?>
</th>
              <th><?php echo __("Price");?>
</th>
              <th><?php echo __("Period");?>
</th>
              <th><?php echo __("Boost Posts");?>
</th>
              <th><?php echo __("Boost Pages");?>
</th>
              <th><?php echo __("Order");?>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

                  </a>
                </td>
                <td><?php echo print_money($_smarty_tpl->tpl_vars['row']->value['price']);?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['period'] == 'life') {?>
                    <?php echo __("Life Time");?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['period_num'];?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['period']);?>

                  <?php }?>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['boost_posts'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['boost_pages'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_order'];?>
</td>
                <td>
                  <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="package" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
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

    <form class="js_ajax-forms" data-url="admin/pro.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['package_id'];?>
">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
">
            <span class="form-text">
              <?php echo __("You can set the price as 0 and it will be trial package");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Paid Every");?>

          </label>
          <div class="col-md-9">
            <div class="form-row">
              <div class="col-sm-8">
                <input class="form-control" name="period_num" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['period_num'];?>
">
              </div>
              <div class="col-sm-4">
                <select class="form-control" name="period">
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "day") {?>selected<?php }?> value="day"><?php echo __("Day");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "week") {?>selected<?php }?> value="week"><?php echo __("Week");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "month") {?>selected<?php }?> value="month"><?php echo __("Month");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "year") {?>selected<?php }?> value="year"><?php echo __("Year");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "life") {?>selected<?php }?> value="life"><?php echo __("Life Time");?>
</option>
                </select>
              </div>
            </div>
            <span class="form-text">
              <?php echo __("For example 15 days, 2 Months, 1 Year");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="text" class="form-control" name="color" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['color'];?>
" />
              <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
              </span>
            </div>
            <span class="form-text">
              <?php echo __("The theme color for this package");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Icon");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['icon'] == '') {?>
              <div class="x-image">
                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                  <span>×</span>
                </button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="icon" value="">
              </div>
            <?php } else { ?>
              <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
')">
                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                  <span>×</span>
                </button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="icon" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
">
              </div>
            <?php }?>
            <span class="form-text">
              <?php echo __("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Verification Badge Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="verification_badge_enabled">
              <input type="checkbox" name="verification_badge_enabled" id="verification_badge_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['verification_badge_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Enable verification badge with this package");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Boost Posts Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_posts_enabled">
              <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['boost_posts_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Enable boost posts feature");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Posts Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_posts" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_posts'];?>
">
            <span class="form-text">
              <?php echo __("Max posts boosts allowed");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Boost Pages Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_pages_enabled">
              <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['boost_pages_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Enable boost pages feature");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Pages Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_pages" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_pages'];?>
">
            <span class="form-text">
              <?php echo __("Max pages boosts allowed");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Custom Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="custom_description" rows="5"><?php echo $_smarty_tpl->tpl_vars['data']->value['custom_description'];?>
</textarea>
            <span class="form-text">
              <?php echo __("Add more text to show it to your users");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="package_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['package_order'];?>
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

    <form class="js_ajax-forms" data-url="admin/pro.php?do=add">
      <div class="card-body">
        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="price">
            <span class="form-text">
              <?php echo __("You can set the price as 0 and it will be trial package");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Paid Every");?>

          </label>
          <div class="col-md-9">
            <div class="form-row">
              <div class="col-sm-8">
                <input class="form-control" name="period_num">
              </div>
              <div class="col-sm-4">
                <select class="form-control" name="period">
                  <option value="day"><?php echo __("Day");?>
</option>
                  <option value="week"><?php echo __("Week");?>
</option>
                  <option value="month"><?php echo __("Month");?>
</option>
                  <option value="year"><?php echo __("Year");?>
</option>
                  <option value="life"><?php echo __("Life Time");?>
</option>
                </select>
              </div>
            </div>
            <span class="form-text">
              <?php echo __("For example 15 days, 2 Months, 1 Year");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="text" class="form-control" name="color" />
              <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
              </span>
            </div>
            <span class="form-text">
              <?php echo __("The theme color for this package");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Icon");?>

          </label>
          <div class="col-md-9">
            <div class="x-image">
              <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                <span>×</span>
              </button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="icon" value="">
            </div>
            <span class="form-text">
              <?php echo __("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Verification Badge Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="verification_badge_enabled">
              <input type="checkbox" name="verification_badge_enabled" id="verification_badge_enabled">
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Enable verification badge with this package");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Boost Posts Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_posts_enabled">
              <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled">
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Enable boost posts feature");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Posts Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_posts">
            <span class="form-text">
              <?php echo __("Max posts boosts allowed");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Boost Pages Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_pages_enabled">
              <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled">
              <span class="slider round"></span>
            </label>
            <span class="form-text">
              <?php echo __("Enable boost pages feature");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Pages Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_pages">
            <span class="form-text">
              <?php echo __("Max pages boosts allowed");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Custom Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="custom_description" rows="5"></textarea>
            <span class="form-text">
              <?php echo __("Add more text to show it to your users");?>

            </span>
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="package_order">
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "subscribers") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("User");?>
</th>
              <th><?php echo __("Package");?>
</th>
              <th><?php echo __("Subscription");?>
</th>
              <th><?php echo __("Expiration");?>
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
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
</a></td>
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
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

                  </a>
                </td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['user_subscription_date'],"%e %B %Y");?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['period'] == "life") {?>
                    <?php echo __("Life Time");?>

                  <?php } else { ?>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['row']->value['subscription_timeleft'] > 0) {
echo __("Remaining");?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['subscription_timeleft'];?>
 <?php echo __("Days");
} else {
echo __("Expired");
}?>)
                  <?php }?>
                </td>
                <td>
                  <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {?>

    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-primary">
            <div class="stat-cell">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['total_earnings']->value,2));?>
</span><br>
              <span class="text-lg"><?php echo __("Total earnings");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-info">
            <div class="stat-cell">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['month_earnings']->value,2));?>
</span><br>
              <span class="text-lg"><?php echo __("This month earnings");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("Package");?>
</th>
              <th><?php echo __("Total Sales");?>
</th>
              <th><?php echo __("Total Earnings");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sales'];?>
</td>
                <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['value']->value['earnings'],2));?>
</td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>

      <div id="admin-chart-earnings" class="admin-chart mt20"></div>
    </div>

  <?php }?>
</div><?php }
}
