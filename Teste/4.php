<?php
$maior=-99999;
$menor=99999;
$soma=0;
$produto=1;
$num = array();

for ($i=0; $i < 20; $i++) { 
	$num[]=rand(1,100000);
}

foreach ($num as $key => $nume) {

	if ($nume>$maior) {
		$maior=$nume;
	}
	if ($nume<$menor) {
		$menor=$nume;
	}

	$soma+=$nume;
	$produto*=$nume;
}
$med=$soma/20;

echo "Numero maior: ".$maior;
echo "<br>";
echo "Numero menor: ".$menor;
echo "<br>";
echo "Media: ".$med;
echo "<br>";
echo "Produto: ".$produto;
?>