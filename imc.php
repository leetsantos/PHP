<?php
$peso= readline("Digite seu peso:  ");
$altura= readline("Digite sua altura:  ");
$imc= $peso/(($altura)**2);

if ($imc<18.5) {
    echo "Abaixo do peso" . PHP_EOL ;
    }
    elseif ($imc<25) {
        echo "Peso Normal" . PHP_EOL;
    }
        elseif ($imc<30) {
            echo "Sobrepeso" . PHP_EOL;
        }
            elseif($imc<35){
                echo "Obesidade nível 1". PHP_EOL;
            }
                elseif ($imc<40) {
                    echo "Obesidade Nível 2" . PHP_EOL;
                }
                    else {
                        echo "Obesidade Morbida" . PHP_EOL;
                    }
echo "IMC:$imc" . PHP_EOL;