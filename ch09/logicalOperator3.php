<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		  $bool=true;

		  //普通に判定します。
		  if ($bool=true){
		      echo "◆変数の中身はtrueですね。<br>\n";
		  }else {
		      echo "◆変数の中身はfalseですね。<br>\n";
		  }

		  //!を使って判定結果を反転させます。
		  if (!($bool=true)){
		      echo "◆変数の中身はtrueですね。<br>\n";
		  }else {
		      echo "◆変数の中身はfalseですね。<br>\n";
		  }
		?>
	</body>
</html>