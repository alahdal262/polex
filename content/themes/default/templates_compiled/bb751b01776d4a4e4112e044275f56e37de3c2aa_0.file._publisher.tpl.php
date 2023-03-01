<?php
/* Smarty version 4.3.0, created on 2023-01-19 22:25:17
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/_publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c9c34d81cfb6_70165657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb751b01776d4a4e4112e044275f56e37de3c2aa' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/_publisher.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 22,
  ),
),false)) {
function content_63c9c34d81cfb6_70165657 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="publisher-overlay"></div>
<div class="x-form publisher" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>

  <!-- publisher loader -->
  <div class="publisher-loader">
    <div class="loader loader_small"></div>
  </div>
  <!-- publisher loader -->

  <!-- publisher-message -->
  <div class="publisher-message">
    <?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>
      <img class="publisher-avatar" src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
">
    <?php } else { ?>
      <img class="publisher-avatar" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
">
    <?php }?>
    <div class="colored-text-wrapper">
      <textarea dir="auto" class="js_autosize js_mention js_publisher-scraper" data-init-placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
' placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
'><?php if ($_smarty_tpl->tpl_vars['page']->value == "share" && $_smarty_tpl->tpl_vars['url']->value) {
echo $_smarty_tpl->tpl_vars['url']->value;
}?></textarea>
    </div>
    <div class="publisher-emojis">
      <div class="position-relative">
        <span class="js_emoji-menu-toggle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Insert an emoji");?>
'>
          <i class="far fa-smile-wink fa-lg"></i>
        </span>
      </div>
    </div>
  </div>
  <!-- publisher-message -->

  <!-- publisher-slider -->
  <div class="publisher-slider">

    <!-- publisher scraper -->
    <div class="publisher-scraper"></div>
    <!-- publisher scraper -->

    <!-- post attachments -->
    <div class="publisher-attachments attachments clearfix x-hidden"></div>
    <!-- post attachments -->

    <!-- post album -->
    <div class="publisher-meta" data-meta="album">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"album",'width'=>"16px",'height'=>"16px"), 0, false);
?>
      <input type="text" placeholder='<?php echo __("Album title");?>
'>
    </div>
    <!-- post album -->

    <!-- post feelings -->
    <div class="publisher-meta" data-meta="feelings">
      <div id="feelings-menu-toggle" data-init-text='<?php echo __("What are you doing?");?>
'><?php echo __("What are you doing?");?>
</div>
      <div id="feelings-data" style="display: none">
        <input type="text" class="no-icon" placeholder='<?php echo __("What are you doing?");?>
'>
        <span></span>
      </div>
      <div id="feelings-menu" class="dropdown-menu dropdown-widget">
        <div class="dropdown-widget-body ptb5">
          <div class="js_scroller">
            <ul class="feelings-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings']->value, 'feeling');
$_smarty_tpl->tpl_vars['feeling']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feeling']->value) {
$_smarty_tpl->tpl_vars['feeling']->do_else = false;
?>
                <li class="feeling-item js_feelings-add" data-action="<?php echo $_smarty_tpl->tpl_vars['feeling']->value['action'];?>
" data-placeholder="<?php echo __($_smarty_tpl->tpl_vars['feeling']->value['placeholder']);?>
">
                  <div class="icon">
                    <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['feeling']->value['icon'];?>
"></i>
                  </div>
                  <div class="data">
                    <?php echo __($_smarty_tpl->tpl_vars['feeling']->value['text']);?>

                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
      </div>
      <div id="feelings-types" class="dropdown-menu dropdown-widget">
        <div class="dropdown-widget-body ptb5">
          <div class="js_scroller">
            <ul class="feelings-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings_types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                <li class="feeling-item js_feelings-type" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value['action'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
">
                  <div class="icon">
                    <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
"></i>
                  </div>
                  <div class="data">
                    <?php echo __($_smarty_tpl->tpl_vars['type']->value['text']);?>

                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- post feelings -->

    <!-- post location -->
    <div class="publisher-meta" data-meta="location">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'width'=>"16px",'height'=>"16px"), 0, true);
?>
      <input class="js_geocomplete" type="text" placeholder='<?php echo __("Where are you?");?>
'>
    </div>
    <!-- post location -->

    <!-- post colored -->
    <div class="publisher-meta" data-meta="colored">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colored_patterns']->value, 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
        <div class="colored-pattern-item js_publisher-pattern" data-id="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['pattern_id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['type'];?>
" data-background-image="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_image'];?>
" data-background-color-1="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_1'];?>
" data-background-color-2="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_2'];?>
" data-text-color="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['text_color'];?>
" <?php if ($_smarty_tpl->tpl_vars['pattern']->value['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_1'];?>
, <?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_image'];?>
)" <?php }?>>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <!-- post colored -->

    <!-- post voice notes -->
    <div class="publisher-meta" data-meta="voice_notes">
      <div class="voice-recording-wrapper" data-handle="publisher">
        <!-- processing message -->
        <div class="x-hidden js_voice-processing-message">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"upload",'class'=>"static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <?php echo __("Processing");?>
<span class="loading-dots"></span>
        </div>
        <!-- processing message -->

        <!-- success message -->
        <div class="x-hidden js_voice-success-message">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
          <?php echo __("Voice note recorded successfully");?>

          <div class="float-right">
            <button type="button" class="close js_voice-remove">
              <span>&times;</span>
            </button>
          </div>
        </div>
        <!-- success message -->

        <!-- start recording -->
        <div class="btn-voice-start js_voice-start">
          <i class="fas fa-microphone mr5"></i><?php echo __("Record");?>

        </div>
        <!-- start recording -->

        <!-- stop recording -->
        <div class="btn-voice-stop js_voice-stop" style="display: none">
          <i class="far fa-stop-circle mr5"></i><?php echo __("Recording");?>
 <span class="js_voice-timer">00:00</span>
        </div>
        <!-- stop recording -->
      </div>
    </div>
    <!-- post voice notes -->

    <!-- post gif -->
    <div class="publisher-meta" data-meta="gif">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'width'=>"16px",'height'=>"16px"), 0, true);
?>
      <input class="js_publisher-gif-search" type="text" placeholder='<?php echo __("Search GIFs");?>
'>
    </div>
    <!-- post gif -->

    <!-- post poll -->
    <div class="publisher-meta" data-meta="poll">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"plus",'width'=>"16px",'height'=>"16px"), 0, true);
?>
      <input type="text" placeholder='<?php echo __("Add an option");?>
...'>
    </div>
    <div class="publisher-meta" data-meta="poll">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"plus",'width'=>"16px",'height'=>"16px"), 0, true);
?>
      <input type="text" placeholder='<?php echo __("Add an option");?>
...'>
    </div>
    <!-- post poll -->

    <!-- post video -->
    <div class="publisher-meta" data-meta="video">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
      <?php echo __("Video uploaded successfully");?>

      <div class="float-right">
        <button type="button" class="close js_publisher-attachment-file-remover" data-type="video">
          <span>&times;</span>
        </button>
      </div>
    </div>
    <div class="publisher-custom-thumbnail">
      <?php echo __("Custom Video Thumbnail");?>

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
        <input type="hidden" class="js_x-image-input" name="video_thumbnail" value="">
      </div>
    </div>
    <!-- post video -->

    <!-- post audio -->
    <div class="publisher-meta" data-meta="audio">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
      <?php echo __("Audio uploaded successfully");?>

      <div class="float-right">
        <button type="button" class="close js_publisher-attachment-file-remover" data-type="audio">
          <span>&times;</span>
        </button>
      </div>
    </div>
    <!-- post audio -->

    <!-- post file -->
    <div class="publisher-meta" data-meta="file">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"static mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
      <?php echo __("File uploaded successfully");?>

      <div class="float-right">
        <button type="button" class="close js_publisher-attachment-file-remover" data-type="file">
          <span>&times;</span>
        </button>
      </div>
    </div>
    <!-- post file -->

    <!-- publisher-tools-tabs -->
    <div class="publisher-tools-tabs">
      <?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page" && ($_smarty_tpl->tpl_vars['system']->value['offers_enabled'] || $_smarty_tpl->tpl_vars['system']->value['jobs_enabled'])) {?>
        <ul class="row">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['offers_enabled']) {?>
            <li class="col-md-6">
              <div class="publisher-tools-tab link js_publisher-tab" data-tab="offer" data-toggle="modal" data-url="posts/offer.php?do=create&page_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Create Offer");?>

              </div>
            </li>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['jobs_enabled']) {?>
            <li class="col-md-6">
              <div class="publisher-tools-tab link js_publisher-tab" data-tab="job" data-toggle="modal" data-url="posts/job.php?do=create&page_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Create Job");?>

              </div>
            </li>
          <?php }?>
        </ul>
        <div class="divider"></div>
      <?php }?>
      <ul class="row">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_go_live']) {?>
          <li class="col-md-6">
            <a class="publisher-tools-tab link js_publisher-tab" data-tab="live" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/live<?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>?page_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "group") {?>?group_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "event") {?>?event_id=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}?>">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Live Video");?>

            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab attach js_publisher-tab" data-tab="photos">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/svg/camera.svg" class="js_x-uploader" data-handle="publisher" data-multiple="true">
              <?php echo __("Upload Photos");?>

            </div>
          </li>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-tab" data-tab="album">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"album",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Create Album");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_activity_posts']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-feelings">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"smile",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Feelings/Activity");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_geolocation_posts']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-tab" data-tab="location">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Check In");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_colored_posts']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-tab" data-tab="colored">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_colored",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Colored Posts");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['voice_notes_posts_enabled']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-tab" data-tab="voice_notes">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"voice_notes",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Voice Notes");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_gif_posts']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-tab" data-tab="gif">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("GIF");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
          <li class="col-md-6">
            <a class="publisher-tools-tab link js_publisher-tab" data-tab="article" href='<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new<?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>?page=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "group") {?>?group=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}
if ($_smarty_tpl->tpl_vars['_handle']->value == "event") {?>?event=<?php echo $_smarty_tpl->tpl_vars['_id']->value;
}?>'>
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"write_article",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Write Article");?>

            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products'] && $_smarty_tpl->tpl_vars['_handle']->value != "page" && $_smarty_tpl->tpl_vars['_handle']->value != "group" && $_smarty_tpl->tpl_vars['_handle']->value != "event") {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab link js_publisher-tab" data-tab="product" data-toggle="modal" data-url="posts/product.php?do=create">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Sell Something");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_polls_posts']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab js_publisher-tab" data-tab="poll">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"polls",'class'=>"mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Create Poll");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_upload_videos']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab attach js_publisher-tab" data-tab="video">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/svg/video_camera.svg" class="js_x-uploader" data-handle="publisher" data-type="video">
              <?php echo __("Upload Video");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_upload_audios']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab attach js_publisher-tab" data-tab="audio">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/svg/music_file.svg" class="js_x-uploader" data-handle="publisher" data-type="audio">
              <?php echo __("Upload Audio");?>

            </div>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_upload_files']) {?>
          <li class="col-md-6">
            <div class="publisher-tools-tab attach js_publisher-tab" data-tab="file">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/svg/folder.svg" class="js_x-uploader" data-handle="publisher" data-type="file">
              <?php echo __("Upload File");?>

            </div>
          </li>
        <?php }?>
      </ul>
    </div>
    <!-- publisher-tools-tabs -->

    <!-- publisher-footer -->
    <div class="publisher-footer">
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_anonymous_posts'] && $_smarty_tpl->tpl_vars['_handle']->value == "me") {?>
        <div class="float-left">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input js_publisher-anonymous-toggle" name="is_anonymous" id="is_anonymous">
            <label class="custom-control-label" for="is_anonymous">
              <span class="publisher-anonymous-lable"><i class="fa fa-user-secret fa-fw mr5"></i><?php echo __("Post As Anonymous");?>
</span>
            </label>
          </div>
        </div>
      <?php }?>
      <!-- publisher-buttons -->
      <?php if ($_smarty_tpl->tpl_vars['_privacy']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['newsfeed_source'] == "default") {?>
          <!-- privacy -->
          <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "me") {?>
            <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="me" title='<?php echo __("Shared with: Only Me");?>
'>
              <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static">
                <i class="btn-group-icon fa fa-lock mr10"></i><span class="btn-group-text"><?php echo __("Only Me");?>
</span>
              </button>
            <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "friends") {?>
              <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="friends" title='<?php echo __("Shared with: Friends");?>
'>
                <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static">
                  <i class="btn-group-icon fa fa-users mr10"></i><span class="btn-group-text"><?php echo __("Friends");?>
</span>
                </button>
              <?php } else { ?>
                <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="public" title='<?php echo __("Shared with: Public");?>
'>
                  <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static">
                    <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text"><?php echo __("Public");?>
</span>
                  </button>
                <?php }?>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Public");?>
' data-value="public">
                    <i class="fa fa-globe mr5"></i><?php echo __("Public");?>

                  </div>
                  <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Friends");?>
' data-value="friends">
                    <i class="fa fa-users mr5"></i><?php echo __("Friends");?>

                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['_handle']->value == 'me') {?>
                    <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Only Me");?>
' data-value="me">
                      <i class="fa fa-lock mr5"></i><?php echo __("Only Me");?>

                    </div>
                  <?php }?>
                </div>
              </div>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['anonymous_mode'] && $_smarty_tpl->tpl_vars['_handle']->value == "me") {?>
                <button disabled="disabled" type="button" class="btn btn-sm btn-light x-hidden js_publisher-privacy-public" data-toggle="tooltip" title='<?php echo __("Shared with: Public");?>
'>
                  <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text"><?php echo __("Public");?>
</span>
                </button>
              <?php }?>
              <!-- privacy -->
            <?php }?>
          <?php }?>
          <button type="button" class="btn btn-sm btn-primary ml5 js_publisher-btn js_publisher"><?php echo __("Post");?>
</button>
          <!-- publisher-buttons -->
        </div>
        <!-- publisher-footer -->
      </div>
      <!-- publisher-slider -->
</div><?php }
}
