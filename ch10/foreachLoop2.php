<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		  //5教科の点数を連想配列で作成
		  $data=array('国語'=>69,'数学'=>95,'理科'=>92,'社会'=>32,'英語'=>56);

		  foreach ($data as $key=>$val){
		      echo $key.":".$val."点<br>\n";   //各教科名と点数を画面に表示
		      $total+=$val;                 //5教科の合計を加算
		  }

		  //平均点を算出
		  $average=$total/5;

		  echo "5教科の合計は「".$total."」点です。<br>\n";
		  echo "5教科の平均は「".$average."」点です。<br>\n";
		?>
	</body>
</html>