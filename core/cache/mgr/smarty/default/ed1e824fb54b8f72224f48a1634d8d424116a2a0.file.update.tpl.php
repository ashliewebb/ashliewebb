<?php /* Smarty version Smarty-3.0.4, created on 2016-02-16 23:01:09
         compiled from "/Users/ashliewebb/Sites/ashliewebb/manager/templates/default/resource/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96886839156c39c2573a226-43491306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1e824fb54b8f72224f48a1634d8d424116a2a0' => 
    array (
      0 => '/Users/ashliewebb/Sites/ashliewebb/manager/templates/default/resource/update.tpl',
      1 => 1455172042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96886839156c39c2573a226-43491306',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Users/ashliewebb/Sites/ashliewebb/core/model/smarty/plugins/modifier.escape.php';
?><div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div"><?php echo $_smarty_tpl->getVariable('tvOutput')->value;?>
</div>
<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hidden')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
    <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

<?php }} ?>

<?php echo $_smarty_tpl->getVariable('onDocFormPrerender')->value;?>

<?php if ($_smarty_tpl->getVariable('resource')->value->richtext&&(isset($_smarty_tpl->getVariable('_config')->value['use_editor']) ? $_smarty_tpl->getVariable('_config')->value['use_editor'] : null)){?>
    <?php echo $_smarty_tpl->getVariable('onRichTextEditorInit')->value;?>

<?php }?>
