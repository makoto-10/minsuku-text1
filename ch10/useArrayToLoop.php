<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
		<?php
		$sabject=array('国語','数学','理科','社会','英語');
		  $scores=array(69,95,92,32,56);
		$total=0;

		  //配列の添え字にカウンタ変数を利用
		for ($i=0;$i<5;$i++){
		    //各教科名と点数を画面に表示
		    echo $sabject[$i].":".$scores[$i]."点<br>\n";
		$total+=$scores[$i];   //5教科の合計を加算
		}
		//平均点を算出
		$avarage=$total/5;

		echo "5教科の合計は「".$total."」点です。<br>\n";
		echo "5教科の平均は「".$avarage."」点です。<br>\n";
		?>
	</body>
</html>