<?php
/* Smarty version 4.3.1, created on 2025-01-31 09:37:52
  from 'app:frontendobjectsissue_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679c8be0864706_63393587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86c3c6d3b8626fd94695da222063914b868c2845' => 
    array (
      0 => 'app:frontendobjectsissue_summary.tpl',
      1 => 1732910648,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679c8be0864706_63393587 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['issue']->value->getShowTitle()) {
$_smarty_tpl->_assignInScope('issueTitle', $_smarty_tpl->tpl_vars['issue']->value->getLocalizedTitle());
}
$_smarty_tpl->_assignInScope('issueSeries', $_smarty_tpl->tpl_vars['issue']->value->getIssueSeries());
$_smarty_tpl->_assignInScope('issueCover', $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl());?>

<div class="obj_issue_summary">

	<?php if ($_smarty_tpl->tpl_vars['issueCover']->value) {?>
		<a class="cover" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueCover']->value ));?>
" alt="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() )) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
		</a>
	<?php }?>

	<h2>
		<a class="title" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
			<?php if ($_smarty_tpl->tpl_vars['issueTitle']->value) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueTitle']->value ));?>

			<?php } else { ?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueSeries']->value ));?>

			<?php }?>
		</a>
		<?php if ($_smarty_tpl->tpl_vars['issueTitle']->value && $_smarty_tpl->tpl_vars['issueSeries']->value) {?>
			<div class="series">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueSeries']->value ));?>

			</div>
		<?php }?>
	</h2>

	<div class="description">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedDescription() ));?>

	</div>
</div><!-- .obj_issue_summary -->
<?php }
}
