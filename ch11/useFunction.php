<?php
	//繰り返し処理を行いランダムな数値を配列に格納
	for ($i=0;$i<4;$i++){
	    $data1[]=mt_rand(0,6);    //関数を利用して0～6のランダム数値を一つ取得
	}

	$data2=$data1;  //配列データをコピー

	rsort($data2); //関数を利用して降順に並び替え
?>

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	</head>
	<body>
	ランダムデータ...並び替えたデータ<br>
		<?php
		for ($i=0;$i<count($data1);$i++){ //関数を利用して配列要素分だけ繰り返す
		    echo "\$data1[{$i}]=".$data1[$i]." ---\$data2[{$i}]=".$data2[$i]."<br>\n";
		}
		?>
	</body>
</html>