{* inquiry_detail.tpl *}
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
		{* inquiry_data|var_dump *}
			<table class="table">
				<tr>
					<td>id</td>
					<td>{$inquiry_data.inquiry_id}</td>
				</tr>
				<tr>
					<td>ステータス</td>
					<td>
						{if 0 == $inquiry_data.status}未送信{/if}
						{if 1 == $inquiry_data.status}返信作業中{/if}
						{if 2 == $inquiry_data.status}送信済{/if}
					</td>
				</tr>
				<tr>
					<td>email</td>
					<td>{$inquiry_data.email}</td>
				</tr>
				<tr>
					<td>name</td>
					<td>{$inquiry_data.name}</td>
				</tr>
				<tr>
					<td>birthday</td>
					<td>{$inquiry_data.birthday}</td>
				</tr>
				<tr>
					<td>body</td>
					<td><pre>{$inquiry_data.inquiry_body}</pre></td>
				</tr>
				<tr>
					<td>返信日時</td>
					<td>{$inquiry_data.response_date}</td>
				</tr>
				<tr>
					<td>返信内容</td>
					<td><pre>{$inquiry_data.response_body}</pre></td>
				</tr>
			</table>

			<h2>返信内容の登録</h2>
			<form action="./inquiry_edit.php" method="post">
				<input type="hidden" name="inquiry_id" value="{$inquiry_data.inquiry_id}">
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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>