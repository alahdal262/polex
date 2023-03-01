<?php
/* Smarty version 4.3.0, created on 2023-01-19 22:35:29
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/blogs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c9c5b1ab06a0_71349877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f07392ccdf0970f2660c7431c6a09ca65f829ef5' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/blogs.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 5,
    'file:__feeds_article.tpl' => 4,
    'file:_no_data.tpl' => 2,
    'file:_ads.tpl' => 3,
    'file:_widget.tpl' => 2,
    'file:__reaction_emojis.tpl' => 3,
    'file:__feeds_post.comments.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 2,
    'file:__svg_icons.tpl' => 4,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_63c9c5b1ab06a0_71349877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
  <!-- page header -->
  <div class="page-header">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_content_creator_xeju.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="container">
      <h2><?php echo __("Blogs");?>
</h2>
      <p class="text-xlg"><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description_blogs']);?>
</p>
      <div class="row mt20">
        <div class="col-sm-9 col-lg-6 mx-sm-auto">
          <form class="js_search-form" data-filter="articles">
            <div class="input-group">
              <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search for articles");?>
'>
              <div class="input-group-append">
                <button type="submit" class="btn btn-danger"><?php echo __("Search");?>
</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- page header -->
<?php }?>


<!-- page content -->
<div class="container mt20 offcanvas">
  <div class="row">

    <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
        <div class="blogs-wrapper">
          <?php if ($_smarty_tpl->tpl_vars['articles']->value) {?>
            <ul class="row">
              <!-- articles -->
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"featured",'_iteration'=>$_smarty_tpl->tpl_vars['article']->iteration), 0, true);
?>
              <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!-- articles -->
            </ul>

            <!-- see-more -->
            <div class="alert alert-post see-more js_see-more" data-get="articles">
              <span><?php echo __("More Articles");?>
</span>
              <div class="loader loader_small x-hidden"></div>
            </div>
            <!-- see-more -->
          <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php }?>
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "category") {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
          <div class="col-md-8 mb20">
            <?php if ($_smarty_tpl->tpl_vars['articles']->value) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_1_saved = $_smarty_tpl->tpl_vars['article'];
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>

              <!-- see-more -->
              <div class="alert alert-post see-more js_see-more" data-get="category_articles" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
                <span><?php echo __("More Articles");?>
</span>
                <div class="loader loader_small x-hidden"></div>
              </div>
              <!-- see-more -->
            <?php } else { ?>
              <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- add new article -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
              <div class="mb10 d-none d-sm-block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new" class="btn btn-success btn-block">
                  <i class="fa fa-edit mr5"></i><?php echo __("Write New Article");?>

                </a>
              </div>
            <?php }?>
            <!-- add new article -->

            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_description']) {?>
              <!-- category description -->
              <div class="articles-widget-header">
                <div class="articles-widget-title"><?php echo __("Description");?>
</div>
              </div>
              <div class="mb15">
                <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_description']);?>

              </div>
              <!-- category description -->
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['blogs_categories']->value) {?>
              <!-- blogs categories -->
              <div class="articles-widget-header">
                <div class="articles-widget-title"><?php echo __("Sub-Categories");?>
</div>
              </div>
              <ul class="article-categories clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                  <li>
                    <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                      <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

                    </a>
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
              <!-- blogs categories -->
            <?php }?>

            <!-- read more -->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Read More");?>
</div>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_3_saved = $_smarty_tpl->tpl_vars['article'];
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_small'=>true), 0, true);
?>
            <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!-- read more -->
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "article") {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
          <div class="col-md-8 mb20">
            <div class="article mb20" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
              <div class="article-wrapper <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>pb10<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['article']->value['manage_post']) {?>
                  <div class="text-right">
                    <a class="btn btn-sm btn-outline-primary rounded-pill ml5 mb5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/edit/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                      <i class="fa fa-edit fa-fw mr5"></i> <?php echo __("Edit");?>

                    </a>
                    <button class="btn btn-sm btn-outline-danger rounded-pill ml5 mb5 js_delete-article" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                      <i class="fa fa-trash fa-fw mr5"></i><?php echo __("Delete");?>

                    </button>
                  </div>
                <?php }?>

                <!-- article category -->
                <div class="mb10">
                  <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['article']->value['article']['category_name']);?>

                  </a>
                </div>
                <!-- article category -->

                <!-- article title -->
                <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</h3>
                <!-- article title -->

                <!-- article meta -->
                <div class="row">
                  <div class="col-md-6 mb20">
                    <div class="post-avatar">
                      <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
);">
                      </a>
                    </div>
                    <div class="post-meta">
                      <div>
                        <!-- post author name -->
                        <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">
                          <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</a>
                        </span>
                        <?php if ($_smarty_tpl->tpl_vars['article']->value['post_author_verified']) {?>
                          <?php if ($_smarty_tpl->tpl_vars['article']->value['user_type'] == "user") {?>
                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                          <?php } else { ?>
                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                          <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['article']->value['user_subscribed']) {?>
                          <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                        <?php }?>
                        <!-- post author name -->
                      </div>
                      <div class="post-time">
                        <?php echo __("Posted");?>
 <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 text-md-right mb20">
                    <a class="article-meta-counter unselectable" href="#article-comments">
                      <i class="fa fa-comments fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['comments'];?>

                    </a>
                    <div class="article-meta-counter unselectable">
                      <i class="fa fa-eye fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['article']['views'];?>

                    </div>
                  </div>
                </div>
                <!-- article meta -->

                <!-- social share -->
                <div class="mb20">
                  <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
                    <i class="fab fa-vk"></i>
                  </a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp d-none d-sm-inline-block" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                  <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
                    <i class="fab fa-reddit"></i>
                  </a>
                  <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
                    <i class="fab fa-pinterest"></i>
                  </a>
                </div>
                <!-- social share -->

                <!-- article cover -->
                <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['cover']) {?>
                  <div class="mb20">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
">
                  </div>
                <?php }?>
                <!-- article cover -->

                <!-- article text -->
                <div class="article-text text-with-list" dir="auto">
                  <?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_text'];?>

                </div>
                <!-- article text -->

                <!-- article tags -->
                <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['parsed_tags']) {?>
                  <div class="article-tags">
                    <ul>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['article']['parsed_tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                        <li>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['tag']->value);?>
</a>
                        </li>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                <?php }?>
                <!-- article tags -->

                <!-- post stats -->
                <div class="post-stats clearfix">
                  <!-- reactions stats -->
                  <?php if ($_smarty_tpl->tpl_vars['article']->value['reactions_total_count'] > 0) {?>
                    <div class="float-left mr10" data-toggle="modal" data-url="posts/who_reacts.php?post_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                      <div class="reactions-stats">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['reactions'], 'reaction_count', false, 'reaction_type');
$_smarty_tpl->tpl_vars['reaction_count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction_type']->value => $_smarty_tpl->tpl_vars['reaction_count']->value) {
$_smarty_tpl->tpl_vars['reaction_count']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['reaction_count']->value > 0) {?>
                            <div class="reactions-stats-item">
                              <div class="inline-emoji no_animation">
                                <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction_type']->value), 0, true);
?>
                              </div>
                            </div>
                          <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <!-- reactions count -->
                        <span>
                          <?php echo $_smarty_tpl->tpl_vars['article']->value['reactions_total_count'];?>

                        </span>
                        <!-- reactions count -->
                      </div>
                    </div>
                  <?php }?>
                  <!-- reactions stats -->
                </div>
                <!-- post stats -->

                <!-- post actions -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                  <div class="post-actions clearfix">
                    <!-- reactions -->
                    <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->tpl_vars['article']->value['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->tpl_vars['article']->value['i_reaction'];?>
">
                      <!-- reaction-btn -->
                      <div class="reaction-btn">
                        <?php if (!$_smarty_tpl->tpl_vars['article']->value['i_react']) {?>
                          <div class="reaction-btn-icon">
                            <i class="fa fa-smile fa-fw"></i>
                          </div>
                          <span class="reaction-btn-name"><?php echo __("React");?>
</span>
                        <?php } else { ?>
                          <div class="reaction-btn-icon">
                            <div class="inline-emoji no_animation">
                              <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['article']->value['i_reaction']), 0, true);
?>
                            </div>
                          </div>
                          <span class="reaction-btn-name" style="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['article']->value['i_reaction']]['color'];?>
"><?php echo __($_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['article']->value['i_reaction']]['title']);?>
</span>
                        <?php }?>
                      </div>
                      <!-- reaction-btn -->

                      <!-- reactions-container -->
                      <div class="reactions-container">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reactions']->value, 'reaction');
$_smarty_tpl->tpl_vars['reaction']->iteration = 0;
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
$_smarty_tpl->tpl_vars['reaction']->iteration++;
$__foreach_reaction_6_saved = $_smarty_tpl->tpl_vars['reaction'];
?>
                          <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->tpl_vars['reaction']->iteration;?>
 js_react-post" data-reaction="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['color'];?>
" data-title="<?php echo __($_smarty_tpl->tpl_vars['reaction']->value['title']);?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction']->value['reaction']), 0, true);
?>
                          </div>
                        <?php
$_smarty_tpl->tpl_vars['reaction'] = $__foreach_reaction_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                      <!-- reactions-container -->
                    </div>
                    <!-- reactions -->

                    <!-- comment -->
                    <div class="action-btn js_comment <?php if ($_smarty_tpl->tpl_vars['article']->value['comments_disabled']) {?>x-hidden<?php }?>">
                      <i class="fa fa-comment fa-fw mr5"></i><span><?php echo __("Comment");?>
</span>
                    </div>
                    <!-- comment -->

                    <!-- share -->
                    <?php if ($_smarty_tpl->tpl_vars['article']->value['privacy'] == "public") {?>
                      <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                        <i class="fa fa-share fa-fw mr5"></i><span><?php echo __("Share");?>
</span>
                      </div>
                    <?php }?>
                    <!-- share -->
                  </div>
                <?php }?>
                <!-- post actions -->
              </div>

              <!-- post footer -->
              <div class="post-footer" id="article-comments">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                  <!-- comments -->
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['article']->value), 0, false);
?>
                  <!-- comments -->
                <?php } else { ?>
                  <div class="ptb10">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like, share and comment!");?>
</a>
                  </div>
                <?php }?>
              </div>
              <!-- post footer -->
            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ads'=>$_smarty_tpl->tpl_vars['ads_footer']->value), 0, true);
?>
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- add new article -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
              <div class="mb10 d-none d-sm-block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new" class="btn btn-sm btn-success btn-block">
                  <i class="fa fa-edit mr5"></i><?php echo __("Write New Article");?>

                </a>
              </div>
            <?php }?>
            <!-- add new article -->

            <!-- search -->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Search");?>
</div>
            </div>
            <div class="mb10">
              <form class="js_search-form" data-filter="articles">
                <div class="input-group">
                  <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search for articles");?>
'>
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-danger"><?php echo __("Search");?>
</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- search -->

            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!-- blogs categories -->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Categories");?>
</div>
            </div>
            <ul class="article-categories clearfix">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <li>
                  <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

                  </a>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <!-- blogs categories -->

            <!-- read more -->
            <div class="articles-widget-header">
              <div class="articles-widget-title"><?php echo __("Read More");?>
</div>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_8_saved = $_smarty_tpl->tpl_vars['article'];
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_small'=>true), 0, true);
?>
            <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!-- read more -->
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "edit") {?>

      <!-- side panel -->
      <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-9 offcanvas-mainbar">
        <!-- content -->
        <div class="card">
          <div class="card-header with-icon">
            <i class="fa fa-blog mr10" style="color: #f25e4e;"></i><?php echo __("Edit Article");?>

            <div class="float-right">
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-light">
                <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

              </a>
            </div>
          </div>
          <div class="js_ajax-forms-html " data-url="posts/article.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
            <div class="card-body">
              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Title");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
">
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Content");?>

                </label>
                <div class="col-md-10">
                  <textarea name="text" class="form-control js_wysiwyg"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['text'];?>
</textarea>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Cover");?>

                </label>
                <div class="col-md-10">
                  <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['cover'] == '') {?>
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
                      <input type="hidden" class="js_x-image-input" name="cover" value="">
                    </div>
                  <?php } else { ?>
                    <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['cover'];?>
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
                      <input type="hidden" class="js_x-image-input" name="cover" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['cover'];?>
">
                    </div>
                  <?php }?>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Category");?>

                </label>
                <div class="col-md-10">
                  <select class="form-control" name="category">
                    <option><?php echo __("Select Category");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['article']->value['article']['category_id']), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Tags");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="tags" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['tags'];?>
">
                </div>
              </div>

              <!-- error -->
              <div class="alert alert-danger mb0 x-hidden"></div>
              <!-- error -->
            </div>
            <div class="card-footer text-right">
              <button type="button" class="btn btn-danger js_delete-article" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                <i class="fa fa-trash mr5"></i><?php echo __("Delete Article");?>

              </button>
              <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
            </div>
          </div>
        </div>
        <!-- content -->
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "new") {?>

      <!-- side panel -->
      <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-9 offcanvas-mainbar">
        <!-- content -->
        <div class="card">
          <div class="card-header with-icon">
            <i class="fa fa-blog mr10" style="color: #f25e4e;"></i><?php echo __("Write New Article");?>

          </div>
          <div class="js_ajax-forms-html" data-url="posts/article.php?do=create">
            <div class="card-body">
              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Publish To");?>

                </label>
                <div class="col-md-10">
                  <!-- publish to options -->
                  <div>
                    <!-- Timeline -->
                    <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_timeline" value="timeline" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "timeline") {?>checked="checked" <?php }?> />
                    <label class="button-label" for="publish_to_timeline">
                      <div class="icon">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'width'=>"20px",'height'=>"20px"), 0, false);
?>
                      </div>
                      <div class="title"><?php echo __("Timeline");?>
</div>
                    </label>
                    <!-- Timeline -->
                    <!-- Page -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['pages']->value) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_page" value="page" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "page") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_page">
                        <div class="icon">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Page");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Page -->
                    <!-- Group -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled'] && $_smarty_tpl->tpl_vars['groups']->value) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_group" value="group" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "group") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_group">
                        <div class="icon">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Group");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Group -->
                    <!-- Event -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled'] && $_smarty_tpl->tpl_vars['events']->value) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_event" value="event" <?php if ($_smarty_tpl->tpl_vars['share_to']->value == "event") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_event">
                        <div class="icon">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Event");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Event -->
                  </div>
                  <!-- publish to options -->
                </div>
              </div>

              <div id="js_publish-to-page" <?php if ($_smarty_tpl->tpl_vars['share_to']->value != "page") {?>class="x-hidden" <?php }?>>
                <div class="form-group form-row">
                  <label class="col-md-2 form-control-label">
                    <?php echo __("Select Page");?>

                  </label>
                  <div class="col-md-10">
                    <select name="page_id" class="form-control">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['share_to_page_id']->value == $_smarty_tpl->tpl_vars['page']->value['page_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['page_title'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div id="js_publish-to-group" <?php if ($_smarty_tpl->tpl_vars['share_to']->value != "group") {?>class="x-hidden" <?php }?>>
                <div class="form-group form-row">
                  <label class="col-md-2 form-control-label">
                    <?php echo __("Select Group");?>

                  </label>
                  <div class="col-md-10">
                    <select name="group_id" class="form-control">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['share_to_group_id']->value == $_smarty_tpl->tpl_vars['group']->value['group_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div id="js_publish-to-event" <?php if ($_smarty_tpl->tpl_vars['share_to']->value != "event") {?>class="x-hidden" <?php }?>>
                <div class="form-group form-row">
                  <label class="col-md-2 form-control-label">
                    <?php echo __("Select Event");?>

                  </label>
                  <div class="col-md-10">
                    <select name="event_id" class="form-control">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['share_to_event_id']->value == $_smarty_tpl->tpl_vars['event']->value['event_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Title");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="title">
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Content");?>

                </label>
                <div class="col-md-10">
                  <textarea name="text" class="form-control js_wysiwyg"></textarea>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Cover");?>

                </label>
                <div class="col-md-10">
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
                    <input type="hidden" class="js_x-image-input" name="cover">
                  </div>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Category");?>

                </label>
                <div class="col-md-10">
                  <select class="form-control" name="category">
                    <option><?php echo __("Select Category");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>

              <div class="form-group form-row">
                <label class="col-md-2 form-control-label">
                  <?php echo __("Tags");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="tags">
                </div>
              </div>

              <!-- error -->
              <div class="alert alert-danger mb0 x-hidden"></div>
              <!-- error -->
            </div>
            <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
            </div>
          </div>
        </div>
        <!-- content -->
      </div>
      <!-- content panel -->

    <?php }?>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
  /* share post */
  $('input[type=radio][name=publish_to]').on('change', function() {
    switch ($(this).val()) {
      case 'timeline':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').hide();
        break;
      case 'page':
        $('#js_publish-to-page').fadeIn();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').hide();
        break;
      case 'group':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').fadeIn();
        $('#js_publish-to-event').hide();
        break;
      case 'event':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').fadeIn();
        break;
    }
  });
<?php echo '</script'; ?>
><?php }
}
