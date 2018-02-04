<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

	$currencys = array("trx", "xvg", "linda", "token", "ltc"); 
	
	$url = "https://yobit.net/api/3/ticker/btc_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$btcusd = $json_data["btc_usd"]["sell"];


	$url = "https://yobit.net/api/3/ticker/eth_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$ethusd = $json_data["eth_usd"]["sell"];
	
	$url = "https://yobit.net/api/3/ticker/waves_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$wavesusd = $json_data["waves_usd"]["sell"];

$url = "https://yobit.net/api/3/ticker/doge_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$dogeusd = $json_data["doge_usd"]["sell"];

	
	foreach ($currencys as $currency)
	{
	
	
	$url = "https://yobit.net/api/3/ticker/{$currency}_usd" ;
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$cursusd = $currency;
	$cursusd = $json_data["{$currency}_usd"]["sell"];

echo "<table border=1>";
echo "<th>$currency/USD</th>";

echo "<td>$";
echo number_format($cursusd, 8);
echo "</td></table>";  
        
    
   
        $url = "https://yobit.net/api/3/ticker/{$currency}_btc" ;
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$cursusd = $currency;
	$cursusd = $json_data["{$currency}_btc"]["sell"];

echo "<table border=1>";
echo "<th>$currency/BTC</th>";

echo "<td>"; 
echo number_format($cursusd, 8) ;
echo "($";
echo number_format($cursusd, 8) * $btcusd ;
echo ")";
echo "</td></table>";  
        
    
   
        $url = "https://yobit.net/api/3/ticker/{$currency}_eth" ;
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$cursusd = $currency;
	$cursusd = $json_data["{$currency}_eth"]["sell"];

echo "<table border=1>";
echo "<th>$currency/ETH</th>";

echo "<td>";
echo number_format($cursusd, 8);
echo "($";
echo number_format($cursusd, 8) * $ethusd ;
echo ")";
echo "</td></table>";  
       
 
   
        $url = "https://yobit.net/api/3/ticker/{$currency}_doge" ;
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$cursusd = $currency;
	$cursusd = $json_data["{$currency}_doge"]["sell"];

echo "<table border=1>";
echo "<th>$currency/DOGE</th>";

echo "<td>";
echo number_format($cursusd, 8);
echo "($";
echo number_format($cursusd, 8) * $dogeusd ;
echo ")";
echo "</td></table>";  
        
    
    
        $url = "https://yobit.net/api/3/ticker/{$currency}_waves" ;
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$cursusd = $currency;
	$cursusd = $json_data["{$currency}_waves"]["sell"];

echo "<table border=1>";
echo "<th>$currency/WAVES</th>";

echo "<td>";
echo number_format($cursusd, 8);
echo "($";
echo number_format($cursusd, 8) * $wavesusd ;
echo ")";
echo "</td></table>";  
       
    
	


}
