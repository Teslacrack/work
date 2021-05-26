<?php
$emailErr ='';
$amountErr ='';
if (isset($_POST['submit']) && !isset($_POST['amount']) && isset($_POST['email'])  ){ 
  $amount= $_POST['amount'];
  $email = ($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";    
  }    
    if($amount > 40 ){
    $amountErr = "balance";  
    }else{
      header("Location: http://localhost/work/finapp-app-template.webflow.io/pay.php");
    }
    
  
  
  
  
  
  
  }
  
  




?>