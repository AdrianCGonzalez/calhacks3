<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
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
        <script src="js/axis.js"></script>
        <script src="js/regression.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script>
            $('.button-collapse').sideNav();
            $(document).ready(function(){
                $('.parallax').parallax();
            });
            $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
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

    <body>

        <nav class="teal darken-2">
            <div class="nav-wrapper" style="padding-left:20px">
                <a href="index.php" class="brand-logo"> <img src="http://www.calhacks.io/assets/img/sittingbear.png" style="margin-top:13px;width:36px;height:36px"></a>
                <a href="index.php" class="brand-logo hide-on-med-and-down" style="margin-left:40px">CalHacks</a>
                <ul id="nav-mobile" class="right hide-on-small-only">
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="index.php"><i class="material-icons">power_settings_new</i></a></li>
                </ul>
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
                                    <p>Get updates on your payment habits. Get a detailed destricption of how well you
                                        manage your accounts.</p>
                                </div>
                                <div class="card-action">
                                    <a href="payment.php">See Recent Payments</a>

                                </div>
                                <div style="visibility:hidden" class="corner-ribbon top-right sticky blue">Coming Soon</div>
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
                                    <a href="payBill.php">Pay Bills Online</a>

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
                                    <a href="transfer.php">Transfer Account Money</a>

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
                <div class="card-panel">
                    <div class="row" style="padding-right:25px;">
                        <div class="input-field col s10">
                            <input id="place" type="text" class="validate">
                            <label for="place">Enter your dream destination</label>
                        </div>
                        <div class="col s2"><br><a id ="lookForThings" class="waves-effect waves-light btn">Find</a></div>

                    </div>
                </div>

                <div class="row">
                    <div class="col l9 m12" id ="Where"></div>
                    <div class="col l3 m12">
                        <div class="col m12 card-panel">

                            <p>Current Balance:</p>
                            <p id="balance"></p>
                            <br>
                            <p> How much do you plan on spending on this trip? (reccomended 3% gross income)</p>
                            <br>


                        </div>
                        <div class="col m12 card-panel">

                            <h3 class="center-align">Support</h3>
                            <br><h4 style="color:teal">+1 (209) 722-8022</h4>
<br>
                            <p class="center-align">Call us for support</p>
                        </div>
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


        <script>
            var UserID = '58279be1360f81f104549ddd';//58279be1360f81f104549ddc
            var purchaseMonth = [];
            var depositMonth = [];
            var netMonth = [];
            var combineDP = [];
            var minMon = 2*2*2*2*2*2*2*2*2*2*2*2*2*2*2*2;
            var minNet = 2*2*2*2*2*2*2*2*2*2*2*2*2*2*2*2;
            var curBal = 0;
            var slope;
            var yIntercept;
            $( "#lookForThings" ).click(function() {
                var destin = $("#place").val();
                $.ajax({
                    url: 'http://api.reimaginebanking.com/accounts/'+UserID+'/customer?key=92d167a667478cadc9b5542720b5463d',
                    success: function(results){
                        var startLoc = results.address.city;
                        $.ajax({

                            url: 'https://api.sandbox.amadeus.com/v1.2/flights/extensive-search?apikey=ib3sS98XgzI1hGenPDVfnObcP8h6bMgA&origin='+startLoc+'&destination='+destin+'&one-way=false&duration=5',
                            success: function(results){

                                var output = results;
                                console.log(output);
                                var itt = Math.round(results.results.length/5);
                               // console.log(results.results.length);
                                var content = "";
                                for(var i = 0;i<results.results.length;i+=itt)
                                {
                                    var myMonths = (results.results[i].price -yIntercept)/slope;
                                    console.log(myMonths);
                                    if(myMonths<12)
                                    {
                                        content+='<div class="card-panel red">';
                                    }else
                                    {
                                        
                                        content+='<div class="card-panel green">';
                                       
                                    }
                                    content+='<h3 style="color:#1ab394;">'+results.results[i].destination+'</h3>';
                                    content+='<br><h4 class="right">$'+results.results[i].price+'</h4><b>Airline:</b><br><p>'+results.results[i].destination+'</p>';
                                    content+='<b> depart from:</b><br><p>'+results.origin+'</p><b>Description:</b><br>';
                                    content+='<p> THis place is great cause its great. Words words words words words</p></div>';

                                   // console.log(content);
                                   // console.log(results.results[i].price);
                                   // console.log(results.results[i].destination);
                                   // console.log(results.results[i].departure_date);


                                }
                                $("#Where").html(content);
                                console.log('going out of loop');
                            }
                        });
                    }
                });

                /*$.ajax({
                    url: 'http://52.161.22.32/travelAPI/?option=2&origin='+'SFO'+'&destination='+'LAX',
                    success: function(results){
                        var output = JSON.parse(results);
                        console.log(output);
                        var itt = Math.round(output.results.length/5);
                        console.log(output.results.length);
                        var content = "";
                        for(var i = 0;i<output.results.length;i+=itt)
                        {
                            content+='<div class="card-panel"><h3 style="color:#1ab394;">'+output.results[i].itineraries[output.results[i].itineraries.length -1].inbound.flights[output.results[i].itineraries[output.results[i].itineraries[output.results[i].itineraries.length -1].inbound.flights.length-1]].destination.airport+'</h3>';
                            content+='<br><h4 class="right">$'+output.results[i].fare.total_price+'</h4><b>Airline:</b><br><p>'+output.results[i].itineraries[output.results[i].itineraries.length -1].inbound.flights[output.results[i].itineraries[output.results[i].itineraries.length -1].inbound.flights.length -1].marketing_airline+'</p>';
                            content+='<b> depart from:</b><br><p>'+output.origin+'</p><b>Description:</b><br>';
                            content+='<p> THis place is great cause its great. Words words words words words</p></div>';

                            console.log(content);


                        }
                        $("#Where").html(content);
                    }
                });*/
            });

            $.ajax({
                url: 'http://api.reimaginebanking.com/accounts/'+UserID+'?key=92d167a667478cadc9b5542720b5463d',
                success: function(results){

                    curBal = results.balance;
                    // console.log(curBal);
                    curBal /=100;
                    //console.log(curBal);

                    $("#balance").html(Math.round(curBal * 100) / 100);
                }
            });
            $.ajax({
                url: 'http://api.reimaginebanking.com/accounts/'+UserID+'/purchases?key=92d167a667478cadc9b5542720b5463d',
                success: function(results){
                    //   console.log("purchases");
                    for(var i  =0;i<12;i++)
                    {
                        var sumPurchase = 0;
                        for(var j =0;j<results.length;j++)
                        {
                            if(results[j].purchase_date.indexOf("2015-"+(i+1)+"-")==0 ){
                                sumPurchase += results[j].amount;
                                //  console.log(results[j].amount);
                            }
                        }
                        purchaseMonth.push(sumPurchase*33);
                        // console.log(sumPurchase);
                    }
                    // console.log(purchaseMonth);
                    $.ajax({
                        url: 'http://api.reimaginebanking.com/accounts/'+UserID+'/deposits?key=92d167a667478cadc9b5542720b5463d',
                        success: function(results){

                            for(var i  =0;i<12;i++)
                            {
                                var sumDeposit = 0;
                                for(var j =0;j<results.length;j++)
                                {
                                    if(results[j].transaction_date.indexOf("2015-"+(i+1)+"-")==0 ){
                                        sumDeposit += results[j].amount;
                                    }
                                }
                                depositMonth.push(sumDeposit);
                                //console.log(sumDeposit);
                            }
                            //     console.log(depositMonth);
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
                                netMonth.push(curBal);
                                curBal = curBal -( depositMonth[11-k] -purchaseMonth[11-k])

                                if(netMonth[k]<minNet)
                                {
                                    minNet = netMonth[k];
                                }

                            }
                            netMonth = netMonth.reverse();
                            //   console.log(netMonth);
                            var regre = [];
                            for(var i =0;i<12;i++)
                            {
                                var temp1 = [];
                                temp1.push(i);
                                temp1.push(netMonth[i]);
                                regre.push(temp1);
                            }
                            // console.log(regre);

                            var data = regre;
                            var result = regression('linear', data);
                             slope = result.equation[0];
                             yIntercept = result.equation[1];
                            
                            
                            
                            
                            //  console.log(slope);
                            //  console.log(yIntercept);
                            var plotreg = [];
                            plotreg.push(yIntercept);
                            for(var i = 1;i<12;i++)
                            {
                                plotreg.push(plotreg[i-1]+slope);
                            }

                            var temp = [];
                            temp.push(netMonth);
                            temp.push(plotreg);
                            //    console.log(netMonth);
                            combineDP.push(purchaseMonth);
                            combineDP.push(depositMonth);

                            //starting desitination, and maxprice --> options
                            $.ajax({
                                url: 'https://api.sandbox.amadeus.com/v1.2/flights/inspiration-search?apikey=ib3sS98XgzI1hGenPDVfnObcP8h6bMgA&origin='+'NYC'+'&one-way=false&duration=5&max_price='+'500',
                                success: function(results){
                                    var output = results;
                                    console.log(output);
                                    var itt = Math.round(results.results.length/5);
                                    console.log(results.results.length);
                                    var content = "";
                                    for(var i = 0;i<results.results.length;i+=itt)
                                    {
                                        content+='<div class="card-panel"><h3 style="color:#1ab394;">'+results.results[i].destination+'</h3>';
                                        content+='<br><h4 class="right">$'+results.results[i].price+'</h4><b>Airline:</b><br><p>'+results.results[i].destination+'</p>';
                                        content+='<b> depart from:</b><br><p>'+results.origin+'</p><b>Description:</b><br>';
                                        content+='<p> THis place is great cause its great. Words words words words words</p></div>';

                                        console.log(content);
                                        console.log(results.results[i].price);
                                        console.log(results.results[i].destination);
                                        console.log(results.results[i].departure_date);


                                    }
                                    $("#Where").html(content);
                                    console.log('going out of loop');
                                }
                            });
                            /*$.ajax({
                                url: 'https://api.sandbox.amadeus.com/v1.2/flights/extensive-search?apikey=ib3sS98XgzI1hGenPDVfnObcP8h6bMgA&origin='+'FRA'+'&destination='+'LON'+'&one-way=false&duration=5',
                                success: function(results){
                                    var output = results;
                                    console.log(output);
                                }
                            });*/






                            // makeChart("#myPi",combineDP,minMon);
                            //  makeChart("#myPi2",temp,minNet);
                        }
                    });
                }
            });


            $.ajax({
                url: 'http://api.reimaginebanking.com/accounts/'+UserID+'/purchases?key=92d167a667478cadc9b5542720b5463d',
                success: function(results){
                    var items = [];
                    var iCount= [];
                    for(k=0;k<results.length;k++){
                        if(items.indexOf(results[k].description) >-1)
                        {
                            iCount[items.indexOf(results[k].description)]++;
                            ////     console.log("found it "+items);
                        }else
                        {
                            items.push(results[k].description);
                            iCount.push(1);
                        }
                    }
                    //  console.log("description "+items);
                    //  console.log(iCount);
                    // makepi("#myChart1",iCount,items);
                }
            });

            /* for(k=0;k<3;k++){
            $.ajax({
                url: 'http://api.reimaginebanking.com/accounts/'+UserID+'/deposits?key=92d167a667478cadc9b5542720b5463d',
                success: function(results){
                    descriptionn += "<tr>" + "<td>"+results[k].description + "</td>"+"<td>"+results[k].amount + "</td>"+"<td>"+results[k].purchase_date + "</td>"+"</tr>";
                    $("#depositt").html($("#depositt").html()+descriptionn);
                }
            });
        }*/


        </script>
    </body>

</html>
