<?php
$toPlace = '';

if($Timage){
	$toPlace = '<img src="'.$Timage.'" width="20%" height="100%">';
}else{
	$anotherPosition = $i + 1;
	$toPlace = '<section class="placing-text"><p>' . $anotherPosition . '</p></section>';
}

echo('
<article class="user">

	'. $toPlace.'

	<section class="user-description">
	<p class="name">'. $cUsername .'</p>
	<p class="pontuation">PONTUAÇÃO: '. $cUserPoints .' pts</p>
	</section>
</article>
');

?>

