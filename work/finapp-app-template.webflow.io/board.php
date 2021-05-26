<?php
session_start();
include 'controller.php';
// $link = mysqli_connect("sql203.ezyro.com", "ezyro_28647405", "ymdxwhp7c", "ezyro_28647405_crypto_db");
$result = mysqli_query($link,"SELECT * FROM users");

if (isset($_POST['update']) && isset($_POST['crypto'])){
  $crypto=$_POST['crypto'];

  // $sqli="UPDATE users SET total_received = '$value_forwarded_coin' where invoice = '$invoice'";  
  // $result=mysqli_query($link,$sqli)  or die('connection failed'.mysqli_error($link));

 

  // $sqli="UPDATE users SET unconfirmed_balance = '$notify_confirmations' where invoice = '$invoice'";  
  // $result=mysqli_query($link,$sqli)  or die('connection failed'.mysqli_error($link));

  
  // $sqli="UPDATE users SET total_sent = '$value_coin' where invoice = '$invoice'";  
  // $result=mysqli_query($link,$sqli)  or die('connection failed'.mysqli_error($link));



  if(isset($_POST['crypto'])){        
    if($crypto =='BTC'){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/confirmbtc.php");
        // echo $value3;
      
      } else {
       
       
        // $errorMsg='shit';

      }
      if($crypto == 'ETH'){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/confirmeth.php");
        // echo $value3;
      }else{
        // $errorMsg='shit';
      }
 
      if($crypto == 'LTC'){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/confirmltc.php");
        // echo $value3;
      }else{
        // $errorMsg='shit';
      }


      if($crypto == 'TRX'){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/confirmtrx.php");
        // echo $value3;
      }else{
        // $errorMsg='shit';
      }



      if($crypto == 'USDT'){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/confirmusdt.php");
        // echo $value3;
      }else{
        // $errorMsg='shit';
      }








   }











  

}
 
 





?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

<!-- DataTales Example -->
<a href="board.php"><button class="btn-primary" role="button">Records</button></a>
<a href="delete.php"><button class="btn-danger" type="submit" role="button">Delete</button></a>
<!-- <a href="updatedata.php"><button class="btn-warning" type="submit" role="button">Update</button></a> -->
<!-- <a href="confirm.php"><button class="btn-success" type="submit" role="button">Confirm</button></a> -->
<br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" id="haba">
<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="crypto">
  <option value="#">Crypto</option>
  <option value="BTC">BTC</option>
  <option value="ETH">ETH</option>
  <option value="LTC">LTC</option>
  <option value="TRX">TRX</option>
  <option value="USDT">USDT</option>
  </select>
  <br>
   <div class="text-center">
  <button class="btn-success" type="submit" role="button" name="update">Search</button>
  </div>
</form>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <td>id</td>
            <td>Account Number</td>
            <td>Bank Code</td>
            <td>Currency</td>
            <td>Amount</td>
            <td>AccountName</td>
            <td>in_address</td>
            <td>Payout</td>
            <td>total_received</td>
            <td>total_Sent</td>
            <td>unconfirmed_balance</td>
            <td>email</td>
            <td>wire</td>
            <td>invoice</td>
          </tr>
        </thead>
      <tbody>
      <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
  <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["AccountNumber"]; ?></td>
    <td><?php echo $row["BankCode"]; ?></td>
    <td><?php echo $row["currency"]; ?></td>
    <td><?php echo $row["Amount"]; ?></td>
    <td><?php echo $row["AccountName"]; ?></td>
    <td><?php echo $row["in_address"]; ?></td>
    <td><?php echo $row["payout"]; ?></td>
    <td><?php echo $row["total_received"]; ?></td>
    <td><?php echo $row["total_sent"]; ?></td>
    <td><?php echo $row["unconfirmed_balance"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["wire"]; ?></td>
    <td><?php echo $row["invoice"]; ?></td>
  
</tr>
<?php
$i++;
}
?>
</table>
 <?php

?>

 </body>
</html>








  