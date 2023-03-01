<?php
/* Smarty version 4.3.0, created on 2023-01-15 14:24:52
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c40cb414bc44_99259044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c7d828333ffb21918c641a9f8c13dd298d482d' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/page.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_photo.tpl' => 2,
    'file:__feeds_user.tpl' => 5,
    'file:_need_subscription.tpl' => 5,
    'file:_publisher.tpl' => 1,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_63c40cb414bc44_99259044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none offcanvas-sidebar mt20">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 offcanvas-mainbar">
      <!-- profile-header -->
      <div class="profile-header">
        <!-- profile-cover -->
        <div class="profile-cover-wrapper">
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover_id']) {?>
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_full'];?>
">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped js_lightbox" data-init-position="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
            <!-- cropped-cover -->
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
              </div>
              <div class="profile-cover-position <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>x-hidden<?php }?>">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>x-hidden<?php }?>">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
              </div>
            </div>
            <!-- buttons -->

            <!-- loaders -->
            <div class="profile-cover-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="profile-cover-position-loader">
              <i class="fa fa-arrows-alt mr5"></i><?php echo __("Drag to reposition cover");?>

            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-cover -->

        <!-- profile-avatar -->
        <div class="profile-avatar-wrapper">
          <img <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_full'];?>
" data-context="album" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">

          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-avatar-change">
              <i class="fa fa-camera js_x-uploader" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_full'];?>
" data-handle="page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-trash js_delete-picture" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <!-- buttons -->
            <!-- loaders -->
            <div class="profile-avatar-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-avatar -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_verified']) {?>
            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
          <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <!-- like -->
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
            <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
              <i class="fa fa-heart mr5"></i><?php echo __("Unlike");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
              <i class="fa fa-heart mr5"></i><?php echo __("Like");?>

            </button>
          <?php }?>
          <!-- like -->

          <!-- custom button -->
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_text'] && $_smarty_tpl->tpl_vars['spage']->value['page_action_url']) {?>
            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_url'];?>
" class="btn btn-sm btn-<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_text'];?>
</a>
          <?php }?>
          <!-- custom button -->

          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
              <!-- boost -->
              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_boost_pages']) {?>
                <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_boosted']) {?>
                  <button type="button" class="btn btn-sm btn-danger js_unboost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-bolt mr5"></i><?php echo __("Unboost");?>

                  </button>
                <?php } else { ?>
                  <button type="button" class="btn btn-sm btn-danger js_boost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-bolt mr5"></i><?php echo __("Boost");?>

                  </button>
                <?php }?>
              <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-sm btn-danger">
                  <i class="fa fa-bolt mr5"></i><?php echo __("Boost Page");?>

                </a>
              <?php }?>
              <!-- boost -->
            <?php }?>
          <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
              <!-- report -->
              <div class="d-inline-block dropdown ml5">
                <button type="button" class="btn btn-icon btn-rounded btn-light" data-toggle="dropdown" data-display="static">
                  <i class="fa fa-ellipsis-v fa-fw"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <!-- report -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=page&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-flag fa-fw mr10"></i><?php echo __("Report");?>

                  </div>
                  <!-- report -->
                  <!-- manage -->
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/edit_page/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Edit in Admin Panel");?>

                    </a>
                  <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp/pages/edit_page/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Edit in Moderator Panel");?>

                    </a>
                  <?php }?>
                  <!-- manage -->
                </div>
              </div>
              <!-- report -->
            <?php }?>
          <?php }?>
        </div>
        <!-- profile-buttons -->

        <!-- profile-tabs -->
        <div class="profile-tabs-wrapper custom-scrollbar">
          <ul>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
                <i class="fa fa-newspaper fa-fw mr5"></i><?php echo __("Timeline");?>

              </a>
            </li>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "photos" || $_smarty_tpl->tpl_vars['view']->value == "albums" || $_smarty_tpl->tpl_vars['view']->value == "album") {?>class="active" <?php }?>>
                <i class="fa fa-images fa-fw mr5"></i><?php echo __("Photos");?>

              </a>
            </li>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/videos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>class="active" <?php }?>>
                <i class="fa fa-video fa-fw mr5"></i><?php echo __("Videos");?>

              </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/invites" <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>class="active" <?php }?>>
                  <i class="fa fa-user-tag fa-fw mr5"></i><?php echo __("Invite Friends");?>

                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings" <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>class="active" <?php }?>>
                  <i class="fa fa-cog fa-fw mr5"></i><?php echo __("Settings");?>

                </a>
              </li>
            <?php }?>
          </ul>
        </div>
        <!-- profile-tabs -->
      </div>
      <!-- profile-header -->

      <!-- profile-content -->
      <div class="row">
        <!-- view content -->
        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

          <!-- monetization alert -->
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['monetization_enabled'] && $_smarty_tpl->tpl_vars['spage']->value['page_monetization_enabled'] && ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['spage']->value['i_admin'])) {?>
            <div class="col-sm-12">
              <div class="alert alert-info">
                <div class="icon">
                  <i class="fa fa-info-circle fa-2x"></i>
                </div>
                <div class="text pt5">
                  <?php if (!$_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
                    <?php echo __("This page enabled content monetization however you can see the content as you are admin/modertaor");?>
.
                  <?php } else { ?>
                    <?php echo __("You enabled content monetization, only you and your subscribers can see your content");?>
.
                  <?php }?>
                </div>
              </div>
            </div>
          <?php }?>
          <!-- monetization alert -->

          <!-- left panel -->
          <div class="order-1 col-lg-3 order-lg-1">
            <!-- panel [about] -->
            <div class="card">
              <div class="card-body">
                <?php if (!is_empty($_smarty_tpl->tpl_vars['spage']->value['page_description'])) {?>
                  <div class="about-bio">
                    <div class="js_readmore overflow-hidden">
                      <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>

                    </div>
                  </div>
                <?php }?>
                <ul class="about-list">
                  <!-- likes -->
                  <li>
                    <div class="about-list-item">
                      <i class="fa fa-heart fa-fw fa-lg"></i>
                      <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_likes'];?>
 <?php echo __("people like this");?>

                    </div>
                  </li>
                  <!-- likes -->
                  <!-- posts -->
                  <li>
                    <div class="about-list-item">
                      <i class="fa fa-newspaper fa-fw fa-lg"></i><?php echo __($_smarty_tpl->tpl_vars['spage']->value['posts_count']);?>
 <?php echo __("Posts");?>

                    </div>
                  </li>
                  <!-- posts -->
                  <!-- photos -->
                  <li>
                    <div class="about-list-item">
                      <i class="fa fa-images fa-fw fa-lg"></i><?php echo __($_smarty_tpl->tpl_vars['spage']->value['photos_count']);?>
 <?php echo __("Photos");?>

                    </div>
                  </li>
                  <!-- photos -->
                  <!-- videos -->
                  <li>
                    <div class="about-list-item">
                      <i class="fa fa-video fa-fw fa-lg"></i><?php echo __($_smarty_tpl->tpl_vars['spage']->value['videos_count']);?>
 <?php echo __("Videos");?>

                    </div>
                  </li>
                  <!-- videos -->
                  <!-- category -->
                  <li>
                    <div class="about-list-item">
                      <i class="fa fa-tag fa-fw fa-lg"></i>
                      <?php echo __($_smarty_tpl->tpl_vars['spage']->value['page_category_name']);?>

                    </div>
                  </li>
                  <!-- category -->
                  <!-- info -->
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_company']) {?>
                    <li>
                      <div class="about-list-item">
                        <i class="fa fa-briefcase fa-fw fa-lg"></i>
                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_company'];?>

                      </div>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_phone']) {?>
                    <li>
                      <div class="about-list-item">
                        <i class="fa fa-phone fa-fw fa-lg"></i>
                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_phone'];?>

                      </div>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_website']) {?>
                    <li>
                      <div class="about-list-item">
                        <i class="fa fa-link fa-fw fa-lg"></i>
                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_website'];?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_website'];?>
</a>
                      </div>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_location']) {?>
                    <li>
                      <div class="about-list-item">
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_location'];?>

                      </div>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
                      <div style="margin-left: -20px; margin-right: -20px;">
                        <iframe width="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
&amp;q=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_location'];?>
&amp;language=en"></iframe>
                      </div>
                    <?php }?>
                  <?php }?>
                  <!-- info -->
                </ul>
              </div>
            </div>
            <!-- panel [about] -->

            <!-- custom fields [basic] -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <i class="fa fa-info-circle mr5"></i>
                  <strong><?php echo __("Info");?>
</strong>
                </div>
                <div class="card-body">
                  <ul class="about-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['basic'], 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                        <li>
                          <strong><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</strong><br>
                          <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox" && $_smarty_tpl->tpl_vars['custom_field']->value['is_link']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</a>
                          <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                            <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value_string'];?>

                          <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                          <?php }?>
                        </li>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              </div>
            <?php }?>
            <!-- custom fields [basic] -->

            <!-- social links -->
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_social_facebook'] || $_smarty_tpl->tpl_vars['spage']->value['page_social_twitter'] || $_smarty_tpl->tpl_vars['spage']->value['page_social_youtube'] || $_smarty_tpl->tpl_vars['spage']->value['page_social_instagram'] || $_smarty_tpl->tpl_vars['spage']->value['page_social_linkedin'] || $_smarty_tpl->tpl_vars['spage']->value['page_social_vkontakte']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <i class="fa fa-share-alt mr5"></i>
                  <strong><?php echo __("Social Links");?>
</strong>
                </div>
                <div class="card-body text-center">
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_social_facebook']) {?>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_facebook'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                      <i class="fab fa-facebook"></i>
                    </a>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_social_twitter']) {?>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_twitter'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_social_youtube']) {?>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_youtube'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest">
                      <i class="fab fa-youtube"></i>
                    </a>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_social_instagram']) {?>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_instagram'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_social_linkedin']) {?>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_linkedin'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_social_vkontakte']) {?>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_vkontakte'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                      <i class="fab fa-vk"></i>
                    </a>
                  <?php }?>
                </div>
              </div>
            <?php }?>
            <!-- social links -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="order-2 col-lg-3 order-lg-3">
            <!-- photos -->
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['photos']) {?>
              <div class="card panel-photos">
                <div class="card-header bg-transparent">
                  <i class="fa fa-images mr5"></i>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a></strong>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row no-gutters">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['photos'], 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- photos -->

            <!-- subscribers -->
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['subscribers_count'] > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <i class="fa fa-users mr5"></i>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a></strong>
                  <span class="badge badge-pill badge-info ml5"><?php echo $_smarty_tpl->tpl_vars['spage']->value['subscribers_count'];?>
</span>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row no-gutters">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['subscribers'], '_subscriber');
$_smarty_tpl->tpl_vars['_subscriber']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_subscriber']->value) {
$_smarty_tpl->tpl_vars['_subscriber']->do_else = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_name'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_picture'];?>
" />
                            <div class="name">
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_lastname'];
}?>
                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- subscribers -->

            <!-- invite friends -->
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_like'] && $_smarty_tpl->tpl_vars['spage']->value['invites']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <div class="float-right">
                    <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/invites"><?php echo __("See All");?>
</a></small>
                  </div>
                  <i class="fa fa-user-tag mr5"></i>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/invites"><?php echo __("Invite Friends");?>
</a></strong>
                </div>
                <div class="card-body">
                  <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['invites'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_small'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              </div>
            <?php }?>
            <!-- invite friends -->
          </div>
          <!-- right panel -->

          <!-- center panel -->
          <div class="order-3 col-lg-6 order-lg-2">
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'page','node_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id'],'price'=>$_smarty_tpl->tpl_vars['spage']->value['page_monetization_price']), 0, false);
?>
            <?php } else { ?>
              <!-- publisher -->
              <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, false);
?>
              <?php }?>
              <!-- publisher -->

              <!-- pinned post -->
              <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value), 0, false);
?>
              <?php }?>
              <!-- pinned post -->

              <!-- posts -->
              <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, false);
?>
              <!-- posts -->
            <?php }?>
          </div>
          <!-- center panel -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
          <!-- photos -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'page','node_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id'],'price'=>$_smarty_tpl->tpl_vars['spage']->value['page_monetization_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card panel-photos">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['photos']) {?>
                    <ul class="row no-gutters">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['photos'], 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type='page'>
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have photos");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- photos -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
          <!-- albums -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'page','node_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id'],'price'=>$_smarty_tpl->tpl_vars['spage']->value['page_monetization_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if (count($_smarty_tpl->tpl_vars['spage']->value['albums']) > 0) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['albums'], 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if (count($_smarty_tpl->tpl_vars['spage']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type='page'>
                        <span><?php echo __("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have albums");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
          <!-- albums -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'page','node_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id'],'price'=>$_smarty_tpl->tpl_vars['spage']->value['page_monetization_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card panel-photos">
                <div class="card-header with-icon with-nav">
                  <!-- back to albums -->
                  <div class="float-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums" class="btn btn-sm btn-light">
                      <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Back to Albums");?>

                    </a>
                  </div>
                  <!-- back to albums -->

                  <!-- panel title -->
                  <div class="mb20">
                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>
          <!-- videos -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'page','node_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id'],'price'=>$_smarty_tpl->tpl_vars['spage']->value['page_monetization_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card panel-videos">
                <div class="card-header with-icon">
                  <!-- panel title -->
                  <div class="mb20">
                    <i class="fa fa-video mr10"></i><?php echo __("Videos");?>

                  </div>
                  <!-- panel title -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['spage']->value['videos']) {?>
                    <ul class="row no-gutters">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['videos'], 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-info see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type='page'>
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have videos");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- videos -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "subscribers") {?>
          <!-- invites -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <div>
                  <i class="fa fa-users mr10"></i><?php echo __("Subscribers");?>

                </div>
                <!-- panel title -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->tpl_vars['spage']->value['subscribers_count'] > 0) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['subscribers'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if (count($_smarty_tpl->tpl_vars['spage']->value['subscribers']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-info see-more mt0 mb20 js_see-more" data-get="subscribers" data-uid="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type="page">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have subscribers");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- invites -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>
          <!-- invites -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <div>
                  <i class="fa fa-user-tag mr10"></i><?php echo __("Invites");?>

                </div>
                <!-- panel title -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['spage']->value['invites']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['invites'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>

                  <?php if (count($_smarty_tpl->tpl_vars['spage']->value['invites']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-info see-more js_see-more" data-get="page_invites" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo __("No friends to invite");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- invites -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body with-nav">
                <ul class="side-nav">
                  <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings">
                      <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Page Settings");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "info") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/info">
                      <i class="fa fa-info-circle fa-fw mr10" style="color: #2b53a4;"></i><?php echo __("Page Information");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "admins") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/admins">
                      <i class="fa fa-users fa-fw mr10" style="color: #8bc34a"></i><?php echo __("Admins");?>

                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "monetization") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/monetization">
                        <i class="fa fa-comment-dollar fa-fw mr10" style="color: #e91e63"></i><?php echo __("Monetization");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/verification">
                        <i class="fa fa-check-circle fa-fw mr10" style="color: #2196f3"></i><?php echo __("Verification");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/delete">
                        <i class="fa fa-trash fa-fw mr10" style="color: #f44336;"></i><?php echo __("Delete Page");?>

                      </a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="card">
              <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                <div class="card-header with-icon">
                  <i class="fa fa-cog mr10"></i><?php echo __("Page Settings");?>

                </div>
                <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=edit&edit=settings&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-control-label" for="title"><?php echo __("Name Your Page");?>
</label>
                      <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label" for="username"><?php echo __("Page Username");?>
</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/</span>
                        </div>
                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
">
                      </div>
                      <span class="form-text">
                        <?php echo __("Can only contain alphanumeric characters (A–Z, 0–9) and periods ('.')");?>

                      </span>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label" for="category"><?php echo __("Category");?>
</label>
                      <select class="form-control" name="category" id="category">
                        <option><?php echo __("Select Category");?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['spage']->value['page_category']), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </select>
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

              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "info") {?>
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <i class="fa fa-info-circle mr10" style="color: #2b53a4;"></i><?php echo __("Page Information");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#basic" data-toggle="tab">
                        <i class="fa fa-flag fa-fw mr5"></i><strong class="pr5"><?php echo __("Basic");?>
</strong>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#action" data-toggle="tab">
                        <i class="fa fa-magic fa-fw mr5"></i><strong class="pr5"><?php echo __("Action Button");?>
</strong>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#social" data-toggle="tab">
                        <i class="fab fa-facebook fa-fw mr5"></i><strong class="pr5"><?php echo __("Social Links");?>
</strong>
                      </a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>

                <!-- tab-content -->
                <div class="tab-content">
                  <!-- basic tab -->
                  <div class="tab-pane active" id="basic">
                    <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=edit&edit=info&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label class="form-control-label" for="company"><?php echo __("Company");?>
</label>
                            <input type="text" class="form-control" name="company" id="company" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_company'];?>
">
                          </div>
                          <div class="form-group col-md-6">
                            <label class="form-control-label" for="phone"><?php echo __("Phone");?>
</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_phone'];?>
">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label class="form-control-label" for="website"><?php echo __("Website");?>
</label>
                            <input type="text" class="form-control" name="website" id="website" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_website'];?>
">
                            <span class="form-text">
                              <?php echo __("Website link must start with http:// or https://");?>

                            </span>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="form-control-label" for="location"><?php echo __("Location");?>
</label>
                            <input type="text" class="form-control js_geocomplete" name="location" id="location" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_location'];?>
">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label" for="country"><?php echo __("Country");?>
</label>
                          <select class="form-control" name="country">
                            <option value="none"><?php echo __("Select Country");?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_country'] == $_smarty_tpl->tpl_vars['country']->value['country_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label" for="description"><?php echo __("About");?>
</label>
                          <textarea class="form-control" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>
</textarea>
                        </div>
                        <!-- custom fields -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
                        <?php }?>
                        <!-- custom fields -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 x-hidden"></div>
                        <!-- error -->
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                      </div>
                    </form>
                  </div>
                  <!-- basic tab -->

                  <!-- action tab -->
                  <div class="tab-pane" id="action">
                    <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=edit&edit=action&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <div class="card-body">
                        <div class="form-group">
                          <label class="form-control-label"><?php echo __("Action Button Text");?>
</label>
                          <input type="text" class="form-control" name="action_text" id="action_text" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_text'];?>
">
                          <span class="form-text">
                            <?php echo __("For example: Subscribe, Get tickets, Preorder now or Shop now");?>

                          </span>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label"><?php echo __("Action Button Color");?>
</label>
                          <div class="mt10">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="action_color" id="action_color_light" value="light" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_color'] == "light") {?>checked<?php }?>>
                              <label class="custom-control-label" for="action_color_light">
                                <button type="button" class="btn btn-sm btn-light"><?php echo __("Action");?>
</button>
                              </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="action_color" id="action_color_primary" value="primary" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_color'] == "primary") {?>checked<?php }?>>
                              <label class="custom-control-label" for="action_color_primary">
                                <button type="button" class="btn btn-sm btn-primary"><?php echo __("Action");?>
</button>
                              </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="action_color" id="action_color_success" value="success" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_color'] == "success") {?>checked<?php }?>>
                              <label class="custom-control-label" for="action_color_success">
                                <button type="button" class="btn btn-sm btn-success"><?php echo __("Action");?>
</button>
                              </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="action_color" id="action_color_info" value="info" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_color'] == "info") {?>checked<?php }?>>
                              <label class="custom-control-label" for="action_color_info">
                                <button type="button" class="btn btn-sm btn-info"><?php echo __("Action");?>
</button>
                              </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="action_color" id="action_color_warning" value="warning" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_color'] == "warning") {?>checked<?php }?>>
                              <label class="custom-control-label" for="action_color_warning">
                                <button type="button" class="btn btn-sm btn-warning"><?php echo __("Action");?>
</button>
                              </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="action_color" id="action_color_danger" value="danger" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_color'] == "danger") {?>checked<?php }?>>
                              <label class="custom-control-label" for="action_color_danger">
                                <button type="button" class="btn btn-sm btn-danger"><?php echo __("Action");?>
</button>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label"><?php echo __("Action Button URL");?>
</label>
                          <input type="text" class="form-control" name="action_url" id="action_url" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_url'];?>
">
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
                  </div>
                  <!-- action tab -->

                  <!-- social tab -->
                  <div class="tab-pane" id="social">
                    <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=edit&edit=social&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label class="form-control-label"><?php echo __("Facebook Profile URL");?>
</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent"><i class="fab fa-facebook fa-lg" style="color: #3B579D"></i></span>
                              </div>
                              <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_facebook'];?>
">
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label class="form-control-label"><?php echo __("Twitter Profile URL");?>
</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent"><i class="fab fa-twitter fa-lg" style="color: #55ACEE"></i></span>
                              </div>
                              <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_twitter'];?>
">
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label class="form-control-label"><?php echo __("YouTube Profile URL");?>
</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent"><i class="fab fa-youtube fa-lg" style="color: #E62117"></i></span>
                              </div>
                              <input type="text" class="form-control" name="youtube" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_youtube'];?>
">
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label class="form-control-label"><?php echo __("Instagram Profile URL");?>
</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent"><i class="fab fa-instagram fa-lg" style="color: #3f729b"></i></span>
                              </div>
                              <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_instagram'];?>
">
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label class="form-control-label"><?php echo __("LinkedIn Profile URL");?>
</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent"><i class="fab fa-linkedin fa-lg" style="color: #1A84BC"></i></span>
                              </div>
                              <input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_linkedin'];?>
">
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                            <label class="form-control-label"><?php echo __("Vkontakte Profile URL");?>
</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent"><i class="fab fa-vk fa-lg" style="color: #527498"></i></span>
                              </div>
                              <input type="text" class="form-control" name="vkontakte" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_social_vkontakte'];?>
">
                            </div>
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
                  </div>
                  <!-- social tab -->
                </div>
                <!-- tab-content -->

              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "admins") {?>
                <div class="card-header with-icon">
                  <i class="fa fa-users mr10" style="color: #8bc34a"></i><?php echo __("Members");?>

                </div>
                <div class="card-body">
                  <!-- admins -->
                  <div class="heading-small mb20">
                    <?php echo __("Admins");?>
 <span class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_admins_count'];?>
)</span>
                  </div>
                  <div class="pl-md-4">
                    <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_admins']) {?>
                      <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['page_admins'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>

                      <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_admins_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="page_admins" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                          <span><?php echo __("See More");?>
</span>
                          <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                      <?php }?>
                    <?php } else { ?>
                      <p class="text-center text-muted mt10">
                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have admins");?>

                      </p>
                    <?php }?>
                  </div>
                  <!-- admins -->

                  <div class="divider"></div>

                  <!-- members -->
                  <div class="heading-small mb20">
                    <?php echo __("All Members");?>
 <span class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_likes'];?>
)</span>
                  </div>
                  <div class="pl-md-4">
                    <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_likes'] > 0) {?>
                      <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['members'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>

                      <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_likes'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="page_members" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                          <span><?php echo __("See More");?>
</span>
                          <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                      <?php }?>
                    <?php } else { ?>
                      <p class="text-center text-muted mt10">
                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have members");?>

                      </p>
                    <?php }?>
                  </div>
                  <!-- members -->
                </div>

              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "monetization") {?>
                <div class="card-header with-icon">
                  <i class="fa fa-comment-dollar mr10" style="color: #e91e63;"></i><?php echo __("Monetization");?>

                </div>
                <div class="card-body">
                  <div class="alert alert-primary">
                    <div class="icon">
                      <i class="fa fa-comment-dollar fa-2x"></i>
                    </div>
                    <div class="text">
                      <strong><?php echo __("Content Monetization");?>
</strong><br>
                      <?php echo __("Now you can earn money from your content. Set your own price and your users pay for it.");?>

                      <br>
                      <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_commission'] > 0) {?>
                        <?php echo __("There is commission");?>
 <strong><span class="badge badge-pill badge-warning"><?php echo $_smarty_tpl->tpl_vars['system']->value['monetization_commission'];?>
%</span></strong> <?php echo __("will be deducted");?>
.
                        <br>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_withdraw_enabled']) {?>
                        <?php echo __("You can");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/monetization/payments" target="_blank"><?php echo __("withdraw your money");?>
</a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_transfer_enabled']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_withdraw_enabled']) {
echo __("or");?>
 <?php }?>
                        <?php echo __("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo __("wallet");?>
</a>
                      <?php }?>
                    </div>
                  </div>

                  <div class="alert alert-info">
                    <div class="icon">
                      <i class="fa fa-info-circle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                      <?php echo __("Only super admin can manage monetization and money goes to his monetization money balance");?>
.
                    </div>
                  </div>

                  <div class="heading-small mb20">
                    <?php echo __("Monetization Settings");?>

                  </div>
                  <div class="pl-md-4">
                    <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=edit&edit=monetization&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <div class="form-table-row">
                        <div class="avatar">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"paid_content",'width'=>"40px",'height'=>"40px"), 0, false);
?>
                        </div>
                        <div>
                          <div class="form-control-label h6"><?php echo __("Content Monetization");?>
</div>
                          <div class="form-text d-none d-sm-block"><?php echo __("Enable or disable monetization for your content");?>
</div>
                        </div>
                        <div class="text-right">
                          <label class="switch" for="page_monetization_enabled">
                            <input type="checkbox" name="page_monetization_enabled" id="page_monetization_enabled" <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_monetization_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>

                      <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                          <?php echo __("Monthly Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                        </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="page_monetization_price" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_monetization_price'];?>
">
                          <span class="form-text">
                            <?php echo __("Set your monthly price for your content. You can change it anytime.");?>

                          </span>
                        </div>
                      </div>

                      <div class="form-group form-row">
                        <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                        </div>
                      </div>

                      <!-- success -->
                      <div class="alert alert-success mb0 x-hidden"></div>
                      <!-- success -->

                      <!-- error -->
                      <div class="alert alert-danger mb0 x-hidden"></div>
                      <!-- error -->
                    </form>
                  </div>

                  <div class="divider"></div>

                  <div class="heading-small mb20">
                    <?php echo __("Monetization Balance");?>

                  </div>
                  <div class="pl-md-4">
                    <div class="row">
                      <!-- subscribers -->
                      <div class="col-sm-6">
                        <div class="section-title mb20">
                          <i class="fas fa-users mr10"></i><?php echo __("Page Subscribers");?>

                        </div>
                        <div class="stat-panel bg-gradient-info">
                          <div class="stat-cell">
                            <i class="fa fas fa-users bg-icon"></i>
                            <div class="h3 mtb10">
                              <?php echo $_smarty_tpl->tpl_vars['subscribers_count']->value;?>

                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- subscribers -->

                      <!-- money balance -->
                      <div class="col-sm-6">
                        <div class="section-title mb20">
                          <i class="fa fa-donate mr10"></i><?php echo __("Monetization Money Balance");?>

                        </div>
                        <div class="stat-panel bg-gradient-primary">
                          <div class="stat-cell">
                            <i class="fa fa-donate bg-icon"></i>
                            <div class="h3 mtb10">
                              <?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_balance'],2));?>

                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- monetization balance -->
                    </div>
                  </div>
                </div>

              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>
                <div class="card-header with-icon">
                  <i class="fa fa-check-circle mr10" style="color: #2196f3"></i><?php echo __("Verification");?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>
                  <div class="card-body">
                    <div class="text-center">
                      <div class="big-icon success">
                        <i class="fa fa-check-circle fa-3x"></i>
                      </div>
                      <h4><?php echo __("Congratulations");?>
</h4>
                      <p class="mt20"><?php echo __("This page is verified");?>
</p>
                    </div>
                  </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>
                  <form class="js_ajax-forms" data-url="users/verify.php?node=page&node_id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <div class="card-body">
                      <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                          <?php echo __("Verification Documents");?>

                        </label>
                        <div class="col-md-9">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="section-title mb20">
                                <i class="fas fa-camera-retro mr10"></i><?php echo __("Your Photo");?>

                              </div>
                              <div class="x-image full">
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                  <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                  <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="photo" value="">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="section-title mb20">
                                <i class="fas fa-passport mr10"></i><?php echo __("Passport or National ID");?>

                              </div>
                              <div class="x-image full">
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                  <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                  <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="passport" value="">
                              </div>
                            </div>
                          </div>
                          <span class="form-text">
                            <?php echo __("Please attach your photo and your Passport or National ID");?>

                          </span>
                        </div>
                      </div>

                      <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                          <?php echo __("Additional Information");?>

                        </label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="message"></textarea>
                          <span class="form-text">
                            <?php echo __("Please share why your account should be verified");?>

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
                      <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check-circle mr10"></i><?php echo __("Send Verification Request");?>

                      </button>
                    </div>
                  </form>
                <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "pending") {?>
                  <div class="card-body">
                    <div class="text-center">
                      <div class="big-icon warning">
                        <i class="fa fa-clock fa-3x"></i>
                      </div>
                      <h4><?php echo __("Pending");?>
</h4>
                      <p class="mt20"><?php echo __("Your verification request is still awaiting admin approval");?>
</p>
                    </div>
                  </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "declined") {?>
                  <div class="card-body">
                    <div class="text-center">
                      <div class="big-icon error">
                        <i class="fa fa-frown fa-3x"></i>
                      </div>
                      <h4><?php echo __("Sorry");?>
</h4>
                      <p class="mt20"><?php echo __("Your verification request has been declined by the admin");?>
</p>
                    </div>
                  </div>
                <?php }?>

              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
                <div class="card-header with-icon">
                  <i class="fa fa-trash mr10" style="color: #f44336;"></i><?php echo __("Delete Page");?>

                </div>
                <div class="card-body">
                  <div class="alert alert-warning">
                    <div class="icon">
                      <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                      <?php echo __("Once you delete your page you will no longer can access it again");?>

                    </div>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-danger js_delete-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <i class="fa fa-trash mr5"></i><?php echo __("Delete Page");?>

                    </button>
                  </div>
                </div>

              <?php }?>
            </div>
          </div>

        <?php }?>
        <!-- view content -->
      </div>
      <!-- profile-content -->
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
