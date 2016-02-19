<?php /* Smarty version Smarty-3.0.4, created on 2016-02-17 16:32:07
         compiled from "/Users/ashliewebb/Sites/ashliewebb/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170804965456c49277bd5e79-98094075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0008e77fe814bdf10147d12de7d9897d6bfa0181' => 
    array (
      0 => '/Users/ashliewebb/Sites/ashliewebb/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1455172042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170804965456c49277bd5e79-98094075',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Users/ashliewebb/Sites/ashliewebb/core/model/smarty/plugins/modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
    
});
</script>