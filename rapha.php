<?php 

 $x = 4;
 $fatorial = $x;

if($x>1){
while($x>1){
    $x-- ;
	$fatorial = $fatorial * $x;

}

echo $fatorial;
}else{
	if($x<0){
		echo "não existe fatorial negativo";
	}else{
		echo "1";
	}

}




//echo "teste";

?>