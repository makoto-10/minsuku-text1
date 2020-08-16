<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		//配列に趣味を4つ
    		$hobby=array("映画","読書","料理","卓球");

    		echo "私の趣味は";
    		//foreachを使って配列データをすべて画面に表示
    		foreach ($hobby as $val){
    		    echo"、".$val;
    		}

    		echo "などです。";
		?>
	</body>
</html>