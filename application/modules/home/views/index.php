    <?php
    if (!$this->session->logged_in_member){?>
    <div class="row">
        <!-- SHOWCASE -->
        <div class="col-lg-9 col-md-9">
            <div class="home_sc_snow">
                <p class="sc_title-en text-center">Trade Forex, Commodities, Stocks and Indices</p>
                <p class="sc_titlebold-en text-center">START&nbsp;TRADING&nbsp;NOW&nbsp;!</p>
                <div class="home_btn-en"><a href="<?=base_url();?>openaccount">START&nbsp;TRADING</a></div>
            </div>
        </div>
        <!-- LEAD FORM START-->
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="form-holder-en">
                <p class="text-center">Start Trading Now!</p>
                <form action="<?=base_url();?>openaccount/send" method="POST" class="plainForm">
                    <div class="form-group col-sm-12">
                        <input id="open-account-form-first-name" name="firstName" class="form-control" placeholder="First Name" type="text">
                    </div>
                    <div class="form-group col-sm-12">
                        <input id="open-account-form-last-name" name="lastName" class="form-control" placeholder="Last Name" type="text">
                    </div>
                    <div class="form-group col-sm-12">
                        <input id="open-account-form-email" name="email" class="form-control" placeholder="Email" type="text">
                    </div>
                    <div class="form-group col-sm-12">
                        <input id="open-account-form-addres" name="address" class="form-control" placeholder="Addres" type="text">
                    </div>
                    <div class="form-group col-sm-12">
                        <input id="open-account-form-phone-number" name="phoneInput" class="form-control" placeholder="Phone" type="text">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" id="" class="btn btn-default btn-block openac_btn">JOIN NOW</button>
                    </div>
                </form>
        <!-- LEAD FORM END-->
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="reuters">
                <div class="reuters_info" id="finance-ticker"></div>
            </div>
        </div>
    </div>


    <div class="row" id="home_boxes">
        <div class="col-lg-9 col-md-12">
            <div class="platform table-responsive">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                  <div id="tradingview_b15b1"></div>
                  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/FX-USDJPY/" rel="noopener" target="_blank"><span class="blue-text">USDJPY Chart</span></a> by TradingView</div>
                  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                  <script type="text/javascript">
                  new TradingView.widget(
                  {
                  "width": 850,
                  "height": 610,
                  "symbol": "FX:USDJPY",
                  "interval": "1",
                  "timezone": "Etc/UTC",
                  "theme": "Light",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "rgba(17, 85, 204, 1)",
                  "enable_publishing": false,
                  "allow_symbol_change": true,
                  "container_id": "tradingview_b15b1"
                }
                  );
                  </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>