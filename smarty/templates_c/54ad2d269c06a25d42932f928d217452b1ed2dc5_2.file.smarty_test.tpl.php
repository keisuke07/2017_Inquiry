<?php
/* Smarty version 3.1.30, created on 2017-06-20 16:29:29
  from "/home/keisuke07/Inquiry/smarty/templates/smarty_test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5948ced9d0b4f5_01661302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ad2d269c06a25d42932f928d217452b1ed2dc5' => 
    array (
      0 => '/home/keisuke07/Inquiry/smarty/templates/smarty_test.tpl',
      1 => 1495531511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5948ced9d0b4f5_01661302 (Smarty_Internal_Template $_smarty_tpl) {
?>


Smartyテスト<br>
入力された文字は"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"です。<br>
連想配列の場合、<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ar']->value['a'], ENT_QUOTES, 'UTF-8');?>
や<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ar']->value['b'], ENT_QUOTES, 'UTF-8');?>
です。<?php }
}
