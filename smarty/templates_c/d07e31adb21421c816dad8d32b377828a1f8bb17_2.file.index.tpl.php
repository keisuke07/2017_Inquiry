<?php
/* Smarty version 3.1.30, created on 2017-06-20 16:30:38
  from "/home/keisuke07/Inquiry/smarty/templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5948cf1eb2bae3_55892143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd07e31adb21421c816dad8d32b377828a1f8bb17' => 
    array (
      0 => '/home/keisuke07/Inquiry/smarty/templates/admin/index.tpl',
      1 => 1497943837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5948cf1eb2bae3_55892143 (Smarty_Internal_Template $_smarty_tpl) {
?>


<html>
	<body>
		<h1>管理画面</h1>
		<form action="./login.php" method="post">
			id:<input name="id"><br>
			password:<input name="pw"><br>
			<br>
			<button>ログイン</button>
		</form>
	</body>
</html><?php }
}
