<style>
        .padMe{
            padding-top:10px;
            padding-bottom:10px;
        }
        img {
            border-radius: 17px;
        }
        .card-panel
        {
            margin-left: 10px;
            margin-right: 10px;
        }
        body{
            background: #f0f0f0;
            font-family: 'Noto Sans', sans-serif;
        }
        h1{
            width: 500px;
            height: 100px;
            position: fixed;
            top: 50%;
            left: 50%;
            margin: -100px 0 0 -275px;
            font-size: 3.2em;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            line-height: 100px;
            color: #aaa;
        }
        h2{
            width: 500px;
            height: 100px;
            position: fixed;
            top: 50%;
            left: 50%;
            margin: 0 0 0 -225px;
            font-size: 1.6em;
            font-weight: 400;
            text-align: center;
            line-height: 100%;
            color: #bbb;
        }
        /* The ribbons */
        .corner-ribbon{
            width: 200px;
            background: #e43;
            position: absolute;
            top: 25px;
            left: -50px;
            text-align: center;
            line-height: 50px;
            letter-spacing: 1px;
            color: #f0f0f0;
            transform: rotate(-48deg);
            -webkit-transform: rotate(-48deg);
        }
        /* Custom styles */
        .corner-ribbon.sticky{
            position: fixed;
        }
        .corner-ribbon.shadow{
            box-shadow: 0 0 3px rgba(0,0,0,.3);
        }
        /* Different positions */
        .corner-ribbon.top-left{
            top: 25px;
            left: -50px;
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        .corner-ribbon.top-right{
            position: relative;
            top: -190px;
            left: 50%;
            right: auto;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }
        /* Colors */
        .corner-ribbon.white{background: #f0f0f0; color: #555;}
        .corner-ribbon.black{background: #333;}
        .corner-ribbon.grey{background: #999;}
        .corner-ribbon.blue{background: #39d;}
        .corner-ribbon.green{background: #2c7;}
        .corner-ribbon.turquoise{background: #1b9;}
        .corner-ribbon.purple{background: #95b;}
        .corner-ribbon.red{background: #e43;}
        .corner-ribbon.orange{background: #e82;}
        .corner-ribbon.yellow{background: #ec0;}
    </style>

<div class="card-panel">
                    <div class="col s12">
                        <h3 id="introduction"></h3>
                        <p id="balance"></p>
                    </div>
                    <div class="row">
                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Payments</span>
                                    <p>Get updates on your payment habits. Get a detailed description of how well you
                                        manage your accounts.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#payment.php">See Recent Payments</a>

                                </div>
                                <div>
                                <div style="visibility:hidden" class="corner-ribbon top-right sticky blue">Coming Soon</div>
                                </div>
                            </div>
                        </div>

                        <div class="col l3 m6 s12">

                            <div class="card blue-grey darken-1" style="overflow:hidden">

                                <div class="card-content white-text">
                                    <span class="card-title">Pay Bill</span>
                                    <p>Bill Pay is quicker and easier than writing and mailing paper checks.
                                        Pay your bills online in minutes!</p>
                                </div>
                                <div class="card-action">
                                    <a href="#payBill.php">Pay Bills Online</a>

                                </div>
                                <div class="corner-ribbon top-right sticky red">Coming Soon</div>
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1" style="overflow:hidden">
                                <div class="card-content white-text">
                                    <span class="card-title">Transfer</span>
                                    <p>Send your money to other accounts safely and with ease. It's never been easier.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#transfer.php">Transfer Account Money</a>

                                </div>
                                <div class="corner-ribbon top-right sticky red">Coming Soon</div>
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Travel</span>
                                    <p>Get info an trips that you can or could afford this year based on
                                        your account payments and activities.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#travel.php">Go Abroad</a>

                                </div>
                                <div style="visibility:hidden" class="corner-ribbon top-right sticky blue">Coming Soon</div>
                            </div>
                        </div>
                    </div>
                </div>