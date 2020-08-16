<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		for ($i=0;$i<10;$i++){
		    //2で割り切れる偶数数値はスキップする
		    if (($i%2)==0){
		        continue;
		    }
		    echo $i."は奇数です。<br>\n";
		}

		echo '繰り返しは「$i='.$i.'」まで行いました。';
		?>
	</body>
</html>