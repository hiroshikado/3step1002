<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>テーブルからデータを検索して表示しよう</title>
	<link rel="stylesheet" type="text/css" href="/php/css/skyblue.css">
</head>
<body>
<?php
require_once ("header.php");
?>
<div class="bg-success padding-y-5">
	<div class="container padding-y-5">
		<strong>メーカー検索</strong>
	</div>
</div>
<div class="padding-y-5">
	<div class="container padding-y-5">
		<strong class="color-main">検索するメーカーを選択してください</strong>
	</div>
</div>
<div class="padding-y-5">
	<div class="container padding-y-5">
		<form action="selectResult.php" method="post">
			<table style="width:100%" class="table">
			<tr>
				<td style="width:30%">
					<div class="color-main text-right margin-top-10">
						<strong>メーカー</strong>
					</div>
				</td>
				<td style="width:35%">
					<select name="maker" class="form-control">
						<option value="すべて">すべて</option>
						<option value="バッタ">バッタ</option>
						<option value="三つ星">三つ星</option>
						<option value="かいてる">かいてる</option>
					</select>
				</td>
				<td style="width:35%">
					<input type="submit" value="検索する" class="btn">
				</td>
			</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
