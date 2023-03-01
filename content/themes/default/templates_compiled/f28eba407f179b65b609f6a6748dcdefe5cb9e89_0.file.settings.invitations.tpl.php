<?php
/* Smarty version 4.3.0, created on 2023-01-21 00:03:51
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.invitations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cb2be7f139d7_64650601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28eba407f179b65b609f6a6748dcdefe5cb9e89' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.invitations.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_63cb2be7f139d7_64650601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card-header with-icon">
  <i class="fa fa-handshake mr10" style="color: #2196f3;"></i><?php echo __("Invitations");?>


  <div class="float-right">
    <button data-toggle="modal" data-url="users/invitations.php?do=generate" class="btn btn-sm btn-success">
      <i class="fa fa-handshake mr10"></i><?php echo __("Generate New Code");?>

    </button>
  </div>
</div>
<div class="card-body">
  <div class="alert alert-primary">
    <div class="icon">
      <i class="fa fa-handshake fa-2x"></i>
    </div>
    <div class="text">
      <strong><?php echo __("Invitations System");?>
</strong><br>
      <?php echo __("You have");?>
 <strong><span class="badge badge-pill badge-danger"><?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'] == 0) {
echo __("Unlimited");
} else {
echo $_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'];
}?></span></strong> <?php echo __("invitations");?>
 <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'] != 0) {
echo __("every");?>
 <?php echo __(ucfirst($_smarty_tpl->tpl_vars['system']->value['invitation_expire_period']));
}?>
      <br>
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-4">
      <div class="stat-panel border">
        <div class="stat-cell">
          <i class="fa fa-mail-bulk icon bg-gradient-success"></i>
          <span class="text-xxlg"><?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_user_limit'] == 0) {?><i class="fas fa-infinity"></i><?php } else {
echo $_smarty_tpl->tpl_vars['invitation_codes_stats']->value['available'];
}?></span><br>
          <span><?php echo __("Available Invitations");?>
</span>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="stat-panel border">
        <div class="stat-cell">
          <i class="fa fa-envelope icon bg-gradient-primary"></i>
          <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['invitation_codes_stats']->value['generated'];?>
</span><br>
          <span><?php echo __("Generated Invitations");?>
</span>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="stat-panel border">
        <div class="stat-cell">
          <i class="fa fa-envelope-open-text icon bg-gradient-danger"></i>
          <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['invitation_codes_stats']->value['used'];?>
</span><br>
          <span><?php echo __("Used Invitations");?>
</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section-title mb20">
    <i class="fa fa-mail-bulk mr10"></i><?php echo __("Your Invitations Codes");?>

  </div>
  <?php if ($_smarty_tpl->tpl_vars['invitation_codes']->value) {?>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th><?php echo __("Invitation Code");?>
</th>
            <th><?php echo __("Created");?>
</th>
            <th><?php echo __("Used");?>
</th>
            <th><?php echo __("Used By");?>
</th>
            <th><?php echo __("Actions");?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invitation_codes']->value, 'invitation_code');
$_smarty_tpl->tpl_vars['invitation_code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invitation_code']->value) {
$_smarty_tpl->tpl_vars['invitation_code']->do_else = false;
?>
            <tr>
              <td><span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['code'];?>
</span></td>
              <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['invitation_code']->value['created_date'],"%e %B %Y");?>
</td>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['invitation_code']->value['used']) {?>
                  <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Yes");?>
</span>
                <?php } else { ?>
                  <span class="badge badge-pill badge-lg badge-success"><?php echo __("No");?>
</span>
                <?php }?>
              </td>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['invitation_code']->value['used']) {?>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_name'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_picture'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['user_lastname'];?>

                  </a>
                <?php }?>
              </td>
              <td>
                <?php if (!$_smarty_tpl->tpl_vars['invitation_code']->value['used']) {?>
                  <div class="d-inline-block" data-toggle="tooltip" data-placement="top" title='<?php echo __("Share");?>
'>
                    <button data-toggle="modal" data-url="users/invitations.php?do=share&code=<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value['code'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                      <i class="fa fa-link"></i>
                    </button>
                  </div>
                <?php }?>
              </td>
            </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
</div><?php }
}
