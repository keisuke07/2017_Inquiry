<?php
/* Smarty version 3.1.30, created on 2017-06-19 11:40:27
  from "/home/keisuke07/Inquiry/smarty/templates/inquiry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947399bbe2bb3_50352588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d8dffc435e6e437881baf0c2fc8966469cc8482' => 
    array (
      0 => '/home/keisuke07/Inquiry/smarty/templates/inquiry.tpl',
      1 => 1497769852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947399bbe2bb3_50352588 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/example.css">
<head>

<body>
<?php if (0 < $_smarty_tpl->tpl_vars['error_detail_count']->value) {?>
  <div style="color: red;">エラーがあります</div>
<?php }?>

<?php if (true == $_smarty_tpl->tpl_vars['error_detail']->value['error_must_email']) {?>
  <div style="color: red;">メアドは必須です。</div>
<?php }
if (true == $_smarty_tpl->tpl_vars['error_detail']->value['error_csrf_token']) {?>
  <div style="color: red;">CSRFトークンエラー</div>
<?php }?>



  <form action="./inquiry_fin.php" method="post">
    emailアドレス(*):<input type="text" name="email"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><br>

    名前:<input type="text" name="name"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><br>

    誕生日:<input type="text" name="birthday"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['birthday'], ENT_QUOTES, 'UTF-8');?>
"><br>

    問い合わせ内容<textarea name="body"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['body'], ENT_QUOTES, 'UTF-8');?>
</textarea><br>

    <input type="hidden" name="csrf_token"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['csrf_token']->value, ENT_QUOTES, 'UTF-8');?>
">

    <button>問い合わせる</button>
  </form>
</body>
</html><?php }
}
