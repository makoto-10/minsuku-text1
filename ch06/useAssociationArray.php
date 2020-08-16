<?php
    $profile['name']="神田ハナコ";
    $profile['身長']=154.6;
    $profile['age']=26;
    $profile['貯金']=500;
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
        echo "\t{$profile['name']}さんの身長は{$profile['身長']}cmです。<br>\n";
        echo "\t\t年齢は{$profile['age']}歳です。<br>\n";
        echo "30歳までに貯金\\{$profile['貯金']}万が目標です。\n"
	?>
	</body>
</html>