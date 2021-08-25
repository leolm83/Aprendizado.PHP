<?php
/*funcoes em PHP*/
/*n3 está sendo um paramentro nao obrigatório, sendo assim ele possui um valor padrao*/
/*Aqui os parametros estao sendo passados por valor !!!*/
function somar ($n1,$n2,$n3=0){
    return $n1+$n2;
}
echo somar(3,5)."<br>";

/*Passagem de paramentros por REFERENCIA usa-se &$nomeVariavel*/
$total=5;
function alteraTotal($n1,$n2,&$total){
  $total+=$n1+$n2;
}
alteraTotal(2,3,$total);
/*ESSA FUNCAO IRÁ ALTERAR O VALOR DA VARIAVEL QUE ESTA FORA DO ESCOPO POIS REFERENCIA A ELA*/
echo $total."<br>";
