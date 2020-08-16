<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		for ($i=0;$i<50;$i++){
		    echo '$i='.$i."<br>\n";

    		    //$iが5の場合繰り返しは終了する
		      if ($i==5){
		        break;
		      }
		}

		echo '繰り返しは「$i='.$i.'」まで行われました。';
		?>
	</body>
</html>