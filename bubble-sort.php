<?php

// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;


//$numbers = array(1,3,2,5,2);
$numbers = array();


echo "Numbers before sort: ";
for ( $i = 0; $i < 100; $i++ )
   //echo $numbers[$i];
	$numbers[$i]=$i;
echo "n";

$array_size = count($numbers);

$qtdComparacoes=0;
$qtdTrocas=0;

for ( $i = 0; $i < $array_size; $i++ )
{
   for ($j = 0; $j < $array_size; $j++ )
   {
      if ($numbers[$i] < $numbers[$j])
      {
         $temp = $numbers[$i];
         $numbers[$i] = $numbers[$j];
         $numbers[$j] = $temp;
		 $qtdComparacoes=$qtdComparacoes+1;
		 $qtdTrocas=$qtdTrocas+1;
      }
   }
}

// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);

echo("Quantidade de comparações: ".$qtdComparacoes);
echo("Quantidade de trocas: ".$qtdTrocas);
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';


echo "Numbers after sort: ";
for( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i];
echo "n";











// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;


//$numbers = array(1,3,2,5,2);
$numbers = array();


echo "Numbers before sort: ";
for ( $i = 0; $i < 10000; $i++ )
   //echo $numbers[$i];
	$numbers[$i]=$i;
echo "n";

$array_size = count($numbers);

$qtdComparacoes=0;
$qtdTrocas=0;

for ( $i = 0; $i < $array_size; $i++ )
{
   for ($j = 0; $j < $array_size; $j++ )
   {
      if ($numbers[$i] < $numbers[$j])
      {
         $temp = $numbers[$i];
         $numbers[$i] = $numbers[$j];
         $numbers[$j] = $temp;
		 $qtdComparacoes=$qtdComparacoes+1;
		 $qtdTrocas=$qtdTrocas+1;
      }
   }
}

// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);

echo("Quantidade de comparações: ".$qtdComparacoes);
echo("Quantidade de trocas: ".$qtdTrocas);
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';


echo "Numbers after sort: ";
for( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i];
echo "n";


























// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;


//$numbers = array(1,3,2,5,2);
$numbers = array();


echo "Numbers before sort: ";
for ( $i = 0; $i < 100000; $i++ )
   //echo $numbers[$i];
	$numbers[$i]=$i;
echo "n";

$array_size = count($numbers);

$qtdComparacoes=0;
$qtdTrocas=0;

for ( $i = 0; $i < $array_size; $i++ )
{
   for ($j = 0; $j < $array_size; $j++ )
   {
      if ($numbers[$i] < $numbers[$j])
      {
         $temp = $numbers[$i];
         $numbers[$i] = $numbers[$j];
         $numbers[$j] = $temp;
		 $qtdComparacoes=$qtdComparacoes+1;
		 $qtdTrocas=$qtdTrocas+1;
      }
   }
}

// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);

echo("Quantidade de comparações: ".$qtdComparacoes);
echo("Quantidade de trocas: ".$qtdTrocas);
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';


echo "Numbers after sort: ";
for( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i];
echo "n";
?>