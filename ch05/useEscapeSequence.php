<?php
    //名前用の変数
    $name="神田ハナコ";

    //身長用の変数
    $height=154.6;

    //年齢用の変数
    $age=26;

    //貯金の変数
    $savings=500;
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   echo "\t",$name,'さんの身長は',$height,"cmです。<br>\n";
	   echo "\t\t年齢は",$age,"歳です。<br>\n";
	   echo "\t\t30歳までに貯金\\",$savings,"万が目標です。\n"
	?>
	</body>
</html>