<?php
    $data1=7+5*10;  //5*10が先に計算される
    $data2=(7+5)*10;    //7+5が先に計算される
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		  echo "7+5*10={$data1}<br>\n";
		  echo "(7+5)*10={$data2}<br>";
		?>
	</body>
</html>