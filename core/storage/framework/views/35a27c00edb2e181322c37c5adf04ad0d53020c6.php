

<?php $__env->startSection('content2'); ?>
 <!-- Developed By RelxCoder Sobuj -->

<head>

<style>
        .site-logo {
            height: 30px;
        }

        .bg-dark {
            background-color: #00160f !important;
        }

        div:where(.swal2-container) div:where(.swal2-popup) {
            border: 1px solid #0A9981 !important;
            background: #001e14 !important;
            color: #f2f2f2 !important;
        }
        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
            background-color: #0A9981 !important;
            box-shadow: 0 0 0 0px rgba(0,0,0,0) !important;
            width: 120px !important;
        }


        .navbar2 {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding-top: .5rem;
            padding-bottom: .5rem;
        }
        .fixed-bottom2 {
            position: fixed;
            right: 0;
            bottom: 70px;
            left: 0;
            z-index: 1030;
        }


        .navbar>.container, .navbar>.container-fluid, .navbar>.container-lg, .navbar>.container-md, .navbar>.container-sm, .navbar>.container-xl, .navbar>.container-xxl {
            display: initial;
            justify-content: space-evenly;
            align-items: center;
            align-content: center;
        }





    </style>
</head>

                       
<div class="bg-dark ">
    <!--top-nav-->
        <div class="py-3 text-center">
            <h3 class="text-center text-light my-3">
                <?php echo e(@$general->coin_name); ?>

                            
                                    
            </h3>
        </div>
    </div>
                                
 
                          
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="height: 375px">
        <div id="tradingview_1d6c8" style="height: 100%"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget({
                    "autosize": true,
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "1",
                    "timezone": "Etc/UTC",
                    "theme": "dark",
                    "style": "1",
                    "locale": "en",
                    "enable_publishing": false,
                    "backgroundColor": "#001e14",
                    "hide_top_toolbar": true,
                    "hide_legend": true,
                    "save_image": false,
                    "container_id": "tradingview_1d6c8"
                });
            </script>
        </div>
    <div class="tradingview-widget-container" style="height: 41vh">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
            {
                "colorTheme": "dark",
                "dateRange": "12M",
                "showChart": false,
                "locale": "en",
                "width": "100%",
                "largeChartUrl": "",
                "isTransparent": true,
                "showSymbolLogo": true,
                "showFloatingTooltip": true,
                "tabs": [
                {
                    "title": "Crypto",
                    "symbols": [
                    {
                        "s": "BINANCE:BTCUSDT"
                    },
                    {
                        "s": "BINANCE:TRXUSDT"
                    },
                    {
                        "s": "BINANCE:ETHUSDT"
                    },
                    {
                        "s": "BINANCE:XRPUSDT"
                    },
                    {
                        "s": "BINANCE:MATICUSDT"
                    },
                    {
                        "s": "BINANCE:AVAXUSDT"
                    },
                    {
                        "s": "BINANCE:FTMUSDT"
                    },
                    {
                        "s": "BINANCE:DOGEUSDT"
                    },
                    {
                        "s": "BINANCE:SHIBUSDT"
                    },
                    {
                        "s": "BINANCE:SOLUSDT"
                    }
                    ],
                    "originalTitle": "Forex"
                }
                ]
            }
        </script>
    </div>



    <!--bottom-nav-->
    <nav class="fixed-bottom2 glass-bg">

     <form action="<?php echo e(route('user.mining.on')); ?>" method="post">
     <?php echo csrf_field(); ?>
        <div class="container">
        <div class="row mt-2">
                <div class="col-6 text-center">
                <span>Time</span>
                </div>
                <div class="col-6 text-center">
                <span>Trade amount</span>
                </div>
            </div>

            <div class="row ">
                <div class="col-6">

                    <div class="border border-secondary border-1 rounded text-center text-white w-100">
                        <span id="timer"><?php echo e(\App\Models\GeneralSetting::first()->minute); ?>Minute</span>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <input class="border border-secondary border-1 rounded text-center text-white w-100 bg-dark" value="" placeholder="Enter Amount" type="text" name="tamount" id="tamount" >
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 ">
                    <button type="submit" value="submit" style="background-color: green;" class=" btn btn-sm w-100">Up</button>
                </div>
                <div class="col-6">

                    <button type="submit" value="submit" style="background-color: red;"  class=" btn btn-sm w-100 ">Down</button>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 20px;"></div>
        </form>
    </nav>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make(template().'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/user/mining/index.blade.php ENDPATH**/ ?>