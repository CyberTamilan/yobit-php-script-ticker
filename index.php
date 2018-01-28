<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");




$url = "https://yobit.net/api/3/ticker/doge_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$dogesusd = $json_data["doge_usd"]["sell"];

echo "<table border=1>";
echo "<th>DOGE/USD</th>";

echo "<td>$";
echo $dogesusd;
echo "</td></table>"; 



$url = "https://yobit.net/api/3/ticker/btc_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$btcusd = $json_data["btc_usd"]["sell"];


$url = "https://yobit.net/api/3/ticker/doge_btc";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$dogebtc=$json_data["doge_btc"]["sell"];
$dogebtcs=number_format($dogebtc, 8);


echo "<table border=1>";
echo "<th>DOGE/BTC</th>";
echo "<td>$dogebtcs ";
echo "($";
echo $json_data["doge_btc"]["sell"] * $btcusd;
echo ")</td></table>";

$url = "https://yobit.net/api/3/ticker/eth_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$ethusd = $json_data["eth_usd"]["sell"];


$url = "https://yobit.net/api/3/ticker/doge_eth";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$dogeeth=$json_data["doge_eth"]["sell"];
$dogeeths=number_format($dogeeth, 8);
echo "<table border=1>";
echo "<th>DOGE/ETH</th>";

echo "<td>$dogeeths";

echo "($";
echo  number_format($json_data["doge_eth"]["sell"] * $ethusd, 8);
echo ")</td></table>"; 




$url = "https://yobit.net/api/3/ticker/waves_usd";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$wavesusd = $json_data["waves_usd"]["sell"];


$url = "https://yobit.net/api/3/ticker/doge_waves";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$dogewaves=$json_data["doge_waves"]["sell"];
$dogewavess=number_format($dogewaves, 8);
echo "<table border=1>";
echo "<th>DOGE/WAVES</th>";

echo "<td>$dogewavess";

echo "($";
echo  number_format($json_data["doge_waves"]["sell"] * $wavesusd, 8);
echo ")</td></table>"; 


























