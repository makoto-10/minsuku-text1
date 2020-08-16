<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		$total=0;

		for ($i=1;$i<=5;$i++){
		    echo "\$i=".$i."<br>\n";

		    $total+=$i;   //$totalにカウンタ変数の値を加算

		}
		 echo $i."未満の数値の総計は".$total."です。";
		?>
	</body>
</html>