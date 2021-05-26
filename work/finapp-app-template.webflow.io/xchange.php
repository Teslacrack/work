<?php
//btc start
include 'naira.php';
$url = 'https://api.cryptapi.io/btc/info/';
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
    // echo $result;
curl_close($ch);

  $val=json_decode($result,true);
  $in= $val['prices'];
    // echo $in;
   
$btccryptotodollar=($in['USD']);
// $dollarnairaratio= 380.50; 
$btccryptotonaira = $btccryptotodollar*$dollarnairaratio;
 $btccryptotonaira;

// echo $multiply = $btccryptotonaira*0.03;
// $subtractedbtc = $btccryptotonaira-$multiply;
// echo $subtractedbtc;





//eth
$url = 'https://api.cryptapi.io/eth/info/';
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
    // echo $result;
curl_close($ch);

  $val=json_decode($result,true);
  $in= $val['prices'];
    // echo $in;
   
$ethcryptotodollar=($in['USD']);
// $dollarnairaratio= 380.50; 
$ethcryptotonaira = $ethcryptotodollar*$dollarnairaratio;
//  echo $ethcryptotonaira;

 $multiply = $ethcryptotonaira*0.03;
 $subtractedeth = $ethcryptotonaira-$multiply;
//  echo $subtractedeth;
 
// echo $cal;
// $valueindollar=$cryptotodollar* $numberofcrypto;
// $wire=$valueindollar *$dollarnairaratio;

// echo $wire;



//ltc
$url = 'https://api.cryptapi.io/ltc/info/';
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
    // echo $result;
curl_close($ch);
  $val=json_decode($result,true);
  $in= $val['prices'];
$ltccryptotodollar=($in['USD']);
// $dollarnairaratio= 380.50; 
 $ltccryptotonaira=$ltccryptotodollar*$dollarnairaratio;

// $multiply = $ltccryptotonaira*0.03;
// $subtractedltc = $ltccryptotonaira-$multiply;
// echo $subtractedltc;



//TRX
$url = 'https://api.cryptapi.io/trx/info/';
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
    // echo $result;
curl_close($ch);

  $val=json_decode($result,true);
  $in= $val['prices'];
    // echo $in;
   
    $trxcryptotodollar=($in['USD']);
    // $dollarnairaratio= 380.50; 
     $trxcryptotonaira=$trxcryptotodollar*$dollarnairaratio;
    
    // $multiply = $trxcryptotonaira*0.03;
    // $subtractedtrx = $trxcryptotonaira-$multiply;
    // echo  $subtractedtrx;
    
    
//usdt
$url = 'https://api.cryptapi.io/erc20/usdt/info/';
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
    // echo $result;
curl_close($ch);

  $val=json_decode($result,true);
  $in= $val['prices'];
    // echo $in;
   
    $usdtcryptotodollar=($in['USD']);
    // $dollarnairaratio= 380.50; 
    $usdtcryptotonaira=$usdtcryptotodollar*$dollarnairaratio;
    
    // $multiply = $trxcryptotonaira*0.03;
    // $subtractedtrx = $trxcryptotonaira-$multiply;
    // echo  $subtractedtrx;







?>