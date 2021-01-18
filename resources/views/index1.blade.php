@extends('structure.master')
@section('title')
    Home || PRESTON MANAGEMENT
@endsection
@section('body')
    <!-- Slider Starts -->
    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators Starts -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!-- Indicators Ends -->
        <!-- Carousel Inner Starts -->
        <div class="carousel-inner">
            <!-- Carousel Item Starts -->
            <div class="item active bg-parallax item-1">
                <div class="slider-content">
                    <div class="container">
                        <div class="slider-text text-center">
                            <h3 class="slide-title"><span>Welcome</span> to <span>Preston</span><br/> forex management</h3>
                            <P>CLICK THE BUTTON BELOW TO JOIN OUR FREE FOREX SIGNALS TELEGRAM CHANNEL</P>
                            <p>
                                <a href="https://t.me/prstmg" class="slider btn btn-primary">JOIN NOW</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->
            <!-- Carousel Item Starts -->
            <div class="item bg-parallax item-2">
                <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>A management</span> Platform <br/>You can <span>Trust</span> </h3>
                                <P>CLICK THE BUTTON BELOW TO JOIN OUR FREE FOREX SIGNALS TELEGRAM CHANNEL</P>
                                <p>
                                    <a href="https://t.me/prstmg" class="slider btn btn-primary">JOIN NOW</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item Ends -->
        </div>
        <!-- Carousel Inner Ends -->
        <!-- Carousel Controlers Starts -->
        <a class="left carousel-control" href="index-2.html#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="index-2.html#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
        <!-- Carousel Controlers Ends -->
    </div>
    <!-- Slider Ends -->
    <!-- Features Section Starts -->
               
    <section class="features">
        <div class="container">
            <div class="row features-row">
                <!-- Feature Box Starts -->
                <div class="feature-box col-md-4 col-sm-12">
                    <span class="feature-icon">
                        <img id="download-bitcoin" src="images/icons/orange/download-bitcoin.png" alt="download bitcoin">
                    </span>
                    <div class="feature-box-content">
                        <h3>Download Bitcoin Wallet</h3>
                        <p>Get it on PC or Mobile to create, send and receive bitcoins.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box two col-md-4 col-sm-12">
                    <span class="feature-icon">
                        <img id="add-bitcoins" src="images/icons/orange/add-bitcoins.png" alt="add bitcoins">
                    </span>
                    <div class="feature-box-content">
                        <h3>Add coins to your Wallet</h3>
                        <p>Add bitcoins you’ve created or exchanged via credit card.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                {{-- <div class="feature-box three col-md-4 col-sm-12">
                    <span class="feature-icon">
                        <img id="buy-sell-bitcoins" src="images/icons/orange/buy-sell-bitcoins.png" alt="buy and sell bitcoins">
                    </span>
                    <div class="feature-box-content">
                        <h3>Buy/Sell with Wallet</h3>
                        <p>Enter receiver's address, specify the amount and send.</p>
                    </div>
                </div> --}}
                <!-- Feature Box Ends -->
            </div>
        </div>
    </section>
    <!-- Features Section Ends -->
    <!-- About Section Starts -->
    <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">About <span>Us</span></h2>
                <div class="title-head-subtitle">
                    <p>A Management platform, that helps connect investors accounts  and Earn for them</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">WHY PRESTON management</h3>
                    <p class="about-text" align="justify">We offer forex managed account services to customers who do not have the time or skills to trade the market themselves.
                        Tradings are done directly on the customer’s forex account,this means the customer do not fund their equity directly to us but to their preferred forex broker.
                        Profit generated by our traders are shared 50/50 between the trader and the customer.
                        New customers looking to join us should read our requirements before enrolling for our managed account services. In cases of drawdowns or losses,the losses must be traded back before profit can be shared between the customer and the trader.
                        Our Tradings are done only on Mondays to Fridays which excludes weekends </p>
                   
                    
                    {{-- <a class="btn btn-primary" href="about.html">Read More</a> --}}
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>
    <!-- About Section Ends -->
    <!-- Features and Video Section Starts -->
    <section class="image-block">
        <div class="container-fluid">
            <div class="row">
                <!-- Features Starts -->
                <div class="col-md-8 ts-padding img-block-left">
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="strong-security" src="images/icons/orange/strong-security.png" alt="strong security"/>
                                </span>
                                <h3 class="feature-title">Strong Security</h3>
                                <p>Protection against DDoS attacks, <br>full data encryption</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="world-coverage" src="images/icons/orange/world-coverage.png" alt="world coverage"/>
                                </span>
                                <h3 class="feature-title">World Coverage</h3>
                                <p>Providing services in 99% countries<br> around all the globe</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="payment-options" src="images/icons/orange/payment-options.png" alt="payment options"/>
                                </span>
                                <h3 class="feature-title">Payment Options</h3>
                                <p>for faster and secure transactions all payments, <br>are to be made through crypto currencies</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="mobile-app" src="images/icons/orange/mobile-app.png" alt="mobile app"/>
                                </span>
                                <h3 class="feature-title">Mobile Support</h3>
<p>Mining via our Mobile App, and <br>
    quick response from our support team</p>                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="cost-efficiency" src="images/icons/orange/cost-efficiency.png" alt="cost efficiency"/>
                                </span>
                                <h3 class="feature-title">Cost efficiency</h3>
                                <p>Reasonable trading fees for takers<br> and all market makers</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="high-liquidity" src="images/icons/orange/high-liquidity.png" alt="high liquidity"/>
                                </span>
                                <h3 class="feature-title">High Liquidity</h3>
                                <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
                            </div>
                        </div>
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="high-liquidity" src="images/icons/orange/high-liquidity.png" alt="high liquidity"/>
                                </span>
                                <h3 class="feature-title">Invest & Stay Earning</h3>
<p>Enter receiver's address,<br> specify the amount and send.
    </p>                          </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                </div>
                <!-- Features Ends -->
                <!-- Video Starts -->
                {{-- <div class="col-md-4 ts-padding bg-image-1">
                    <div>
                        <div class="text-center">
                            <a class="button-video mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a>
                        </div>
                    </div>
                </div> --}}
                <!-- Video Ends -->
            </div>
        </div>
    </section>

      <!-- About Section Starts -->
      <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">PRESTON <span>MANAGEMENT</span></h2>
                <div class="title-head-subtitle">
                    <p>a management platform, that helps connect investors accounts  and earn for them</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="images/about-us1.png" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">TERMS AND CONDITION</h3>
                    <p class="about-text" align="justify">Please be advised https://prestonmanager.live managed forex services offered on the
                         site https://prestonmanager.live are NOT registered or regulated by any , United States,United Kingdom ,Canada, Australia,New Zealand 
                         ,Switzerland ,regulator including FINRA, SEC, FSC, NFA, CFTC , ASIC or FSA ,FSPR ,FINMA,MiFID. BaFIN (Germany), AMF (France), 
                         FSA (UK), CONSOB (Italy), CNMV (Spain) Risk Warnings and Disclaimer: Before deciding to participate in the Forex market, you 
                         should carefully consider your investment objectives, level of experience and risk appetite. Most importantly, do not invest 
                         money you cannot afford to lose.By viewing any material or using the information within this site, you agree that it is general 
                         educational material and you will not hold anyone responsible for loss or damages resulting from the content provided here by 
                         https://prestonmanager.live Forex Services or any of its staff or employees. Futures, options and spot currency trading have large potential 
                         rewards but also large potential risk. You must be aware of the risks and be willing to accept them in order to invest the futures, 
                         options or currency markets. Do not trade with money you cannot afford to lose. Though this website offers educational information 
                         regarding trading, the buying/selling of futures, options or currencies must be your decision to make. No representation is being 
                         made that any account will or is likely to achieve profits or losses similar to those discussed on the website or in any of its 
                         material. Past performances of any trading system or methodology is not necessarily indicative of future results. Once again, by 
                         joining and becoming a Client, neither https://prestonmanager.live nor any of its employees are responsible for any trades won or loss. All trades 
                         taken are entirely at the Client’s own risk.  </p>
                    <ul class="nav nav-tabs">
                        {{-- <li><a data-toggle="tab" href="#menu2">Our Services </a></li> --}}
                        {{-- <li><a data-toggle="tab" href="#menu3">Why Us</a></li> --}}
                    </ul>
        
                    {{-- <a class="btn btn-primary" href="about.html">Read More</a> --}}
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>
    <!-- Features and Video Section Ends -->
    <!-- Pricing Starts -->
    {{-- -}}
                                <!-- Buy Pricing Table #4 Ends -->
                                <!-- Sell Pricing Table #4 Starts -->
                                {{-- <li data-type="sell" class="is-hidden">
                                    <header class="pricing-header">
                                        <h2>PLATINUM <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-gbp"></i></span>
                                            <span class="value">2</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                       <a href="register" class="btn btn-primary">ORDER NOW</a>

                                    </footer>
                                </li> --}}
                                <!-- Sell Pricing Table #4 Ends -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Ends -->
    <!-- Bitcoin Calculator Section Starts -->
    {{-- <section class="bitcoin-calculator-section">
        <div class="container">
            <div class="row">
                <!-- Section Heading Starts -->
                <div class="col-md-12">
                    <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>
                    <p class="message text-center">Find out the current Bitcoin value with our easy-to-use converter</p>
                </div>
                <!-- Section Heading Ends -->
                <!-- Bitcoin Calculator Form Starts -->
                <div class="col-md-12 text-center">
                    <form class="bitcoin-calculator" id="bitcoin-calculator">
                        <!-- Input #1 Starts -->
                        <input class="form-input" name="btc-calculator-value" value="1">
                        <!-- Input #1 Ends -->
                        <div class="form-info"><i class="fa fa-gbp"></i></div>
                        <div class="form-equal">=</div>
                        <!-- Input/Result Starts -->
                        <input class="form-input form-input-result" name="btc-calculator-result">
                        <!-- Input/Result Ends -->
                        <!-- Select Currency Starts -->
                        <div class="form-wrap">
                            <select id="currency-select" class="form-input select-currency select-primary" name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown"></select>
                        </div>
                        <!-- Select Currency Ends -->
                    </form>
                    <p class="info"><i>* Data updated every 15 minutes</i></p>
                </div>
                <!-- Bitcoin Calculator Form Ends -->
            </div>
        </div>
    </section> --}}
    <!-- Bitcoin Calculator Section Ends -->
    <!-- Team Section Starts -->

    <!-- Team Section Ends -->
    <!-- Quote and Chart Section Starts -->
    <section class="image-block2">
        <div class="container-fluid">
            <div class="row">
                <!-- Quote Starts -->
                <div class="col-md-4 img-block-quote bg-image-2">
                    {{-- <blockquote>
<p>
    Lots of well put together cryptocurrency scams on the internet are deceiving innocent victims like us daily. Last month I lost 20 btc to an online scam and I got it back within 2 weeks after hiring crestmining.com Craziest month of my life, I thought it was the end
</p>
                        <footer> <span>MARK ANTHONY</span> </footer>
                    </blockquote> --}}
                </div>
                <!-- Quote Ends -->
                <!-- Chart Starts -->
                <div class="col-md-8 bg-grey-chart">
                    <div class="chart-widget dark-chart chart-1">
                        <div>
                            <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                        </div>
                    </div>
                    {{-- <div class="chart-widget light-chart chart-2">
                        <div>
                            <div class="btcwdgt-chart" bw-theme="light"></div>
                        </div>
                    </div> --}}
                </div>
                <!-- Chart Ends -->
            </div>
        </div>
    </section>
    <!-- Quote and Chart Section Ends -->
    <!-- Blog Section Starts -->
    {{-- <section class="blog">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">Bitcoin <span>News</span></h2>
                <div class="title-head-subtitle">
                    <p>Discover latest news about Bitcoin on our blog</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row latest-posts-content">
                <!-- Article Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href="blog-post.html"><img class="img-responsive" src="images/blog/blog-post-small-1.jpg" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="blog-post.html">How Cryptocurrency Begun and Its Impact To Financial Transactions</a>
                            </h4>
                            <div class="post-text">
                                <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                            </div>
                        </div>
                        <div class="post-date">
                            <span>01</span>
                            <span>JAN</span>
                        </div>
                        <a href="blog-post.html" class="btn btn-primary">read more</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Article Ends -->
                <!-- Article Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href="blog-post.html"><img class="img-responsive" src="images/blog/blog-post-small-2.jpg" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="blog-post.html">Cryptocurrency - Who Are Involved With It? Words about members</a>
                            </h4>
                            <div class="post-text">
                                <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                            </div>
                        </div>
                        <div class="post-date">
                            <span>17</span>
                            <span>MAR</span>
                        </div>
                        <a href="blog-post.html" class="btn btn-primary">read more</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Article Ends -->
                <!-- Article Start -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href="blog-post.html"><img class="img-responsive" src="images/blog/blog-post-small-3.jpg" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="blog-post.html">Risks & Rewards Of Investing In Bitcoin. Pros and Cons</a>
                            </h4>
                            <div class="post-text">
                                <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                            </div>
                        </div>
                        <div class="post-date">
                            <span>25</span>
                            <span>FEB</span>
                        </div>
                        <a href="blog-post.html" class="btn btn-primary">read more</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
            </div>
            <!-- Section Content Ends -->
        </div>
    </section> --}}
    <!-- Blog Section Ends -->
    <!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today </h2>
                            <p class="lead">Allow Us invest for you, while you make profit from rest</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="https://t.me/prstmg">Contact Now</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection