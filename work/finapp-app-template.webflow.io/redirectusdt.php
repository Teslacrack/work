<?PHP

  session_start();
 

  if($_POST && isset($_POST['sendfeedback'], $_POST['amount'], $_POST['email'] )) {
    $invoice = str_pad(mt_rand(1,999999999999).Date("isdmY"),1,'0',STR_PAD_LEFT);
    $_SESSION['invoice']=$invoice;
    // echo $invoice;

    $amount = $_POST['amount'];
    $email = $_POST['email'];
    
    $_SESSION['amount'];
    $_SESSION['amount']=$_POST['amount'];
    
    $_SESSION['email'];
    $_SESSION['email'] = $_POST['email'];
    
    // echo $email;
    if($amount < 0.004) {
      $errorMsg = "Small Amount";
    } elseif(!$email || !preg_match("/^\S+@\S+$/", $email)) {
      $errorMsg = "Please enter a valid Email address";
    } else {
    //   send email and redirect
     
      header("Location: http://localhost/work/finapp-app-template.webflow.io/payusdt.php");
      exit;
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <script src="directvalidate.js"></script>
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
        <h1 class="page-header-title">Send Money to<br /></h1>
           <h5> <p class="text-center text-white">
        <?php echo $_SESSION['AccountName'] ?>
        <br /></p></h5>
        </div>
        <div class="section-circle-left"></div>
        <div class="section-circle-right"></div>
    </div>
    <br><br>  
      <section class="mb-4">
      <h2 class="h1-responsive font-weight-bold text-center my-4"></h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">
        </p>
         <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="POST" id="haba" accept-charset="UTF-8">
      <?PHP
  if(isset($errorMsg) && $errorMsg) {
    echo "<p style=\"color: red;\">*",htmlspecialchars($errorMsg),"</p>\n\n";
  }
?>
<form method="POST" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" accept-charset="UTF-8">
<p><label>Amount<strong>*</strong><br>
<input type="tel"  class="form-control" name="amount" value="<?PHP if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>"></label></p>
<p><label>Email Address<strong>*</strong><br>
<input type="email" class="form-control"  name="email" value="<?PHP if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"></label></p>
<div class="col-md-12 text-center">
<button type="submit" class="btn btn-primary" name="sendfeedback" value="Send Message">Submit</button>
 </div>
</form>
</div>
</section>
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
                <div class="copyright-text">© FinApp - 2020</div>
                <div class="copyright-text">
                    Template made by <a href="https://lightninglab.design/" target="_blank" class="copyright-link">Lightning Lab</a> and proudly powered by
                    <a href="https://webflow.com/" target="_blank" class="copyright-link">Webflow.</a> | Template Version: <a href="changelog.html" class="copyright-link">1.5</a>
                </div>
            </div>
            <div class="copyright-block right">
                <a href="faq.html" class="copyright-text right">FAQS</a><a href="privacy.html" class="copyright-text right">Privacy Policy</a><a href="about.html" class="copyright-text right">About Us</a>
                <a href="terms.html" class="copyright-text right">Terms & Conditions</a><a href="contact.html" class="copyright-text right last">Contact Us</a>
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