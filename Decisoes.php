<?php

$idade = 17;
$numeroDePessoas = 1;
echo "Você só pode entrar se tiver mais de 18 anos.". PHP_EOL;
echo "a partir de 16 anos acompanhado \n";

if($idade >= 18){
    echo "Você tem $idade anos, pode entrar!";
}
elseif($idade >= 16 && $numeroDePessoas >= 1){
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar!!";
}
else{
    echo "Você tem $idade anos, Não entrará!!";
}
echo PHP_EOL;
echo "Até Logo";
