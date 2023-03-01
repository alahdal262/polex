<?php
/* Smarty version 4.3.0, created on 2023-01-21 01:14:59
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cb3c9321bef8_04530360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8254c4163253033164a8715e0dffdff0bc2ed77a' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.design.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 9,
  ),
),false)) {
function content_63cb3c9321bef8_04530360 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-paint-brush mr10"></i><?php echo __("Design");?>

  </div>
  <form class="js_ajax-forms" data-url="admin/design.php">
    <div class="card-body">
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"night_mode",'width'=>"40px",'height'=>"40px"), 0, false);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Night Mode is Default");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo __("Make the night mode is the default mode of your website");?>

          </div>
        </div>
        <div class="text-right">
          <label class="switch" for="system_theme_night_on">
            <input type="checkbox" name="system_theme_night_on" id="system_theme_night_on" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_theme_night_on']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_night_mode",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Users Can Change Mode");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo __("Allow users to select between day and night mode");?>

          </div>
        </div>
        <div class="text-right">
          <label class="switch" for="system_theme_mode_select">
            <input type="checkbox" name="system_theme_mode_select" id="system_theme_mode_select" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_theme_mode_select']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Logo");?>
 (<?php echo __("Light Mode");?>
)
        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_logo'] == '') {?>
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
              <input type="hidden" class="js_x-image-input" name="system_logo" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
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
              <input type="hidden" class="js_x-image-input" name="system_logo" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
">
            </div>
          <?php }?>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Logo");?>
 (<?php echo __("Dark Mode");?>
)
        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_logo_dark'] == '') {?>
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
              <input type="hidden" class="js_x-image-input" name="system_logo_dark" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo_dark'];?>
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
              <input type="hidden" class="js_x-image-input" name="system_logo_dark" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo_dark'];?>
">
            </div>
          <?php }?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallpaper",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Default Home Wallpaper");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo __("Use the default");?>
 (<?php echo __("Disable it to use your custom uploaded image");?>
)
          </div>
        </div>
        <div class="text-right">
          <label class="switch" for="system_wallpaper_default">
            <input type="checkbox" name="system_wallpaper_default" id="system_wallpaper_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_wallpaper_default']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Custom Home Wallpaper");?>

        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_wallpaper'] == '') {?>
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
              <input type="hidden" class="js_x-image-input" name="system_wallpaper" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
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
              <input type="hidden" class="js_x-image-input" name="system_wallpaper" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
">
            </div>
          <?php }?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Default Favicon");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo __("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png"><?php echo __("preview");?>
</a>) (<?php echo __("Disable it to use your custom uploaded image");?>
)
          </div>
        </div>
        <div class="text-right">
          <label class="switch" for="system_favicon_default">
            <input type="checkbox" name="system_favicon_default" id="system_favicon_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Custom Favicon");?>

        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon'] == '') {?>
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
              <input type="hidden" class="js_x-image-input" name="system_favicon" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
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
              <input type="hidden" class="js_x-image-input" name="system_favicon" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
">
            </div>
          <?php }?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"social_share",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Default OG-Image");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo __("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/og-image.jpg"><?php echo __("preview");?>
</a>) (<?php echo __("Disable it to use your custom uploaded image");?>
)
          </div>
        </div>
        <div class="text-right">
          <label class="switch" for="system_ogimage_default">
            <input type="checkbox" name="system_ogimage_default" id="system_ogimage_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_ogimage_default']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Custom OG-Image");?>

        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_ogimage'] == '') {?>
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
              <input type="hidden" class="js_x-image-input" name="system_ogimage" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_ogimage'];?>
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
              <input type="hidden" class="js_x-image-input" name="system_ogimage" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_ogimage'];?>
">
            </div>
          <?php }?>
          <span class="form-text">
            <?php echo __("The perfect size for your og-image should be (wdith: 590px & height: 300px)");?>

          </span>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"playstore",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Google Play Store Badge");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("Show Google Play Store badge on the landing page");?>
</div>
        </div>
        <div class="text-right">
          <label class="switch" for="play_store_badge_enabled">
            <input type="checkbox" name="play_store_badge_enabled" id="play_store_badge_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['play_store_badge_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Google Play Store Link");?>

        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="play_store_link" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['play_store_link'];?>
">
          <span class="form-text">
            <?php echo __("The app link on Google Play Store");?>

          </span>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appgallery",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Huawei AppGallery Badge");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("Show Huawei AppGallery badge on the landing page");?>
</div>
        </div>
        <div class="text-right">
          <label class="switch" for="appgallery_badge_enabled">
            <input type="checkbox" name="appgallery_badge_enabled" id="appgallery_badge_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['appgallery_badge_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Huawei AppGallery Link");?>

        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="appgallery_store_link" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['appgallery_store_link'];?>
">
          <span class="form-text">
            <?php echo __("The app link on Huawei AppGallery");?>

          </span>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appstore",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Apple App Store Badge");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("Show Apple App Store badge on the landing page");?>
</div>
        </div>
        <div class="text-right">
          <label class="switch" for="app_store_badge_enabled">
            <input type="checkbox" name="app_store_badge_enabled" id="app_store_badge_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['app_store_badge_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Apple App Store Link");?>

        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="app_store_link" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['app_store_link'];?>
">
          <span class="form-text">
            <?php echo __("The app link on Apple App Store");?>

          </span>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"css",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Enable Customization");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("Turn the customization On and Off");?>
</div>
        </div>
        <div class="text-right">
          <label class="switch" for="css_customized">
            <input type="checkbox" name="css_customized" id="css_customized" <?php if ($_smarty_tpl->tpl_vars['system']->value['css_customized']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Background Color");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control" name="css_background" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_background'];?>
" />
            <span class="input-group-append">
              <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
          </div>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Link Color");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control" name="css_link_color" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_link_color'];?>
" />
            <span class="input-group-append">
              <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
          </div>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Header Color");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control" name="css_header" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header'];?>
" />
            <span class="input-group-append">
              <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
          </div>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Header Search Background");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control" name="css_header_search" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search'];?>
" />
            <span class="input-group-append">
              <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
          </div>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Header Search Font");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control" name="css_header_search_color" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
" />
            <span class="input-group-append">
              <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
          </div>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Button Primary");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control" name="css_btn_primary" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_btn_primary'];?>
" />
            <span class="input-group-append">
              <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
          </div>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Custom CSS");?>

        </label>
        <div class="col-md-9">
          <textarea class="form-control" rows="10" name="css_custome_css" id="custom-css"><?php echo $_smarty_tpl->tpl_vars['system']->value['css_custome_css'];?>
</textarea>
          <span class="form-text">
            <?php echo __("Header Custom CSS");?>

          </span>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Header Custom JavaScript");?>

        </label>
        <div class="col-md-9">
          <textarea name="custome_js_header" id="custome_js_header"><?php echo $_smarty_tpl->tpl_vars['system']->value['custome_js_header'];?>
</textarea>
          <span class="form-text">
            <?php echo __("The code will be added in head tag");?>

          </span>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Footer Custom JavaScript");?>

        </label>
        <div class="col-md-9">
          <textarea name="custome_js_footer" id="custome_js_footer"><?php echo $_smarty_tpl->tpl_vars['system']->value['custome_js_footer'];?>
</textarea>
          <span class="form-text">
            <?php echo __("The code will be added at the end of body tag");?>

          </span>
        </div>
      </div>

      <!-- error -->
      <div class="alert alert-danger mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
    </div>
  </form>

</div><?php }
}
