<?php 
// include 'api.php';
include 'controller.php';
// $link = mysqli_connect("sql203.ezyro.com", "ezyro_28647405", "ymdxwhp7c", "ezyro_28647405_crypto_db");
// include 'banks.php';
$paid= 'Paid';
 if (isset($_POST['submit']) && isset($_POST['invoice']) && !empty($_POST['invoice'])  ) {
     $invoice=$_POST['invoice']; 
    //  $_SESSION['invoice']=$invoice;

     $url="https://api.cryptapi.io/trx/logs/?callback=http://ego.ezyro.com/work/finapp-app-template.webflow.io/paybtc.php/?invoice=$invoice";
    // echo urlencode($url);
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
    //   echo $result;
    curl_close($ch);
    $val=json_decode($result,true);
      $callbacks=$val['callbacks'];

      $value_forwarded_coin= $callbacks[0]['value_forwarded_coin'];
      $value_coin=$callbacks[0]['value_coin'];

    $val=json_decode($result,true);
    $address_out= $val['address_out'];
    $notify_confirmations=$val['notify_confirmations'];

 
$sqli="UPDATE users SET total_received = '$value_forwarded_coin' where invoice = '$invoice'";  
  $result=mysqli_query($link,$sqli)  or die('connection failed'.mysqli_error($link));

 

  $sqli="UPDATE users SET unconfirmed_balance = '$notify_confirmations' where invoice = '$invoice'";  
  $result=mysqli_query($link,$sqli)  or die('connection failed'.mysqli_error($link));

  
  $sqli="UPDATE users SET total_sent = '$value_coin' where invoice = '$invoice'";  
  $result=mysqli_query($link,$sqli)  or die('connection failed'.mysqli_error($link));

  
  $search= "SELECT  AccountNumber FROM users where invoice ='$invoice'";
  $result=mysqli_query($link,$search)  or die('connection failed'.mysqli_error($link));
    
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <?php $AccountNumber= $row["AccountNumber"]; ?> 
    
    <?php
    $i++;
    }
  
  // echo $AccountNumber;
  
  

  $search= "SELECT  Bankcode FROM users where invoice ='$invoice'";
  $result=mysqli_query($link,$search)  or die('connection failed'.mysqli_error($link));
    
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <?php $Bankcode= $row["Bankcode"]; 
    ?> 
    
    <?php
    $i++;
    }
  
  // echo $Bankcode;

  $search= "SELECT currency FROM users where invoice ='$invoice'";
  $result=mysqli_query($link,$search)  or die('connection failed'.mysqli_error($link));
    
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <?php $currency= $row["currency"]; 
    ?> 
    
    <?php
    $i++;
    }
  
  // echo $currency;


  $search= "SELECT  subtracted FROM users where invoice ='$invoice'";
  $result=mysqli_query($link,$search)  or die('connection failed'.mysqli_error($link));
    
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <?php $wire= $row["subtracted"]; ?> 
    
    <?php
    $i++;
    }
  
  // echo $wire;
  
   
 }

 if (isset($_POST['pay']) && isset($_POST['bank']) && isset($_POST['Account']) && isset($_POST['invoice']) && !empty($_POST['invoice']) && !empty($_POST['bank'] && !empty($_POST['Account'])  && !empty($_POST['Amount']) && isset($_POST['Amount']) ) ){
  $Bank= $_POST['bank'];
  $Account= $_POST['Account'];
  $invoice= $_POST['invoice'];
  $Amount= $_POST['Amount'];
//transfer
$data= array(
  "action"=>"transfer",
    "amount"=> $Amount,
    "bankcode"=>$Bank, 
    "accountnumber"=>$Account,
    "sender_name"=> "John Doe",
    "narration"=> "Upkeep",
    "orderRef"=>$invoice
  
  );
  $jsonData = json_encode($data);
  $data = http_build_query($data);
  $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://demo.api.gladepay.com/disburse",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "PUT",
          CURLOPT_POSTFIELDS => $jsonData,
          CURLOPT_HTTPHEADER => array(
            "key: 123456789 ",
            "mid: GP0000001 "
          ),
          ));
          $response = curl_exec($curl);
          $err = curl_error($curl);
          curl_close($curl);
          if ($err) {
          echo "cURL Error #:" . $err;
          } else {
          // echo $response;
          $val=json_decode($response,true);
          echo $message= $val['message'];

          if($message=='Transfer Successful'){
           echo $paid;
           $sqli="UPDATE users SET payout = '$paid' where invoice = '$invoice'";  
           $result=mysqli_query($link,$sqli)  or die('connection failed'.mysqli_error($link));


          }

          }       

//transfer




 }
















?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    
    <div class="container">
    <a href="board.php"><button class="btn-primary" role="button">Records</button></a>
    <Br><Br>
    <label for="exampleFormControlSelect2">Cryptocurrency</label>
<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="<?php echo @$currency;?>" disabled name="storage">
<!-- <br><br> -->
<label for="exampleFormControlSelect2">Value Sent</label>
<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="<?php echo @$value_coin;?>" disabled name="storage">
<label for="exampleFormControlSelect2">Account Number</label>
<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="<?php echo @$AccountNumber;?>" disabled name="storage">
<label for="exampleFormControlSelect2">Amount</label>
<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="<?php echo @$wire;?>" disabled name="storage">
<label for="exampleFormControlSelect2">Bank</label>
<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="<?php echo @$wire;?>" disabled name="storage">
    </div>
    <Br>
<div class="container">
    <form action="confirmtrx.php" method="POST" id="form">
  
    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="invoice" placeholder="Invoice Number"> 
  <Br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" name="pay">
  Send Money
</button>

</form>
</div>


<!--  -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="confirm.php" method="POST"> 

  <div class="mb-4">
    <label for="exampleInputEmail1">Account Number</label>
    <input type="tel" class="form-control" id="AccountNumber" aria-describedby="emailHelp" placeholder="Enter Account Number" name="Account">
  </div>

  <div class="mb-4">
  <label for="exampleInputEmail1">Bank</label>
  <select class="form-select" aria-label="Default select example" name="bank">
  <option value="044" >Access</option>
   <option value="058">GTB</option>
   <option value="035">Wema</option>
  </select>
  </div>
  
  <div class="mb-4">
    <label for="exampleInputEmail1">Amount</label>
    <input type="tel" class="form-control" id="AccountNumber" aria-describedby="emailHelp" placeholder="Enter Amount" name="Amount">
  </div>

  <div class="mb-4">
    <label for="exampleInputEmail1">Invoice Number</label>
    <input type="tel" class="form-control" id="AccountNumber" aria-describedby="emailHelp" placeholder="Enter Invoice Number" name="invoice">
  </div>

<br>
<div class="text-center">
  <button type="submit" class="btn btn-danger" name="pay">Submit</button>
</div>
</form>
<div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>




  </body>
</html>