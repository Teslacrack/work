<?php
//  session_start();
// if(isset( $_SESSION['vuser'])){

// }else{
//   header('location:index.php');
// }

 if (isset($_POST['submit']) && isset($_POST['bank_name']) && isset($_POST['account_number']) ){
  $bank = $_POST['bank_name'];
  $account=$_POST['account_number'];

  
   
// } else {
//    echo 'Please select your bank';

$data= array(
  "AccountNumber"=> $account,
  "BankCode"=> $bank,
  "SecretKey"=>"va4fp46kbv0l"
);

$value=json_encode($data);



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.wallets.africa/transfer/bank/account/enquire',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>"$value",
  
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer jc2rd438ls2c'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//  echo $response;
$val=json_decode($response,true);
$name= $val['AccountName'];
 echo $name;
$val=json_decode($response,true);
$code=$val['ResponseCode'];

if($code ==200){
  echo 'zeroo';
  // header("Location: redirect.php"); 

  $_SESSION['AccountName'] = $name;
  $container= $_SESSION['ResponseCode'];
}

if($code == 300){
    // echo 'we are ';
    // header("Location: index.php");
    $cat='Sorry we are unable to validate the bank account number of the recipient';
    echo $cat;
}

if($code == 400){
   $dog='One or more input field is empty';
}



}








  
?>




