<?php

function multiploDeTres($num)
{
    if ((($num % 3) == 0) && (($num % 5) != 0))
    {        
        return true;
    }
    if ((($num % 3) != 0) || (($num % 5) == 0))
        return false;
}

function multiploDeCinco($num)
{
    if ((($num % 3) != 0) && (($num % 5) == 0))
    {        
        return true;
    }
    if ((($num % 3) == 0) || (($num % 5) != 0))
        return false;
}

function multiploDeTresDeCinco($num)
{
    if ((($num % 3) == 0) && (($num % 5) == 0))
    {    
        return true;
    }
    if ((($num % 3) != 0) || (($num % 5) != 0))
        return false;    
}

echo("Comenzando ciclo de 1..100<br><br>\n");

for ($n = 1; $n <= 100; $n++)
{    
    echo("Procesando ".$n);
    if (multiploDeTres($n) && !multiploDeCinco($n) && !multiploDeTresDeCinco($n))
    {
        echo(" Falabella<br>\n");
    }
    if (!multiploDeTres($n) && multiploDeCinco($n) && !multiploDeTresDeCinco($n))
    {
        echo(" IT<br>\n");
    }
    if (multiploDeTresDeCinco($n))
    {
        echo(" Integaciones<br>\n");
    }
    echo("<br>\n");
}

?>