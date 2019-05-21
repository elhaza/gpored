<?php
function primos($howMuch)
{
    $cont = 1;
    $tryPrimo = 1;
    while(true){

        $tryPrimo++;
        if(isPrimo($tryPrimo)) {echo $tryPrimo. ' '; $cont++;}
        if ($cont==$howMuch) break;

    }
}

function isPrimo($num){
    $cont = 0;
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0){

            if(++$cont>1)
                return false;
        }
    }
    return true;
}
primos(10); 