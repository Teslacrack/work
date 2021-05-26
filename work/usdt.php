<?php
// $link = mysqli_connect("sql203.ezyro.com", "ezyro_28647405", "ymdxwhp7c", "ezyro_28647405_crypto_db");
 include 'controller.php';
include 'sessions.php';

$invoice=$_SESSION['invoice'];
// echo $invoice;


// $ur=urlencode('https://sandbox.cryptapi.io/btc/create/?address=tb1qxvmjd5wa6gha2hgzzfgqxhrqzj8kqdf3ttggj7&callback=http://paybtc.php/callback/?invoice='.$invoice.'&nonce=randomstring');
$url=('https://api.cryptapi.io/erc20/usdt/create/?address=0xAc7085013620158A6f2f8b0eB6d31c1e82BC3868&callback=http://ego.ezyro.com/work/finapp-app-template.webflow.io/paybtc.php/?invoice='.$invoice.'&nonce=randomstring');
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
  $in_address = $val['address_in'];
  $_SESSION['address_in']=$in_address;
  $in_address=$_SESSION['address_in'];
  $_SESSION['address_in'];
  




//Xchange start 
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
   
$cryptotodollar=($in['USD']);
$dollarnairaratio= 380.50; 
$numberofcrypto= floatval($Amount);

// echo $cal;
$valueindollar=$cryptotodollar* $numberofcrypto;
$wire=$valueindollar *$dollarnairaratio;
$wire = $wire-3/100;
$_SESSION['wire']=$wire;
$wire=$_SESSION['wire'];
$_SESSION['wire'];

//  echo $wire;


//xchange end



$search= "SELECT * FROM users WHERE in_address= '$in_address'";
$result=mysqli_query($link,$search)  or die(mysqli_error($link));
 $match=mysqli_num_rows($result);
 if($match < 1){
    $id;
    $AccountNumber;
    $BankCode;
    $currency;
    $Amount;
    $AccountName;
    $in_address;
    $email;
    $wire;
    $num;
    
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        
    }else{
        // echo 'sucess';
    }
     
    // Attempt insert query execution
   
    if(isset($AccountNumber) && isset($BankCode) && isset($currency) && isset($Amount) && isset($AccountName) && isset($in_address)  && isset($email) && isset($wire) && isset($invoice) ) {
        $sql = "INSERT INTO users ( AccountNumber, BankCode, currency, Amount, AccountName, in_address, email, wire, invoice ) VALUES ('$AccountNumber', '$BankCode', '$currency', '$Amount', '$AccountName', '$in_address', '$email', '$wire', '$invoice')";
        if(mysqli_query($link, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    
    }
    

 }









?>



<?Php
 // include 'btc.php';
// Source: http://stackoverflow.com/questions/5943368/dynamically-generating-a-qr-code-with-php
// Google Charts Documentation: https://developers.google.com/chart/infographics/docs/qr_codes?csw=1#overview

// CHart Type
$cht = "qr";

// CHart Size
$chs = "300x300";

// CHart Link
// the url-encoded string you want to change into a QR code
$chl = urlencode($in_address);

// CHart Output Encoding (optional)
// default: UTF-8
$choe = "UTF-8";

$qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;

// echo $qrcode . '<br>';

// echo $_SESSION['currency'];

    
?>














<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Bitcoin</title>
        <meta content="Licensing" property="og:title" />
        <meta content="Licensing" property="twitter:title" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Webflow" name="generator" />
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/css/finapp-app-template.webflow.511ea64dc.css" rel="stylesheet" type="text/css" />
		
        <style>
            @media (min-width: 992px) {
                html.w-mod-js:not(.w-mod-ix) [data-w-id="58c24989-2609-0218-e11c-65e7d7035d77"] {
                    -webkit-transform: translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                    -moz-transform: translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                    -ms-transform: translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                    transform: translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                }
            }
        </style>
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <script src="../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">
        
            WebFont.load({ google: { families: ["Nunito Sans:regular,600,700,800"] } });
        </script>
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
        <script type="text/javascript">
            !(function (o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                (n.className += t + "js"), ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) && (n.className += t + "touch");
            })(window, document);
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="query.js"></script>
        <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd80625cd97763ac47092ad_favicon-32x32.png" rel="shortcut icon" type="image/x-icon" />
        <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd8062a9f6b4c9aca6c3b69_android-chrome-256x256.png" rel="apple-touch-icon" />
    </head>
  <body>
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="nav-bar w-nav">
        <div class="logo-wrapper">
            <a href="index.html" class="brand w-nav-brand"><img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd44663dda3ce35bb8162eb_logo.svg" alt="" class="logo" /></a>
        </div>
        <nav role="navigation" class="nav-menu w-nav-menu">
            <div class="nav-link-wrap">
                <a href="index.php" data-w-id="58c24989-2609-0218-e11c-65e7d7035d75" class="nav-link w-nav-link">Home</a>
                <div data-w-id="58c24989-2609-0218-e11c-65e7d7035d77" class="nav-line"></div>
            </div>
        </nav>
        <div class="menu-button w-nav-button"><div class="icon w-icon-nav-menu"></div></div>
    </div>
    <div class="page-header">
        <div class="container">
        <h3 class="page-header-title">Payment Invoice</h3>
           <h5> <p class="text-center text-white">
         <?php echo $_SESSION['AccountName'] ?>
        
         <br /></p></h5>
        </div>
        <div class="section-circle-left"></div>
        <div class="section-circle-right"></div>
    </div>
    <br><br>  
      <section class="mb-4">
         <div class="container">
         <div class="mb-4" style="text-align: center;">
         
         <div class="test"><img src="<?php echo $qrcode ?>" alt="My QR code" width="55%"></div>
                </div> 
                 <P style="text-align: center;"> <?Php  ?> </P>
            
      <ul class="list-group list-group-flush">
  <li class="list-group-item">Crypto to Send<span  style="float:right;" style="font-style: Garamond;" id="pick" ><span> <?php echo $Amount ?>   <i class="fas fa-copy" id="char" onclick="CopyTo('char');return false;" style="color: blue;"></i></span></span></li>
   <span id="sharp" style="display: none;" class="text-success">Copied!</span>
  <li class="list-group-item">You will recieve<span style="float: right;">NGN <span><?Php echo $wire; ?></span></span></li>
  <li class="list-group-item">Account Number<span style="float: right;"><?php echo $AccountNumber ?></span></li>
  <li class="list-group-item">Bank Code<span style="float: right;"><?php echo $BankCode?></span></li>
</ul>
<div class="text-center">
      <!-- <P>2NFGeRQ76sTyH9dG9sg2agmNQdp1scAme3b</P> -->
            <button type="button" class="btn btn-primary btn-rounded" id="sample" onclick="CopyToClipboard('sample');return false;" >Copy Payment Address</button>
            <br>
            <span id="show" style="display: none;" class="text-success">Copied!</span>
            <br>
            <!-- <span id="pick" style="display: none;" class="text-success">Copied!</span> -->
          </div>
         
   </div>
               </div>
</section>
               
<script>
  function CopyToClipboard(id)
  {
  var r = document.createRange();
  r.selectNode(document.getElementById("address"));
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(r);
  document.execCommand('copy');
  window.getSelection().removeAllRanges();
  }
  
$("#sample").click(function (e) {    
    $("#show").show();
    
});


// Amount

function CopyTo(id)
  {
  var r = document.createRange();
  r.selectNode(document.getElementById("pick"));
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(r);
  document.execCommand('copy');
  window.getSelection().removeAllRanges();
  }
  
$("#char").click(function (e) {    
    $("#sharp").show();
    
});

  </script> 
  
  






<?Php
 if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['Amount']) && isset($_POST['myselect'])){
$value1=$_POST['email'];
$value2=$_POST['Amount'];
$value3=$_POST['myselect'];
echo $value1;
echo $value2;
echo $value3;
 }
?>
          
  
    



<!-- Default form contact -->
<footer id="footer" class="footer">
    <div class="footer-row">
        <div class="container flex">
            <a href="index.html" aria-current="page" class="footer-logo-link-block w-inline-block w--current">
                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5e20e41384fda6dba98394b4_logo.svg" alt="" class="footer-logo" />
            </a>
            <div class="copyright-block right flex-horizontal">
                <!-- <a href="https://www.apple.com/ios/app-store/" target="_blank" class="app-link-block w-inline-block">
                    <img src="/editweb/apps.png" alt="" class="app-store-btn" />
                </a>
                <a href="https://play.google.com/store" target="_blank" class="app-link-block w-inline-block">
                    <img src="/editweb/pl.png" alt="" class="app-store-btn" />
                </a> -->
            </div>
        </div>
    </div>
    <div class="footer-row bottom">
        <div class="container flex">
            <div class="copyright-block">
                <p id="address"><?Php echo $in_address ?></p>
                
                
                <div class="copyright-text">© FinApp - 2020</div>
                <div class="copyright-text">
                    Template made by <a href="https://lightninglab.design/" target="_blank" class="copyright-link">Lightning Lab</a> and proudly powered by
                    <a href="https://webflow.com/" target="_blank" class="copyright-link">Webflow.</a> | Template Version: <a href="changelog.html" class="copyright-link">1.5</a>
                </div>
            </div>
            <div class="copyright-block right">
                <a href="faq.php" class="copyright-text right">FAQS</a><a href="privacy.php" class="copyright-text right">Privacy Policy</a><a href="#" class="copyright-text right"></a>
                <a href="terms.php" class="copyright-text right">Terms & Conditions</a><a href="contact.html" class="copyright-text right last"></a>
            </div>
        </div>
    </div>
</footer>
    
    <script
        src="../d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8a978.js?site=5dd4413d36613959e9a5f5ea"
        type="text/javascript"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"
    ></script>
    <script src="../assets.website-files.com/5dd4413d36613959e9a5f5ea/js/webflow.7b9cc3e65.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>