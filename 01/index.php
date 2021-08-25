<?php

$minhaVariavelEmPhp="olá";
$diferente="bem diferente";
/* uma string entre aspas simples ele nao interpreta ou seja é LITERAL */
$stringLiteral='o valor de $diferente nao irá aparecer';
/*concatencao em php é diferente se usa o ponto para concatenar */
$concatencaoEmPHP="EM PHP É ".$diferente;
echo $minhaVariavelEmPhp;
echo "os echos em php nao pulam linha entao precisam de < BR > <br>";
echo $concatencaoEmPHP;
/*quando o arquivo contém apenas PHP nao é necessário fechar com /php?>/*/


/*Apenas PHP >=7.4
Operador Spread*/
$lista1=["item1","item2","item3","item4"];
$lista2=["item5","item6","item7","item8"];
$listaUsandoSpread=[...$lista1,...$lista2];




/*Operador ternário em php*/
$idade=22;
echo($idade>18)?'<br>é verdadeiro':'<br>é falso';



/*Apenas PHP >=7.4
verificando se uma variavel foi iniciada
 SEM Operador Null CAO */
$nome=Leonardo;
$nomeCompleto.=isset($sobrenome)?$sobrenome:"";
/* COM Operador Null CAO */
$nomeCompleto.=$sobrenome??"senao existir usa o valor após o ??, se existir usa o valor da varivel";

/*usando os operadores*/
$nomeCompleto=$nome??"Visitante";
$nomeCompleto.=$sobrenome??"";

/* ^^^^ PHP >=7.4*/