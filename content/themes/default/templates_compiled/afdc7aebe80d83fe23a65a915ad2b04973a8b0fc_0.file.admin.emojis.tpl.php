<?php
/* Smarty version 4.3.0, created on 2023-01-15 13:36:07
  from '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c40147377857_41734269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afdc7aebe80d83fe23a65a915ad2b04973a8b0fc' => 
    array (
      0 => '/home/769987.cloudwaysapps.com/cnpchtvcsh/public_html/content/themes/default/templates/admin.emojis.tpl',
      1 => 1673723815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c40147377857_41734269 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/emojis/add" class="btn btn-sm btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New Emoji");?>

        </a>
      </div>
    <?php } else { ?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/emojis" class="btn btn-sm btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-grin-tears mr10"></i><?php echo __("Emojis");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Emoji");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo __("Edit Emoji");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Preview");?>
</th>
              <th><?php echo __("Native");?>
</th>
              <th><?php echo __("Class");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['emoji_id'];?>
</td>
                <td><i class="twa twa-2x twa-<?php echo $_smarty_tpl->tpl_vars['row']->value['class'];?>
"></i></td>
                <td><span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['row']->value['unicode_char'];?>
</span></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['class'];?>
</td>
                <td>
                  <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/emojis/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['emoji_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="emoji" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['emoji_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

    <form class="js_ajax-forms" data-url="admin/emojis.php?do=add">
      <div class="card-body">
        <div class="alert alert-info">
          <div class="icon">
            <i class="fa fa-info-circle fa-2x"></i>
          </div>
          <div class="text pt5">
            <?php echo __("Sngine uses Twemoji Amazing and you can check");?>
 <a class="alert-link" target="_blank" href="https://unicode.org/emoji/charts/emoji-list.html"><?php echo __("Emoji Cheat Sheet");?>
</a> <?php echo __("for the Emojis");?>
.<br>
            <?php echo __("You must replace spaces with hyphens, For example: grinning face became :grinning-face: for pattern and grinning-face for class");?>
.
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Native Emoji");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="unicode_char">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Pattern");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="pattern">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Class");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="class">
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
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/emojis.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['emoji_id'];?>
">
      <div class="card-body">
        <div class="alert alert-info">
          <div class="icon">
            <i class="fa fa-info-circle fa-2x"></i>
          </div>
          <div class="text pt5">
            <?php echo __("Sngine uses Twemoji Amazing and you can check");?>
 <a class="alert-link" target="_blank" href="https://unicode.org/emoji/charts/emoji-list.html"><?php echo __("Emoji Cheat Sheet");?>
</a> <?php echo __("for the Emojis");?>
.<br>
            <?php echo __("You must replace spaces with hyphens, For example: grinning face became :grinning-face: for pattern and grinning-face for class");?>
.
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Native Emoji");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="unicode_char" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['unicode_char'];?>
">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Pattern");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="pattern" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pattern'];?>
">
          </div>
        </div>

        <div class="form-group form-row">
          <label class="col-md-3 form-control-label">
            <?php echo __("Class");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="class" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
">
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
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}
