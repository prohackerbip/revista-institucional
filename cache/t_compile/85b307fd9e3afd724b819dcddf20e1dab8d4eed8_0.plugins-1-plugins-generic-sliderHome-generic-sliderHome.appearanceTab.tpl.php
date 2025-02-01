<?php
/* Smarty version 4.3.1, created on 2025-01-31 09:24:30
  from 'plugins-1-plugins-generic-sliderHome-generic-sliderHome:appearanceTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679c88be4c8c53_50402594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85b307fd9e3afd724b819dcddf20e1dab8d4eed8' => 
    array (
      0 => 'plugins-1-plugins-generic-sliderHome-generic-sliderHome:appearanceTab.tpl',
      1 => 1738306666,
      2 => 'plugins-1-plugins-generic-sliderHome-generic-sliderHome',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679c88be4c8c53_50402594 (Smarty_Internal_Template $_smarty_tpl) {
?> <tab id="sliderhome" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.sliderHome.tabname"),$_smarty_tpl ) );?>
">
	
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'sliderHomeGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"plugins.generic.sliderHome.controllers.grid.SliderHomeGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"sliderHomeGridContainer",'url'=>$_smarty_tpl->tpl_vars['sliderHomeGridUrl']->value),$_smarty_tpl ) );?>

	
	<pkp-form
		v-bind="components.<?php echo (defined('FORM_SLIDER_SETTINGS') ? constant('FORM_SLIDER_SETTINGS') : null);?>
"
		@set="set"
	/>
</tab><?php }
}
