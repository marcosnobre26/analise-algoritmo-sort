<?php
// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;

function insertionSort($data)
{
	$qtdComparacoes=0;
	$qtdTrocas=0;

    $n=count($data);
    $next=null;
    for($i=1; $i<$n; $i++)//outer loop
    {
        $next=$data[$i];
        for($j=$i-1; $j>=0; $j--)//inner loop
        {
            if( $data[$j]>$next )//change > to < for descending order
            {
                $data[$j+1]=$data[$j];
				$qtdComparacoes=$qtdComparacoes+1;
            }
            else
            {
                break;
            }
			$qtdTrocas=$qtdTrocas+1;
        }
        $data[$j+1]=$next; // insert the next value to the correct postion of the already sorted elements
 
    }
 
    return $data;
}

// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);

echo("Quantidade de comparacões:".$qtdComparacoes);
echo("Quantidade de trocas:".$qtdTrocas);
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';
 
echo implode(",",array(43,23,4,11,2,88,76,46));
echo "<br>";
echo implode(",",insertionSort(array(43,23,4,11,2,88,76,46)));