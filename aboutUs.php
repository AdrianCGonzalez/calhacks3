
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
        <meta http-equiv="refresh" content="45">
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <title>Vacation</title>
        <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Donald_Trump_August_19,_2015_(cropped).jpg/220px-Donald_Trump_August_19,_2015_(cropped).jpg" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link rel="stylesheet" href="./css/style.css">

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.10.1/chartist.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.10.1/chartist.min.js"></script>
        <script src="js/animatedChart.js"></script>
        <script src="js/piChart.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script>
            $('.button-collapse').sideNav();
            $(document).ready(function(){
                $('.parallax').parallax();
            });
        </script>

    </head>
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
    </style>

    <body>

        <nav class="teal darken-2">
            <div class="nav-wrapper">
                <div class="contentWrapper">
                    <div class="pageWrapper">
                        <a href="index.php" class="brand-logo"> <img src="http://www.calhacks.io/assets/img/sittingbear.png" style="margin-top:13px;width:36px;height:36px"></a>
                        <a href="index.php" class="brand-logo hide-on-med-and-down" style="margin-left:40px">CalHacks</a>
                        <ul id="nav-mobile" class="right hide-on-small-only">
                            <li><a href="aboutUs.php">About Us</a></li>
                            <li><a href="index.php"><i class="material-icons">power_settings_new</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="fixed-action-btn hide-on-med-and-up">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">menu</i>
            </a>
            <ul>
                <li><a class="btn-floating red" href="aboutUs.html"><i class="material-icons">perm_identity</i></a></li>
                <li><a class="btn-floating green" href="logIn.html"><i class="material-icons">power_settings_new</i></a></li>
            </ul>
        </div>
        <div class="contentWrapper">
            <div class="pageWrapper">


                <a href="#">This is a link</a>
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
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="payment.php">This is a link</a>

                                </div>
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Pay Bill</span>
                                    <p>Bill Pay is quicker and easier than writing and mailing paper checks.
                                        Pay your bills online in minutes!</p>
                                    <br>
                                </div>
                                <div class="card-action">
                                    <a href="#payBill.php">This is a link</a>

                                </div>
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Transfer</span>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="transfer.php">This is a link</a>

                                </div>
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Travel</span>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="travel.php">This is a link</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              <div class ="col s12 m4">
                    <div class="card-panel">
                        <div class="ct-chart ct-perfect-fourth" id="myPi"></div>

                    </div>
                </div>
                <div class ="col s12 m4">
                    <div class="card-panel">
                        <div class="ct-chart ct-perfect-fourth" id="myPi2"></div>

                    </div>
                </div>


                <div class="card-panel">

                    <div class="row">
                        <div class="col s12 m2">

                            <div id="myChartcon">
                                <div class="ct-chart ct-perfect-fourth" id="myChart"></div>
                                <script>makepi("#myChart");</script>
                            </div>
                        </div>

                        <div class="col s12 m10">
                            <p>Deposits</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th data-field="id">Amount</th>
                                        <th data-field="name">Transaction Date</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Alvin</td>
                                        <td>Eclair</td>

                                    </tr>
                                    <tr>
                                        <td>Alan</td>
                                        <td>Jellybean</td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                        <div class="col s12 right"><a href="#"  class="waves-effect waves-light btn right">View Full Purchace History</a></div>
                    </div>
                </div>

                <div class="card-panel">
                    <div class="row">
                        <div class="col s12 m2">

                            <div id="myChartcon">
                                <div class="ct-chart ct-perfect-fourth" id="myChart1"></div>
                                <script>makepi("#myChart1");</script>
                            </div>
                        </div>

                        <div class="col s12 m10">
                            <p>Purchaces</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th data-field="id">Description</th>
                                        <th data-field="price">Item Price</th>
                                        <th data-field="date">Date Purchased</th>
                                    </tr>
                                </thead>

                                <tbody id="purchasee">
                                    <tr id="description"></tr>
                                    <tr id="amount"></tr>
                                    <tr id="purchase_date"></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col s12 right"><a href="#"  class="waves-effect waves-light btn right">View Full Deposit History</a></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer teal darken-2">
            <div style="padding-left:20px;padding-right:20px;">
                <div class="row">
                    <div class="col l9 hide-on-small-only">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                    </div>
                    <div class="col l3 s6">
                        <h5 class="white-text" style="text-align:center">Contact Us</h5>
                        <ul>
                            <li class="white-text" style="text-align:center">Tel: (415) 297-9046</li>
                            <li class="white-text" style="text-align:center">Email: abc123@abc123.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                    <span class="hide-on-small-only">Powered by: nessie, aMaDEUS, Microsoft Azure Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">CodeForFood</a> </span>©2016 Code For Food<span class="hide-on-med-and-down">All rights reserved.</span>
                </div>
            </div>
        </footer>

    </body>




    <script>
        function initializeAnimation()
        {
            $( ".holder" ).each(function() {
                var myElement=$(this);
                if(myElement.children().hasClass("afl")||myElement.children().hasClass("afr"))
                {
                    myElement.height(myElement.children().outerHeight()+"px");
                }
            });
        }
        $(document).on('scroll', function() {
            var myScroll = $(this).scrollTop();
            inAnimate(myScroll);
        });

        function inAnimate(myScroll)
        {
            $( ".holder" ).each(function() {
                var element = $(this);
                var myAlign = $(this).position().left;
                var myWidth = $(this).width()
                var diff = myScroll+( $(window).height()*.9 );

                if(($(this).position().top) <= diff && $(this).position().top >= ( myScroll-$(this).height())){
                    if(element.children().hasClass("f")){
                        element.children().addClass("fi");
                    }
                    if(element.children().hasClass("g")){
                        element.children().addClass("gr");
                    }
                    if(element.children().hasClass("afl") || element.children().hasClass("afr"))
                    {
                        element.children().addClass("ac");
                    }

                }else if($(this).hasClass("repeat"))
                {
                    outAnimate(element);
                }
            });
        }
        function outAnimate(element)
        {
            if(element.children().hasClass("afl") || element.children().hasClass("afr"))
            {
                element.children().removeClass("ac");
            }
            if(element.children().hasClass("f")){
                element.children().removeClass("fi");
            }
            if(element.children().hasClass("g")){
                element.children().removeClass("gr");
            }

        }
        initializeAnimation();
        var myScroll = $(this).scrollTop();
        inAnimate(myScroll);
        function graphSize()
        {
            /*  console.log("in this bitch");
            $("#myChart").height("0px");
            $("#myChart").height($("#description1").height());
            $("#myChartcon").height($("#description1").height()+10);
       */ }
        graphSize();
        $(window).resize(function(){
            graphSize();
        });

var purchaseMonth = [];
        var depositMonth = [];
        var netMonth = [];
        var combineDP = [];
        var minMon = 2*2*2*2*2*2*2*2*2*2*2*2*2*2*2*2;
        var minNet = 2*2*2*2*2*2*2*2*2*2*2*2*2*2*2*2;
        var curBal = 0;
        $.ajax({
            url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549ddc/customer?key=92d167a667478cadc9b5542720b5463d',
            success: function(results){
                $("#introduction").html("Welcome "+results.first_name + " " +results.last_name+"!");
            }
        });
        $.ajax({
            url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549ddc?key=92d167a667478cadc9b5542720b5463d',
            success: function(results){

                curBal = results.balance;
                console.log(curBal);
                curBal /=100;
                console.log(curBal);
                $("#balance").html("Your balance is "+curBal + " with " +results.rewards+" reward points!");
            }
        });
        $.ajax({
            url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549ddc/purchases?key=92d167a667478cadc9b5542720b5463d',
            success: function(results){

                for(var i  =0;i<12;i++)
                {
                    var sumPurchase = 0;
                    for(var j =0;j<results.length;j++)
                    {
                        if(results[j].purchase_date.indexOf("2015-"+(i+1)+"-")==0 ){
                            sumPurchase += results[i].amount;
                        }
                    }
                    purchaseMonth.push(sumPurchase*33);
                    console.log(sumPurchase);
                }
                console.log(purchaseMonth);
                $.ajax({
                    url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549ddc/deposits?key=92d167a667478cadc9b5542720b5463d',
                    success: function(results){

                        for(var i  =0;i<12;i++)
                        {
                            var sumDeposit = 0;
                            for(var j =0;j<results.length;j++)
                            {
                                if(results[j].transaction_date.indexOf("2015-"+(i+1)+"-")==0 ){
                                    sumDeposit += results[i].amount;
                                }
                            }
                            depositMonth.push(sumDeposit);
                            console.log(sumDeposit);
                        }
                        console.log(depositMonth);
                        for(var k = 0; k < 12 ; k++)
                        {
                            if(depositMonth[k] < minMon)
                            {
                                minMon = depositMonth[k];
                            }
                            if(purchaseMonth[k] < minMon)
                            {
                                minMon = purchaseMonth[k];
                            }
                            curBal = curBal -(depositMonth[11-k] - purchaseMonth[11-k])
                            netMonth.push(curBal);
                            if(netMonth[k]<minNet)
                            {
                                minNet = netMonth[k];
                            }

                        }
                        var temp = [];
                        temp.push(netMonth);
                        console.log(netMonth);
                        combineDP.push(purchaseMonth);
                        combineDP.push(temp);
                        combineDP.push(temp);
                        combineDP.push(temp);
                        combineDP.push(temp);
                        combineDP.push(depositMonth);
                        makeChart("#myPi",combineDP,minMon);
                        makeChart("#myPi2",temp,minNet);

                    }
                });
            }
        });
        $.ajax({
            url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549ddc/customer?key=92d167a667478cadc9b5542720b5463d',
            success: function(results){
                $("#introduction").html("Welcome "+results.first_name + " " +results.last_name+"!");
            }
        });
        $.ajax({
            url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549ddc?key=92d167a667478cadc9b5542720b5463d',
            success: function(results){
                $("#balance").html("Your balance is "+results.balance + " with " +results.rewards+" reward points!");
            }
        });

        var descriptionn = "";
        var amountt = "";
        var purchase_datee = "";
        for(k=0;k<3;k++){
            $.ajax({
                url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549ddc/purchases?key=92d167a667478cadc9b5542720b5463d',
                success: function(results){
                  descriptionn += "<tr>" + "<td>"+results.description + "</td>"+"<td>"+results.amount + "</td>"+"<td>"+results.purchase_date + "</td>"+"</tr>";
                    $("#purchasee").html($("#purchasee").html()+descriptionn);
                }
            });
        }


    </script>
</html>
