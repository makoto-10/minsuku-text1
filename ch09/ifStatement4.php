<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		  $var=15;
		  echo "\$var=".$var."→";

		  //変数の値で条件判定する。
		  if ($var){
		      echo "TRUEです。<br>\n";
		  }else {
		      echo "FALSEです。<br>\n";
		  }

		  echo "<br>\n";

		  //変数の値を変更。
		  $var=0;

		  echo "\$var='".$var."'→";

		  if ($var){
		      echo "TRUEです。<br>\n";
		  }else {
		      echo "FALSEです。<br>\n";
		  }
		 ?>
	</body>
</html>