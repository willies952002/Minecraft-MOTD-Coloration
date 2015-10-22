<?php
/*
 * Written by willies952002 <admin@domnian.com>
 *
 * @license MIT
 */

function color($input) {
	if ( substr($input,0,1) !== '§' ) {
		$input = '§f' . $input;
	}
	$input = str_replace('\n', '<br/>', $input);
	$array = explode('§', $input);
	echo 'Raw: <br/>'. $input . '<br/><br/>Colored: <br/>';
	foreach ( $array as $val ) {
		if ( strlen($val) === 1 ) {
			echo '<span class="mccolor_';
			echo strtolower(substr($val,0,1));
			echo '">';
			echo substr($val,1);
		} else {
			echo '<span class="mccolor_';
			echo strtolower(substr($val,0,1));
			echo '">';
			echo substr($val,1);
			echo '</span>';
		}
	}
}

?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.domnian.com/assets/css/minecraft.css">
</head>
<body class="mcfont mccolor_f" style="background: #000;">
<?=color('§a[§6§lEmpire Minecraft§a] §bSurvival§a/§bTown§a/§bEconomy!\n§aBe a part of the community, check the forums!'); ?>
<a href="https://github.com/willies952002/Minecraft-MOTD-Coloration"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/52760788cde945287fbb584134c4cbc2bc36f904/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png"></a>
</body>
</html>
