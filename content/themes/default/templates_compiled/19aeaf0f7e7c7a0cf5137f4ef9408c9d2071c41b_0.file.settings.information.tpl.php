<?php
/* Smarty version 4.3.0, created on 2023-01-20 23:11:13
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cb1f91853f47_85795904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19aeaf0f7e7c7a0cf5137f4ef9408c9d2071c41b' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.information.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 8,
  ),
),false)) {
function content_63cb1f91853f47_85795904 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <i class="fa fa-file-invoice mr10" style="color: #28a745;"></i><?php echo __("Download Your Information");?>

</div>
<form class="js_ajax-forms" data-url="users/information.php">
  <div class="card-body">
    <div class="alert alert-primary">
      <div class="icon">
        <i class="fa fa-file-invoice fa-2x"></i>
      </div>
      <div class="text">
        <strong><?php echo __("Download Your Information");?>
</strong><br>
        <?php echo __("You can download all of it at once, or you can select only the types of information you want");?>

      </div>
    </div>
    <div class="h5 mb20 text-center">
      <?php echo __("Select which information you would like to download");?>

    </div>
    <!-- download options -->
    <div class="text-center">
      <!-- Information -->
      <input class="x-hidden input-label" type="checkbox" name="download_information" id="download_information" />
      <label class="button-label" for="download_information">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"personal_info",'width'=>"32px",'height'=>"32px"), 0, false);
?>
        </div>
        <div class="title"><?php echo __("Info");?>
</div>
      </label>
      <!-- Information -->
      <!-- Friends -->
      <input class="x-hidden input-label" type="checkbox" name="download_friends" id="download_friends" />
      <label class="button-label" for="download_friends">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Friends");?>
</div>
      </label>
      <!-- Friends -->
      <!-- Followings -->
      <input class="x-hidden input-label" type="checkbox" name="download_followings" id="download_followings" />
      <label class="button-label" for="download_followings">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"followings",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Followings");?>
</div>
      </label>
      <!-- Followings -->
      <!-- Followers -->
      <input class="x-hidden input-label" type="checkbox" name="download_followers" id="download_followers" />
      <label class="button-label" for="download_followers">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"followers",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Followers");?>
</div>
      </label>
      <!-- Followers -->
    </div>
    <div class="text-center">
      <!-- Pages -->
      <input class="x-hidden input-label" type="checkbox" name="download_pages" id="download_pages" />
      <label class="button-label" for="download_pages">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Pages");?>
</div>
      </label>
      <!-- Pages -->
      <!-- Groups -->
      <input class="x-hidden input-label" type="checkbox" name="download_groups" id="download_groups" />
      <label class="button-label" for="download_groups">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Groups");?>
</div>
      </label>
      <!-- Groups -->
      <!-- Events -->
      <input class="x-hidden input-label" type="checkbox" name="download_events" id="download_events" />
      <label class="button-label" for="download_events">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Events");?>
</div>
      </label>
      <!-- Events -->
      <!-- Posts -->
      <input class="x-hidden input-label" type="checkbox" name="download_posts" id="download_posts" />
      <label class="button-label" for="download_posts">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Posts");?>
</div>
      </label>
      <!-- Posts -->
    </div>
    <!-- download options -->

    <!-- error -->
    <div class="alert alert-danger mb0 mt20 x-hidden"></div>
    <!-- error -->

  </div>
  <div class="card-footer text-right">
    <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Create File");?>
</button>
  </div>
</form><?php }
}
