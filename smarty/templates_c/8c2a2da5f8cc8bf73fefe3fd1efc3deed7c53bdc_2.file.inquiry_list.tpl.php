<?php
/* Smarty version 3.1.30, created on 2017-07-18 18:30:45
  from "/home/keisuke07/Inquiry/smarty/templates/admin/inquiry_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dd5455d3cc2_11292895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2a2da5f8cc8bf73fefe3fd1efc3deed7c53bdc' => 
    array (
      0 => '/home/keisuke07/Inquiry/smarty/templates/admin/inquiry_list.tpl',
      1 => 1500370242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596dd5455d3cc2_11292895 (Smarty_Internal_Template $_smarty_tpl) {
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
			<h1>問い合わせ一覧</h1>
			

			<h2>検索</h2>
			<form action="./inquiry_list.php" method="GET">
				<input type="hidden" name="sort" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort']->value, ENT_QUOTES, 'UTF-8');?>
">
				name<input name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><br>
				email<input name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><br>
				誕生日<input name="birthday_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['birthday_from'], ENT_QUOTES, 'UTF-8');?>
">〜<input name="birthday_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_string']->value['birthday_to'], ENT_QUOTES, 'UTF-8');?>
"><br>
				<button>検索</button>
			</form>

			<h2>一覧</h2>
			<?php if ($_smarty_tpl->tpl_vars['back_page_flg']->value == true) {?>
				<a href="./inquiry_list.php?sort=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort']->value, ENT_QUOTES, 'UTF-8');?>
&<?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['uri_params']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
&p=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back_page']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-nomal"> back </a>
			<?php } else { ?>
				　　　　
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['next_page_flg']->value == true) {?>
				<a href="./inquiry_list.php?sort=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort']->value, ENT_QUOTES, 'UTF-8');?>
&<?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['uri_params']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
&p=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_page']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-nomal"> next </a><br>
			<?php } else { ?>
				　　　　
			<?php }?>

			<table class="table table-hover">
				<tr>
					<th>ID<a href="./inquiry_list.php?sort=id&<?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['uri_params']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
">▲</a> <a href="./inquiry_list.php?sort=id_desc&<?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['uri_params']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
">▼</a></th>
					<th>名前<a href="">▲</a> <a href="">▼</a></th>
					<th>e-mail<a href="">▲</a> <a href="">▼</a></th>
					<th>問い合わせ内容</th>
					<th>返信日時<a href="./inquiry_list.php?sort=response_date&<?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['uri_params']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
">▲</a> <a href="./inquiry_list.php?sort=response_date_desc&<?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['uri_params']->value, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
">▼</a></th>
					<th></th>
				</th>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inquiry_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
				<tr>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['inquiry_id'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['inquiry_body'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['response_date'], ENT_QUOTES, 'UTF-8');?>
</td>
					<td><a href="./inquiry_detail.php?inquiry_id=<?php echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['i']->value['inquiry_id']), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-nomal">問い合わせ詳細</a></td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</table>
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
