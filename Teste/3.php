<?php
$num = array();

for ($i=0;$i<15;$i++){
    $num[]=rand(1,1000);
}
foreach ($num as $chave => $nume) {
    if ($nume%2==0){
        echo "Posição ".$chave." numero:impar";
    }
    else{
        echo "Posição ".$chave." numero:par";
    }
    echo "<br>";
}
?>