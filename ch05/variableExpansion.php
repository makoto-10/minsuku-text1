<?php
    //年齢用の変数
    $age=26;

    $output1='私の年齢は{$age}歳です。<br>';
    $output2="私の年齢は{$age}歳です。<br>";
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
        //シングルクォーテーションの文字列を表示
        echo $output1;

        //ダブルクォーテーションの文字列を表示
        echo $output2;
	?>
	</body>
</html>