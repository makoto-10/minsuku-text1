<?php
    $hobby="プログラミング";   //変数に趣味を設定
    $year=1;    //変数に年を設定

    //文字連結の結果を変数に代入
    $str="経験年数は[".$year."]年になりました。\n";
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		  echo "私の趣味は｢".$hobby."｣です。<br>\n";
		  echo $str;
		?>
	</body>
</html>