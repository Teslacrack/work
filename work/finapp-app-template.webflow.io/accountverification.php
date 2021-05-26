
<?php

session_start();
 if (isset($_POST['submit']) && isset($_POST['bank_name']) && isset($_POST['account_number']) && isset($_POST['currency']) && !empty($_POST['account_number']) ){
  $Bank_name = $_POST['bank_name'];
  $account=$_POST['account_number'];
  $currency=$_POST['currency'];
  $_SESSION['currency'];
  $_SESSION['currency'] = $_POST['currency'];
  $currency= $_SESSION['currency'];

  $data= array(
    "AccountNumber"=> $account,
    "BankCode"=> $Bank_name,
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
    // echo $response;
  $val=json_decode($response,true);
  $AccountName = $val['AccountName'];
    $_SESSION['AccountName'];
   $_SESSION['AccountName'] = $AccountName;
    $AccountName;
  $val=json_decode($response,true);
  $code=$val['ResponseCode'];
   $BankCode=$val['BankCode'];
  $_SESSION['BankCode'];
  $_SESSION['BankCode']=$BankCode;
  $AccountNumber=$val['AccountNumber'];
  $_SESSION['AccountNumber'];
  $_SESSION['AccountNumber'] = $AccountNumber;
   $AccountNumber;
  
  if($code ==200){
  
  }
  
  if($code == 300){
    $dog= 'Sorry we are unable to validate the bank account number of the recipient';
  }
  
  if($code == 400){
     $dog='One or more input field is empty !';
    
  }
  
  
  if(isset($_POST['currency'])){        
    if($currency =='ETH' && !empty($account) && $code !=300){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/redirecteth.php");
        // echo $value3;
      
      } else {
       
       
        // $errorMsg='shit';

      }
      if($currency == 'BTC' && !empty($account) && $code !=300){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/redirectbtc.php");
        // echo $value3;
      }else{
        // $errorMsg='shit';
      }
 
      if($currency == 'LTC' && !empty($account) && $code !=300){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/redirectltc.php");
        // echo $value3;
      }else{
        // $errorMsg='shit';
      }


      if($currency == 'TRX' && !empty($account) && $code !=300){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/redirecttrx.php");
        // echo $value3;
      }else{
        // $errorMsg='shit';
      }


      if($currency == 'USDT' && !empty($account) && $code !=300){
        header("Location: http://localhost/work/finapp-app-template.webflow.io/redirectusdt.php");
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
        <meta charset="utf-8" />
        <title>Contact Us</title>
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
        <link rel="stylesheet" type="text/css" href="animate.css">
        <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd80625cd97763ac47092ad_favicon-32x32.png" rel="shortcut icon" type="image/x-icon" />
        <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd8062a9f6b4c9aca6c3b69_android-chrome-256x256.png" rel="apple-touch-icon" />
        <style>



        </style>
        <script async data-id="79062" src="https://cdn.widgetwhats.com/script.min.js"></script>
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
        <h3 class="page-header-title">Exchange your Crypto for local currency...</h3>
        
        </div> 
        <div class="section-circle-left"></div>
        <div class="section-circle-right"></div>
    </div>
    <br><br>  
      <section class="text text-primary">
         <div class="container">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" id="haba">
         <?PHP
  if(isset($errorMsg) && $errorMsg) {
    echo "<p style=\"color: red;\">*",htmlspecialchars($errorMsg),"</p>\n\n";
  }
           ?>
           <div class="alert-danger" style="text-align: center;">
            <script type="text/javascript">
        var x = "<?php echo"$cat"?>";      
        document.write(x)
         </script>
                </div>
         <div class="alert-danger" style="text-align: center;">
            <script type="text/javascript">
        var p = "<?php echo"$dog"?>";      
        document.write(p)
         </script>
        </div>
              <div class="mb-4">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" aria-describedby="emailHelp" name="country" placeholder="Nigeria" >
                </div>
                <div class="mb-4">
                <label for="my-select" >Bank</label>
               <select id="myselect" class="custom-select" name="bank_name">
                        <option value="110005" >3LINE</option>
                        <option value="090270">AB MICROFINANCE BANK</option>
                        <option value="090260">ABOVE MICROFINANCE BANK</option>
                        <option value="070010"> ABBEY MORTAGE BANK</option>
                        <option value="090197">ABU MICROFINANCE BANK </option>
                        <option value="044"> ACESS BANK PLC</option>
                        <option value="100052">ACCESS YELLOW & BETA </option>
                        <option value="100013">ACCESS MONEY</option>
                        <option value="090134">ACCION MICROFINANCE BANK</option>
                        <option value="090160">ADDOSSER MICROFINANCE BANK</option>
                        <option value="090268">ADEYEMI COLLEGE STAFF MFB</option>
                        <option value="090155">ADVANS LA FAYETTE MFB</option>
                        <option value="090292">AFEKHAFE MICROFINANCE BANK </option>
                        <option value="100028">AG MORTAGE BANK </option>
                        <option value="090133">AL-BARAKAH MICROFINANCE BANK</option>
                        <option value="090259">ALEKUN MICROFINANCE BANK</option>
                        <option value="090297">ALERT MICROFINANCE BANK</option>
                        <option value="090277">AL-HAYAT MICROFINANCE BANK</option>
                        <option value="090131">ALLWORKERS MICROFINANCE BANK</option>
                        <option value="090169">ALPHA KAPITAL MICROFINANCE BANK</option>
                        <option value="090180">AMJU UNIQUE MICROFINANCE BANK</option>
                        <option value="090116">AML MFB</option>
                        <option value="090143">APEKS MICROFINANCE BANK</option>
                        <option value="090282">ARISE MICROFINANCE BANK</option>
                        <option value="401">ASO SAVINGS AND LOANS</option>
                        <option value="090287">ASSETMATRIX MICROFINANCE BANK</option>
                        <option value="090172">ASTRAPOLARIS MICROFINANCE BANK</option>
                        <option value="090264">AUCHI MICROFINANCE BANK</option>
                        <option value="090188">BAINES CREDIT MICROFINANCE BANK</option>
                        <option value="090326">BALOGUN GAMBARI MICROFINANCE BANK</option>
                        <option value="090136">BAOBAB MICROFINANCE BANK</option>
                        <option value="090127">BC KASH MICROFINANCE BANK</option>
                        <option value="090117">BOCTRUST MICROFINANCE BANK</option>
                        <option value="090176">BOSAK MICROFINANCE BANK</option>
                        <option value="090148">BOWEN MICROFINANCE BANK</option>
                        <option value="070015">BRENT MORTAGE BANK</option>
                        <option value="090308">BRIGHTWAY MICROFINANCE BANK</option>
                        <option value="317">CELLULANT<option>
                        <option value="090154">CEMCS MICROFINANCE BANK</option>
                        <option value="001">CENTRAL BANK OF NIGERIA</option>
                        <option value="303">CHAMSMOBILE</option>
                        <option value="090141">CHIKUM MICROFINANCE BANK</option>
                        <option value="090144">CIT MICROFINANCE BANK</option>
                        <option value="023">CITIBANK NIGERIA LTD</option>
                        <option value="090130">CONSUMER MICROFINANCE BANK</option>
                        <option value="100032">CONTEC GLOBAL INFOTECH LIMITED</option>
                        <option value="559">CORONATION MERCHANT BANK</option>
                        <option value="551">COVENANT</option>
                        <option value="090159">CREDIT AFRIQUE MICROFINANCE BANK</option>
                        <option value="090167">DAYLIGHT MICROFINANCE BANK</option>
                        <option value="063">DIAMOND(ACCESS BANK PLC)</option>
                        <option value="100021">EARTHOLEUM</option>
                        <option value="090156">e-BARCS MICROFINANCE BANK</option>
                        <option value="050">ECOBANK NIGERIA PLC</option>
                        <option value="307">ECOMOBILE</option>
                        <option value="090310">EDFIN MICROFINANCE BANK</option>
                        <option value="562">EKONDO MICROFINANCE BANK</option>
                        <option value="090273">EMERALDS MICROFINANCE BANK</option>
                        <option value="090114">EMPIRE TRUST BANK</option>
                        <option value="000019">ENTERPRISE BANK</option>
                        <option value="090189">ESAN MICROFINANCE BANK</option>
                        <option value="090166">ESO-E MICROFINANCE BANK</option>
                        <option value="306">ETRANSACT</option>
                        <option value="090304">EVANGEL MICROFINANCE BANK</option>
                        <option value="090179">FAST MICROFINANCE BANK</option>
                        <option value="060002">FBNquest MERCHANT BANK</option>
                        <option value="214">FCMB</option>
                        <option value="100031">FCMB EASY ACCOUNT</option>
                        <option value="090290">FCT MICROFINANCE BANK</option>
                        <option value="090318">FEDRAL UNIVERSITY DUTSE MICROFINANCE BANK</option>
                        <option value="314">FET</option>
                        <option value="090153">FFS MICROFINANCE BANK</option>
                        <option value="070">FIDELITY BANK PLC </option>
                        <option value="100019">FIDELITY MOBILE</option>
                        <option value="090126">FIDFUND MFB</option>
                        <option value="608">FINATRUST MICROFINANCE BANK</option>
                        <option value="110004">FIRST APPLE LIMITED</option>
                        <option value="011">FIRST BANK OF NIGERIA</option>
                        <option value="070014">FIRST GENERATION MORTAGE BANK</option>
                        <option value="413">FIRST MORTAGE LIMITED</option>
                        <option value="090285">FIRST OPTION MICROFINANCE BANK</option>
                        <option value="090164">FIRST ROYAL MICROFINANCE BANK</option>
                        <option value="309">FIRSTMONIE WALLET</option>
                        <option value="110002">FLUTTERWAVE TECHNOLOGY SOLUTIONS LIMITED</option>
                        <option value="070002">FORTIS MICROFINANCE BANK</option>
                        <option value="100016">FORTIS MOBILE</option>
                        <option value="501">FSDH MERCHANT BANK LIMITED</option>
                        <option value="090145">FULLRANGE MICROFINANCE BANK</option>
                        <option value="090158">FUTO MICROFINANCE BANK</option>
                        <option value="090168">GASHUA MICROFINANCE BANK</option>
                        <option value="070009">GATEWAY MORTAGE BANK</option>
                        <option value="103">GLOBUS BANK</option>
                        <option value="090278">GLORY MICROFINANCE BANK</option>
                        <option value="100022">GOMONEY</option>
                        <option value="090122">GOWANS MFB</option>
                        <option value="090178">GREENBANK MICROFINANCE BANK</option>
                        <option value="090269">GREENVILE MICROFINANCE BANK</option>
                        <option value="090195">GROOMING MICROFINANCE BANK</option>
                        <option value="100009">GTMobile</option>
                        <option value="058">GUARANTY TRUST BANK</option>
                        <option value="070017">HAGGAI MORTAGE BANK LIMITED</option>
                        <option value="090121">HASAL MICROFINANCE BANK</option>
                        <option value="100017">HEDONMARK</option>
                        <option value="030">HERITAGE BANK</option>
                        <option value="090118">IBILE BANK</option>
                        <option value="090275">IKIRE MICROFINANCE BANK</option>
                        <option value="090258">IMO STATE MICROFINANCE BANK</option>
                        <option value="415">IMPERIAL HOMES MORTAGE BANK</option>
                        <option value="090157">INFINITY MICROFINANCE BANK</option>
                        <option value="070016">INFINITY TRUST MORTAGE BANK</option>
                        <option value="100029">INNOVECTIVES KESH</option>
                        <option value="100027">INTELLIFIN</option>
                        <option value="110003">INTERSWITCH LIMITED</option>
                        <option value="090149">IRL MICROFINANCE BANK</option>
                        <option value="301">JAIZ BANK PLC</option>
                        <option value="402">JUBILEE LIFE MORTAGE BANK</option>
                        <option value="090320">KADPOLY MICROFINANCE BANK</option>
                        <option value="090191">KCMB MICROFINANCE BANK</option>
                        <option value="100015">KEGROW</option>
                        <option value="082">KEYSTONE BANK</option>
                        <option value="090267">KUDA MICROFINANCE BANK</option>
                         <option value="070012">LAGOS BUILDING INVESTMENT COMPANY</option>
                         <option value="090177">LAPO MICROFINANCE BANK</option>
                         <option value="090271">LAVENDER MICROFINANCE BANK</option>
                         <option value="090265">LOVONUS MICROFINANCE BANK</option>
                         <option value="090323">MAINLAND MICROFINANCE BANK</option>
                         <option value="090171">MAINSTREET BANK</option>
                         <option value="090174">MALACHY MICROFINANCE BANK</option>
                         <option value="090280">MEGAPRAISE MICROFINANCE BANK</option>
                         <option value="090113">MICROVIS MICROFINANCE BANK</option>
                         <option value="090192">MIDLAND MICROFINANCE BANK</option>
                         <option value="090281">MINT-FINEX MICROFINANCE BANK</option>
                         <option value="100011">MKUDI</option>
                         <option value="090129">MONEY TRUST MICROFINANCE BANK</option>
                         <option value="100020">MONEYBOX</option>
                         <option value="090190">MUTUAL BENEFITS MICROFINANCE BANK</option>
                         <option value="090151">MUTUAL TRUST MICROFINANCE BANK</option>
                         <option value="090152">NAGARTHA MICROFINANCE BANK</option>
                         <option value="090263">NAVY MICROFINANCE BANK</option>
                         <option value="090128">NDIORAH MICROFINACNE BANK</option>
                         <option value="090205">NEW DAWN MICROFINANCE</option>
                         <option value="561">NEW PRUDENTIAL BANK</option>
                         <option value="907">NIGERIA INTERBANK SETTLEMENT SYSTEM</option>
                         <option value="909">NIP VIRTUAL BANK</option>
                         <option value="090194">NIRSAL MICROFINANCE BANK</option>
                         <option value="09023">NNEW WOMEN MICROFINANCE BANK</option>
                         <option value="637">NOVA MERCHANT BANK LTD</option>
                         <option value="552">NPF MICROFINANCE BANK</option>
                         <option value="090119">OHAFIA MFB</option>
                         <option value="090161">OKPOGA MICROFINANCE BANK</option>
                         <option value="090272">OLABISI ONABANJO UNIVERSITY MICROFINANCE BANK</option>
                          <option value="090295">OMIYE MICROFINANCE BANK</option>
                          <option value="606">Omoluabi Savings and Loans Plc</option>
                          <option value="100026">ONE FINANCE</option>
                          <option value="327">PAGA</option>
                          <option value="560">PAGEFINANCIALS</option>
                          <option value="100033">PALMPLAY</option>
                          <option value="526">PARALLEX MFB</option>
                          <option value="100003">PARK-WAY READY CASH</option>
                          <option value="090317">PATRICKGOLD MICROFINANCE BANK</option>
                          <option value="329">PAYATTITUDE ONLINE</option>
                          <option value="305">PAYCOM (OPAY)</option>
                          <option value="110006">PAYSTACK PAYMENT LIMITED</option>
                          <option value="090137">PECANTRUST MICROFINANCE BANK</option>
                          <option value="090196">PENNYWISE MICROFINANCE BANK</option>
                          <option value="090135">PERSONAL TRUST MICROFINANCE BANK</option>
                          <option value="090165">PETRA MICROFINANCE BANK</option>
                          <option value="090289">PILLAR MICROFINANCE BANK</option>
                          <option value="070013">PLATINUM MORTAGE BANK</option>
                          <option value="076">POLARIS BANK (SKYE BANK PLC) </option>
                          <option value="090296">POLYUWANA MICROFINANCE BANK</option>
                          <option value="090274">PRESTIGE MICROFINANCE BANK</option>
                          <option value="101">PROVIDUS BANK</option>
                          <option value="090303">PURPLEMONEY MICROFINANCE BANK</option>
                          <option value="090261">QUICKFUND MICROFINANCE BANK</option>
                          <option value="090170">RAHAMA MICROFINANCE BANK</option>
                          <option value="502">RAND MERCHANT BANK</option>
                          <option value="070011">REFUGE MORTAGE BANK</option>
                          <option value="090175">RUBIES MICROFINANCE BANK</option>
                          <option value="609">SEED CAPITAL MICROFINANCE BANK</option>
                          <option value="090325">SPARKLE</option>
                          <option value="221">STANBIC IBTC BANK PLC</option>
                          <option value="100007">STANBIC@EASEWALLET</option>
                          <option value="068">STANDARD CHARTERED BANK NIGERIA LTD</option>
                          <option value="100">SUNTRUST BANK</option>
                          <option value="090276">TRUST FUND MICROFINANCE BANK</option>
                          <option value="090266">UNIBEN MICROFINANCE BANK</option>
                          <option value="090193">UNICAL MICROFINANCE BANK</option>
                          <option value="032">UNION BANK OF AFRICA</option>
                          <option value="033">UNITED BANK OF AFRICA</option>
                          <option value="215">UNITY BANK PLC</option>
                          <option value="090110">VFD MICROFINANCE BANK</option>
                          <option value="035">WEMA BANK PLC</option>
                          <option value="057">ZENITH BANK PLC</option>
                          <option value="100018">ZENITH MOBILE</option>
                         </select>
                          <br><br>
                <div class="mb-4">
                <label for="myselect" >You Send</label>
               <select id="myselect" class="custom-select" name="currency">
                      <!-- <option value="options" >options</option> -->
                        <option value="BTC" >BTC</option>
                        <option value="ETH">ETH</option>
                        <!-- <option value="BCH">BCH</option> -->
                        <option value="LTC">LTC</option>
                        <option value="TRX">TRX</option>
                        <option value="USDT">USDT</option>
                    </select>
                </div>
        

                <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Account Number</label>
                <input type="number" class="form-control" id="myemail" aria-describedby="emailHelp" name="account_number" placeholder="Account Number" value="value=<?PHP if(isset($_POST['account_number'])) echo htmlspecialchars($_POST['account_number']); ?>">
                </div>    
                 <div><?php  ?></div>
                <div id="emailHelp" class="form-text text-warning">Note: While Sendcash does not charge any fees, the external wallet service you use might charge additional fees.We only earn money when you exchange from one coin to the other.</div>
                           
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" name="submit" id="sub" >Submit</button>
                </div>
               </div>
               </section>
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
                <div class="copyright-text">© FinApp - 2020</div>
                <div class="copyright-text">
                    Template made by <a href="https://lightninglab.design/" target="_blank" class="copyright-link">Lightning Lab</a> and proudly powered by
                    <a href="https://webflow.com/" target="_blank" class="copyright-link">Webflow.</a> | Template Version: <a href="changelog.html" class="copyright-link">1.5</a>
                </div>
            </div>
            <div class="copyright-block right">
                <a href="faq.php" class="copyright-text right">FAQS</a><a href="privacy.php" class="copyright-text right">Privacy Policy</a><a href="#" class="copyright-text right"></a>
                <a href="terms.php" class="copyright-text right">Terms & Conditions</a><a href="#" class="copyright-text right last"></a>
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