<?php 
/*For em php*/
for($i=0;$i<10;$i++){
    echo $i."<br>";
}


/*ForEach em php*/
$meuArray=["Sugar","Milk","Eggs","Chocolate"];
echo "The items in my Array : <br>";
foreach($meuArray as $item){
    echo "Item : ".$item."<br>";
}
/*Exercicio 1*/
for($i=0;$i<10;$i++){
    for($y=0;$y<10;$y++){
        echo "-";
    }
    echo "<br>";
}
/*Exercicio 2*/
for($t=0;$t<10;$t++){
    for($z=0;$z<=$t;$z++){
        echo ("-");
    }
    echo "<br>";
}
