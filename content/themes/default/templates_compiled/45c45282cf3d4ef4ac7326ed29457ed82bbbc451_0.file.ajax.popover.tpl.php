<?php
/* Smarty version 4.3.0, created on 2023-01-15 14:22:07
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/ajax.popover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c40c0fcd6ef9_03074593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45c45282cf3d4ef4ac7326ed29457ed82bbbc451' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/ajax.popover.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c40c0fcd6ef9_03074593 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == "user") {?>
  <!-- user popover -->
  <div class="user-popover-content">
    <div class="user-card">
      <div class="user-card-cover" <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
');" <?php }?>>
      </div>
      <div class="user-card-avatar">
        <img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="">
      </div>
      <div class="user-card-info">
        <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {?>
            <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>

          <?php }?>
        </a>
        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
          <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
        <?php }?>
        <div class="info">
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("followers");?>
</a>
        </div>
      </div>
    </div>
    <div class="user-card-meta">
      <!-- mutual friends -->
      <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
        <div class="mb10">
          <i class="fa fa-users fa-fw mr5"></i>
          <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>
        </div>
      <?php }?>
      <!-- mutual friends -->
      <!-- work -->
      <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
        <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_work_title'])) {?>
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
            <div class="mb10">
              <i class="fa fa-briefcase fa-fw mr5"></i>
              <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>
 <?php echo __("at");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</span>
            </div>
          <?php }?>
        <?php }?>
      <?php }?>
      <!-- work -->
      <!-- hometown -->
      <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
        <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_hometown'])) {?>
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
            <div class="mb10">
              <i class="fa fa-map-marker fa-fw mr5"></i>
              <?php echo __("From");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
            </div>
          <?php }?>
        <?php }?>
      <?php }?>
      <!-- hometown -->
    </div>
    <div class="popover-footer">
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
        <!-- add friend -->
        <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
          <button type="button" class="btn btn-sm btn-success btn-delete js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
            <i class="fa fa-check mr5"></i><?php echo __("Friends");?>

          </button>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
          <button type="button" class="btn btn-sm btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</button>
          <button type="button" class="btn btn-sm btn-danger js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Decline");?>
</button>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
          <button type="button" class="btn btn-sm btn-warning js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
            <i class="fa fa-user-plus mr5"></i><?php echo __("Sent");?>

          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
            <i class="fa fa-user-plus mr5"></i><?php echo __("Add Friend");?>

          </button>
        <?php }?>
        <!-- add friend -->

        <!-- follow -->
        <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
          <button type="button" class="btn btn-sm btn-info js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
            <i class="fa fa-check mr5"></i><?php echo __("Following");?>

          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-info js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
            <i class="fa fa-rss mr5"></i><?php echo __("Follow");?>

          </button>
        <?php }?>
        <!-- follow -->

        <!-- message -->
        <button type="button" class="btn btn-sm btn-primary js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];
}?>" data-link="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
          <i class="fa fa-comments mr5"></i><?php echo __("Message");?>

        </button>
        <!-- message -->
      <?php } else { ?>
        <!-- edit -->
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-sm btn-light">
          <i class="fa fa-pencil-alt mr5"></i><?php echo __("Update Info");?>

        </a>
        <!-- edit -->
      <?php }?>
    </div>
  </div>
  <!-- user popover -->
<?php } else { ?>
  <!-- page popover -->
  <div class="user-popover-content">
    <div class="user-card">
      <div class="user-card-cover" <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_cover'];?>
');" <?php }?>></div>
      <div class="user-card-avatar">
        <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
">
      </div>
      <div class="user-card-info">
        <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_verified']) {?>
          <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
        <?php }?>
        <div class="info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_likes'];?>
 <?php echo __("Likes");?>
</div>
      </div>
    </div>
    <div class="popover-footer">
      <!-- like -->
      <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_like']) {?>
        <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
          <i class="fa fa-heart mr5"></i><?php echo __("Unlike");?>

        </button>
      <?php } else { ?>
        <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
          <i class="fa fa-heart mr5"></i><?php echo __("Like");?>

        </button>
      <?php }?>
      <!-- like -->
    </div>
  </div>
  <!-- page popover -->
<?php }
}
}
