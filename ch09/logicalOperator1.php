<?php
    //フォームからの入力データ取得
    $num=$_POST['number'];

    //&&を使って入力数値が0以上かつ10以下の複数条件を判定
    if (0<=$num&&$num<=10){
        $msg=$num."は有効範囲の数値です。<br>";
    }else {
        $msg=$num."は有効範囲の数値ではありません。<br>";
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