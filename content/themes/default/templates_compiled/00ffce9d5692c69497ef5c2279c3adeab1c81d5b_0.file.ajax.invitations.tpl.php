<?php
/* Smarty version 4.3.0, created on 2023-01-21 00:04:24
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/ajax.invitations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cb2c08392a85_69671058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ffce9d5692c69497ef5c2279c3adeab1c81d5b' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/ajax.invitations.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
  ),
),false)) {
function content_63cb2c08392a85_69671058 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-share mr5"></i><?php echo __("Share Invitation Code");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="users/invitations.php?do=send">
  <div class="modal-body">
    <div class="text-center">
      <div class="text-xlg">
        <?php echo __("Your invitation code is");?>

      </div>
      <h3>
        <span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</span>
      </h3>
    </div>

    <div class="divider"></div>

    <div class="h5 text-center">
      <?php echo __("Share the code to");?>

    </div>

    <div class="post-social-share">
      <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
        <i class="fab fa-vk"></i>
      </a>
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp d-none d-sm-inline-block" target="_blank">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
        <i class="fab fa-reddit"></i>
      </a>
      <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
        <i class="fab fa-pinterest"></i>
      </a>
    </div>

    <!-- send method -->
    <div class="mb20 text-center">
      <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_send_method'] == "email" || $_smarty_tpl->tpl_vars['system']->value['invitation_send_method'] == "both") {?>
        <!-- Email -->
        <input class="x-hidden input-label" type="radio" name="send_method" id="send_method_email" value="email" checked="checked" />
        <label class="button-label" for="send_method_email">
          <div class="icon">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"email",'width'=>"32px",'height'=>"32px"), 0, false);
?>
          </div>
          <div class="title"><?php echo __("Email");?>
</div>
        </label>
        <!-- Email -->
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_send_method'] == "sms" || $_smarty_tpl->tpl_vars['system']->value['invitation_send_method'] == "both") {?>
        <!-- SMS -->
        <input class="x-hidden input-label" type="radio" name="send_method" id="send_method_sms" value="sms" />
        <label class="button-label" for="send_method_sms">
          <div class="icon">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"sms",'width'=>"32px",'height'=>"32px"), 0, true);
?>
          </div>
          <div class="title"><?php echo __("SMS");?>
</div>
        </label>
        <!-- SMS -->
      <?php }?>
    </div>
    <!-- send method -->

    <div id="js_method-email" <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_send_method'] == "sms") {?>class="x-hidden" <?php }?>>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" name="email">
        </div>
      </div>
    </div>

    <div id="js_method-sms" class="x-hidden">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
          </div>
          <input type="text" class="form-control" name="phone">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
          </div>
        </div>
        <span class="form-text">
          <?php echo __("Phone number i.e +1234567890");?>

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
  <div class="modal-footer">
    <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
    <button type="submit" class="btn btn-primary"><?php echo __("Send");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  /* share post */
  $('input[type=radio][name=send_method]').on('change', function() {
    switch ($(this).val()) {
      case 'email':
        $('#js_method-sms').hide();
        $('#js_method-email').fadeIn();
        break;
      case 'sms':
        $('#js_method-email').hide();
        $('#js_method-sms').fadeIn();
        break;
    }
  });
<?php echo '</script'; ?>
><?php }
}
