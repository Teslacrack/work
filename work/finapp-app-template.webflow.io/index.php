<?php
session_start();
include 'verification.php';
include 'anouncement.php';
?>
<head>
    <meta charset="utf-8" />
    <title>FinApp - Home</title>
    <meta
        content="FinApp is a beautiful Webflow template that allows you to showcase your app. Let your users learn more about its features and show them your pricing plans. FinApp is a great template to use as is, or as a base for your own project."
        name="description"
    />
    <meta content="FinApp - Webflow HTML Website Template" property="og:title" />
    <meta
        content="FinApp is a beautiful Webflow template that allows you to showcase your app. Let your users learn more about its features and show them your pricing plans. FinApp is a great template to use as is, or as a base for your own project."
        property="og:description"
    />
    <meta content="FinApp - Webflow HTML Website Template" property="twitter:title" />
    <meta
        content="FinApp is a beautiful Webflow template that allows you to showcase your app. Let your users learn more about its features and show them your pricing plans. FinApp is a great template to use as is, or as a base for your own project."
        property="twitter:description"
    />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/css/finapp-app-template.webflow.511ea64dc.css" rel="stylesheet" type="text/css" />
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
    <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd80625cd97763ac47092ad_favicon-32x32.png" rel="shortcut icon" type="image/x-icon" />
    <link href="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd8062a9f6b4c9aca6c3b69_android-chrome-256x256.png" rel="apple-touch-icon" />
    <!-- crisp start -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="6138e1d4-802f-4623-91ad-3820ff14b9fa";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <!-- crisp end  -->
        <style>
        .notify{
            background-color: orange;
            color: white;
            display: flex;
            justify-content: center;
        }
        
        
        
        </style>
</head>
<body>
<div class="notify"><?php echo $anouncement; ?></div>
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="nav-bar w-nav">
        <div class="logo-wrapper">
            <!-- <a href="#" class="brand w-nav-brand"><img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5e20e41384fda6dba98394b4_logo.svg" alt="" class="logo" /></a> -->
        </div>
        <nav role="navigation" class="nav-menu w-nav-menu">
            <div class="nav-link-wrap">
                <a href="index.php" data-w-id="2e9cac75-8976-3a0e-2c1c-80a9c0b27883" aria-current="page" class="nav-link w-nav-link w--current">Home</a>
                <div class="nav-line"></div>
            </div>
            <!-- <div class="nav-link-wrap">
                <a href="#login" data-w-id="667a8d1a-8ec6-2a57-75b7-a793c7637388" class="nav-link w-nav-link">Register</a>
                <div class="nav-line"></div>
            </div>
            <div class="nav-link-wrap">
                <a href="#features" data-w-id="8200b88b-4ca9-a117-68e5-f62602f5d124" class="nav-link w-nav-link">Features</a>
                <div class="nav-line"></div>
            </div>
            <div class="nav-link-wrap">
                <a href="#login" data-w-id="667a8d1a-8ec6-2a57-75b7-a793c7637388" class="nav-link w-nav-link">Login</a>
                <div class="nav-line"></div>
            </div> -->
           
        </nav>
        <div class="menu-button w-nav-button"><div class="icon w-icon-nav-menu"></div></div>
    </div>
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div id="w-node-149c1fd088ea-6ba5f5ef" class="left-hero-block">
                    <h1 class="hero-title">The future of Africa's digital payment</h1>
                    <p class="hero-paragraph">
                        Make your life easier with FinApp. With FinApp you have the flexibility to send and receive money in seconds and Mastercards on-the-fly so you can do with your money whatever you want, wherever you are. Store your
                        contacts so you can skip the hassle and pay them right away. Worried you&#x27;d spend too much money? FinApp will notify you when you&#x27;re about to go over your monthly limit. Download the app from the Apple App
                        Store or Google Play today.
                    </p>
                     <a href="accountverification.php" class="transparent-btn no-margin-top no-margin-right w-button">Send Cryptocurrency</a>
                    <BR><BR>
                        <a href="table.php" class="transparent-btn no-margin-top no-margin-right w-button">Cryptocurrency Rates </a> 
                        
                </div>
                
                <img
                    src="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd7c261b9c85cb9f47e6f28_hero%20mockup.png"
                    id="w-node-a5679354a4bc-6ba5f5ef"
                    sizes="(max-width: 479px) 67vw, (max-width: 767px) 62vw, (max-width: 991px) 28vw, 24vw"
                    srcset="
                        https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd7c261b9c85cb9f47e6f28_hero%20mockup-p-500.png 500w,
                        https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd7c261b9c85cb9f47e6f28_hero%20mockup.png       800w
                    "
                    alt=""
                    class="mockup-img"
                />
            </div>
        </div>
    </section>
    <section id="features" class="section">
        <div class="container">
            <div class="features-grid">
                <div id="w-node-387d33076da0-6ba5f5ef" class="feature-img-wrapper">
                    <img
                        src="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd6e282a03136d8e34a750c_iPhone%20floatinf.png"
                        height="500"
                        sizes="(max-width: 479px) 94vw, (max-width: 767px) 92vw, (max-width: 991px) 211.890625px, 141.234375px"
                        srcset="
                            https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd6e282a03136d8e34a750c_iPhone%20floatinf-p-500.png 500w,
                            https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd6e282a03136d8e34a750c_iPhone%20floatinf.png       800w
                        "
                        alt=""
                        class="feature-img"
                    />
                </div>
                <div id="w-node-7fe54697006a-6ba5f5ef" class="feature-img-wrapper">
                    <img
                        src="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5e20e3cb980f1a149f16c057_Feature%201.png"
                        sizes="(max-width: 479px) 94vw, (max-width: 767px) 92vw, (max-width: 991px) 112.140625px, 141.234375px"
                        srcset="
                            https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5e20e3cb980f1a149f16c057_Feature%201-p-500.png 500w,
                            https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5e20e3cb980f1a149f16c057_Feature%201.png       749w
                        "
                        alt=""
                        class="feature-img"
                    />
                 
                </div>
                <div id="w-node-387d33076da2-6ba5f5ef" class="feature-wrapper">
                    <h4 class="feature-title">Keep track of your finances</h4>
                    <p class="feature-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In metus vulputate eu scelerisque felis imperdiet. Accumsan tortor posuere ac ut consequat
                        semper viverra nam libero. Tincidunt praesent semper feugiat nibh sed. Lorem dolor sed viverra ipsum. Sed euismod nisi porta lorem mollis. Tincidunt tortor aliquam nulla facilisi cras fermentum odio. Consequat id
                        porta nibh venenatis cras sed. Ut tristique et egestas quis. Sit amet massa vitae tortor condimentum lacinia. Dolor sed viverra ipsum nunc aliquet bibendum. In hendrerit gravida rutrum quisque. Et egestas quis ipsum
                        suspendisse.
                    </p>
                    
                </div>
                <div id="w-node-387d33076da9-6ba5f5ef" class="feature-wrapper">
                    <h4 class="feature-title">Easily buy anything, everywhere</h4>
                    <p class="feature-paragraph">
                        The #No1 choice for entrepreneurs, business owners and freelancers open a fully operational bank account, quickly.
                         Discover powerful tools and insights to help grow your business.
                    </p>
                </div>
                <div id="w-node-387d33076db0-6ba5f5ef" class="feature-wrapper">
                    <h4 class="feature-title">Send Money to your friends and family</h4>
                    <p class="feature-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In metus vulputate eu scelerisque felis imperdiet. Accumsan tortor posuere ac ut consequat
                        semper viverra nam libero. Tincidunt praesent semper feugiat nibh sed. Lorem dolor sed viverra ipsum. Sed euismod nisi porta lorem mollis. Tincidunt tortor aliquam nulla facilisi cras fermentum odio. Consequat id
                        porta nibh venenatis cras sed. Ut tristique et egestas quis. Sit amet massa vitae tortor condimentum lacinia. Dolor sed viverra ipsum nunc aliquet bibendum. In hendrerit gravida rutrum quisque. Et egestas quis ipsum
                        suspendisse.
                    </p>
                </div>
                <div id="w-node-5c2371a1cf1e-6ba5f5ef" class="feature-img-wrapper"><img src="../assets.website-files.com/5dd4413d36613959e9a5f5ea/5e20e3ccc34a253a45b9670e_Feature%203.png" alt="" class="feature-img" /></div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="section blue">
        <div class="container">
            <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider w-slider">
                <div class="w-slider-mask">
                    <div class="testimonial-slide w-slide">
                        <div class="testimonial-slide-wrapper">
                            <div class="rating">
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f3754209d08d0e39d_Icons.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f3754209d08d0e39d_Icons.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f3754209d08d0e39d_Icons.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f3754209d08d0e39d_Icons.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f4290b12ea4c0d0a8_Icons-2.svg" alt="" />
                            </div>
                            <div class="testimonial-title">This app is amazing! I use it every single day. Sending and receiving money goes super fast</div>
                            <div class="testimonial-author">Jonathan Davis</div>
                        </div>
                    </div>
                    <div class="testimonial-slide w-slide">
                        <div class="testimonial-slide-wrapper">
                            <div class="rating">
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f3754209d08d0e39d_Icons.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f3754209d08d0e39d_Icons.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f3754209d08d0e39d_Icons.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f4290b12ea4c0d0a8_Icons-2.svg" alt="" />
                                <img src="https://assets.website-files.com/5dd4413d36613959e9a5f5ea/5dd59c1f6514c5e2dd4fbf73_Icons-1.svg" alt="" />
                            </div>
                            <div class="testimonial-title">This app is pretty awesome. It allows me to quickly check my card balances and I can even add extra budget very easily.</div>
                            <div class="testimonial-author">Mark Grover</div>
                        </div>
                    </div>
                </div>
                <div class="left-arrow w-slider-arrow-left"><div class="w-icon-slider-left"></div></div>
                <div class="right-arrow w-slider-arrow-right"><div class="icon-2 w-icon-slider-right"></div></div>
                <div class="slide-nav w-slider-nav w-round"></div>
            </div>
        </div>
        <div class="section-circle-right"></div>
        <div class="section-circle-left"></div>

  
    <!-- modal end -->
    
    <section id="trusted-companies" class="section">
        <div class="container">
            <div class="logos-grid">
                 <img src="btc.png" style="width: 100px;">
                 <img src="eth.png" style="width: 100px;">
                 <img src="trx.jpg" style="width: 100px;">
                 <img src="ltc.png" style="width: 100px;">
                 <img src="tether.png" style="width: 100px;">
                 
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
                        <img src="/editweb/pl.png" alt="" class="app-store-btn" /> -->
                    </a>
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
                    <a href="terms.php" class="copyright-text right">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8a978.js?site=5dd4413d36613959e9a5f5ea" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../assets.website-files.com/5dd4413d36613959e9a5f5ea/js/webflow.7b9cc3e65.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
