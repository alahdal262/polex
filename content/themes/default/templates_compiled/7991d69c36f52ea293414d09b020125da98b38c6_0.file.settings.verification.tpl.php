<?php
/* Smarty version 4.3.0, created on 2023-01-20 23:10:58
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.verification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63cb1f826183d3_10451332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7991d69c36f52ea293414d09b020125da98b38c6' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/settings.verification.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cb1f826183d3_10451332 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <i class="fa fa-check-circle mr10" style="color: #2196f3;"></i><?php echo __("Verification");?>

</div>
<?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>
  <div class="card-body">
    <div class="text-center">
      <div class="big-icon success">
        <i class="fa fa-check-circle fa-3x"></i>
      </div>
      <h4><?php echo __("Congratulations");?>
</h4>
      <p class="mt20"><?php echo __("This account is verified");?>
</p>
    </div>
  </div>
<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>
  <form class="js_ajax-forms" data-url="users/verify.php?node=user">
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
<?php }
}
}
