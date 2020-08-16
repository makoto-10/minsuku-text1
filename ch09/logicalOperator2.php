<?php
    //フォームからの入力データ取得
    $num=$_POST['number'];

    //||を使って入力数値が0より小さいまたは10より大きい、という複数条件を判定
    if (0>$num||$num>10){
        $msg=$num."は有効範囲の数値ではありません。<br>";
    }else {
        $msg=$num."は有効範囲の数値です。<br>";
    }
?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		  echo $msg;   //判定結果のメッセージ表示
		?>
	</body>
</html>