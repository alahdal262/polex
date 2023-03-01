<?php
/* Smarty version 4.3.0, created on 2023-01-24 23:06:31
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d064777a5499_05823634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef4d985d76766fc0491544386df512045254bb46' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.notifications.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
  ),
),false)) {
function content_63d064777a5499_05823634 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <i class="fa fa-bell fa-fw mr10" style="color: #673ab7;"></i><?php echo __("Notifications");?>

</div>
<form class="js_ajax-forms" data-url="users/settings.php?edit=notifications">
  <div class="card-body">
    <!-- System Notifications -->
    <div class="heading-small mb20">
      <?php echo __("System Notifications");?>

    </div>
    <div class="pl-md-4">
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat_bell",'width'=>"40px",'height'=>"40px"), 0, false);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Chat Message Sound");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("A sound will be played each time you receive a new message on an inactive chat window");?>
</div>
        </div>
        <div class="text-right">
          <label class="switch" for="chat_sound_settings">
            <input type="checkbox" name="chat_sound" id="chat_sound_settings" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['chat_sound']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"notification_bell",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-control-label h6"><?php echo __("Notifications Sound");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("A sound will be played each time you receive a new activity notification");?>
</div>
        </div>
        <div class="text-right">
          <label class="switch" for="notifications_sound_settings">
            <input type="checkbox" name="notifications_sound" id="notifications_sound_settings" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications_sound']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>
    </div>
    <!-- System Notifications -->

    <!-- Email Notifications -->
    <?php if ($_smarty_tpl->tpl_vars['email_notifications_enabled']->value) {?>
      <div class="divider"></div>
      <div class="heading-small mb20">
        <?php echo __("Email Notifications");?>

      </div>
      <div class="pl-md-4">
        <div class="form-group form-row">
          <label class="col-md-2 form-control-label"><?php echo __("Email Me When");?>
</label>
          <div class="col-md-10">
            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes']) {?>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="email_post_likes" id="email_post_likes" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_likes']) {?>checked<?php }?>>
                <label class="custom-control-label" for="email_post_likes"><?php echo __("Someone liked my post");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_comments']) {?>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="email_post_comments" id="email_post_comments" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_comments']) {?>checked<?php }?>>
                <label class="custom-control-label" for="email_post_comments"><?php echo __("Someone commented on my post");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_shares']) {?>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="email_post_shares" id="email_post_shares" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_shares']) {?>checked<?php }?>>
                <label class="custom-control-label" for="email_post_shares"><?php echo __("Someone shared my post");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_wall_posts']) {?>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="email_wall_posts" id="email_wall_posts" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_wall_posts']) {?>checked<?php }?>>
                <label class="custom-control-label" for="email_wall_posts"><?php echo __("Someone posted on my timeline");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_mentions']) {?>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="email_mentions" id="email_mentions" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_mentions']) {?>checked<?php }?>>
                <label class="custom-control-label" for="email_mentions"><?php echo __("Someone mentioned me");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_profile_visits']) {?>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="email_profile_visits" id="email_profile_visits" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_profile_visits']) {?>checked<?php }?>>
                <label class="custom-control-label" for="email_profile_visits"><?php echo __("Someone visited my profile");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="email_friend_requests" id="email_friend_requests" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_friend_requests']) {?>checked<?php }?>>
                <label class="custom-control-label" for="email_friend_requests"><?php echo __("Someone sent me/accepted my friend requset");?>
</label>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    <?php }?>
    <!-- Email Notifications -->

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
</form><?php }
}
