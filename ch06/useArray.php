<?php
    $profile[0]="神田ハナコ";
    $profile[1]=154.6;
    $profile[]=26;
    $profile[]=500;
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
        echo "\t{$profile[0]}さんの身長は{$profile[1]}cmです。<br>\n";
        echo "\t\t年齢は{$profile[2]}歳です。<br>\n";
        echo "30歳までに貯金\\{$profile[3]}万が目標です。\n"
	?>
	</body>
</html>