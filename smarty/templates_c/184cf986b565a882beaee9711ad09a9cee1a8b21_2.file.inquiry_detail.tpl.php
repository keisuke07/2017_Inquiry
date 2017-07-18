<?php
/* Smarty version 3.1.30, created on 2017-07-04 18:34:41
  from "/home/keisuke07/Inquiry/smarty/templates/admin/inquiry_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b613113ee59_90579719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '184cf986b565a882beaee9711ad09a9cee1a8b21' => 
    array (
      0 => '/home/keisuke07/Inquiry/smarty/templates/admin/inquiry_detail.tpl',
      1 => 1499159859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595b613113ee59_90579719 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<H1>問い合わせ詳細</H1>
		
			<table class="table">
				<tr>
					<td>id</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['inquiry_id'], ENT_QUOTES, 'UTF-8');?>
</td>
				</tr>
				<tr>
					<td>ステータス</td>
					<td>
						<?php if (0 == $_smarty_tpl->tpl_vars['inquiry_data']->value['status']) {?>未送信<?php }?>
						<?php if (1 == $_smarty_tpl->tpl_vars['inquiry_data']->value['status']) {?>返信作業中<?php }?>
						<?php if (2 == $_smarty_tpl->tpl_vars['inquiry_data']->value['status']) {?>送信済<?php }?>
					</td>
				</tr>
				<tr>
					<td>email</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
				</tr>
				<tr>
					<td>name</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
				</tr>
				<tr>
					<td>birthday</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['birthday'], ENT_QUOTES, 'UTF-8');?>
</td>
				</tr>
				<tr>
					<td>body</td>
					<td><pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['inquiry_body'], ENT_QUOTES, 'UTF-8');?>
</pre></td>
				</tr>
				<tr>
					<td>返信日時</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['response_date'], ENT_QUOTES, 'UTF-8');?>
</td>
				</tr>
				<tr>
					<td>返信内容</td>
					<td><pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['response_body'], ENT_QUOTES, 'UTF-8');?>
</pre></td>
				</tr>
			</table>

			<h2>返信内容の登録</h2>
			<form action="./inquiry_edit.php" method="post">
				<input type="hidden" name="inquiry_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inquiry_data']->value['inquiry_id'], ENT_QUOTES, 'UTF-8');?>
">
				返信内容<textarea name="response_body"></textarea><br>
				<button class="btn btn-primary">返信内容を登録する</button>
			</from>

			<h2>未実装</h2>
			<ul>
				<li>「返信をmailする」機能</li>
			</ul>
			
			<hr>
			<a href="./top.php">Topに戻る</a>
		</div>
	<!-- Latest compiled and minified JavaScript -->
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
