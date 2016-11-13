
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

            $( "#target" ).submit(function( event ) {
                alert( "Handler for .submit() called." );
                event.preventDefault();
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
        footer.page-footer {margin-top: 0px;}
    </style>

    <body>
        <nav class="teal darken-2">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo"> <img src="http://www.calhacks.io/assets/img/sittingbear.png" style="margin-top:13px;width:36px;height:36px"></a>
                <a href="index.php" class="brand-logo hide-on-med-and-down" style="margin-left:40px">CalHacks</a>
                <ul id="nav-mobile" class="right hide-on-small-only">
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="#modal1" data-target="modal1" class="modal-trigger">Log In</a></li>
                </ul>
            </div>
        </nav>


        <div class="fixed-action-btn hide-on-med-and-up">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">menu</i>
            </a>
            <ul>
                <li><a class="btn-floating red" href="aboutUs.php"><i class="material-icons">perm_identity</i></a></li>
                <li><li><a href="#modal1" data-target="modal1" class=" btn-floating red modal-trigger"><i class="material-icons">vpn_key</i></a></li>
            </ul>
        </div>


        <div id="modal1" class="modal" style="overflow:hidden;">
            <div class="modal-content">
                <h4 style="text-align:center">Sign In</h4>
                <form action="user.php" class="col s12">

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="name" class="validate" placeholder="name">
                            <label for="name"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="comment" type="password" class="validate" placeholder="Password">
                            <label for="comment"></label>
                        </div>
                    </div>
                    <div class="input-field">
                        <label class="control-label" for="signin"></label>

                        <div style="text-align:center">
                            <button id="signin" name="signin" class="btn waves-effect waves-light btn-success" type="submit">Sign In</button>
                        </div>
                        <br>

                    </div>
                </form>
            </div>
        </div>
        <script>
            $( "#trigger" ).submit(function( event ) {
                // event.preventDefault();
            });
        </script>

        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container hide-on-med-and-up">
                    <br>
                    <br>
                    <div style="background-color: rgba(25, 25, 25, 0.1);">
                        <h1 class="header center white-text text-lighten-2">CalHacks</h1>
                    </div>
                    <br>
                </div>

                <div class="container hide-on-small-only">
                    <br>
                    <br>
                    <div style="background-color: rgba(25, 25, 25, 0.1);">
                        <h1 class="header center white-text text-lighten-2">CalHacks</h1>
                        <div class="row center">
                            <h4 class="header center white-text text-lighten-2">Team C14</h4>
                        </div>
                    </div>
                    <br>

                </div>
            </div>

            <div class="parallax" style="height:25vh">
                <img src="aus.PNG" alt="Unsplashed background img 1"></div>
        </div>

        <br>

        <div class="contentWrapper">
            <div class="pageWrapper">

                <div class="row hide-on-med-and-down">
                    <div class="col s12">
                        <h1 style="padding-bottom:10px" >Personalized Traveling Based On Your Income</h1>

                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The world is a book, and those who do not travel read only a page. Of course, if books were as expensive as traveling is, no one would read. Nevertheless, traveling is a lot of stress. It requires possibly coordinating vacation time for multiple people, finances, and many responsibilities, not to mention a myriad of things that can go wrong.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Nevertheless, our quantitative data analysis on key data points show that traveling still shows promise even with sporadic finances. Our objective is to make the process of planning this traveling easier. Using your bank information to extrapolate information about your socioeconomic status, we are able to give recommendations for places that you can afford to go and have a good time; without worrying too much about money. We include a way for you to set a goal, and using machine learning we produce a realistic timeline and recommendations that will allow you to achieve your dream vacation.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-container valign-wrapper">
            <div class="parallax"><img src="beach.jpg" alt="Unsplashed background img 2"></div>
        </div>
        <div class="contentWrapper">
            <div class="pageWrapper">
                <div class="row hide-on-large-only">
                    <div class="row">
                        <div class="col s12 m7">
                            <h1 style="padding-bottom:10px">Personalized Traveling Based On Your Income</h1>
                        </div>
                        <div class="col s12 m5">
                            <img style="border-radius: 17px;" class="responsive-img" src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Squirrel_posing.jpg">
                        </div>
                    </div>
                    <div class="col s12 m7">
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The world is a book, and those who do not travel read only a page.
                            Of course, if books were as expensive as traveling is, they would be 100000%  more expensive (don't quote us on this). Nevertheless, traveling IS a lot of stress. It requires possibly coordinating vacation time for multiple people, school, money, responsibilities, children, and a mirad of things that can go wrong.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nevertheless, our entirly innacurate polls with few data points show
                            that traveling is still shows promingtly as the dream for a significant portion of Americans. Our objective is to make the process of planning this traveling easier. Using your bank information to extrapolate information about your socioeconomical status, we are able to give recommendations for places that you can afford to go and have a good time without worrying too much about money.	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> Don't worry though, we know sometimes life gets rough and SF train station may not be your dream destination. We include a way for you to set a goal, and using top machine learning algorithms (again, don't quote us) we produce a realistic timeline and recommendations that will allow you to achieve your dream vacation. We are Dreamcatcher. Thank you for your time :).

                        </span>
                    </div>

                </div>

                <div style="border-top:0px;border-right: 1px;border-left: 1px;border-bottom: 1px; border-color:#27c971; border-style: solid;  border-radius:5px 5px 0 0;margin-bottom:10px"></div>

                <div class="row">
                    <div class="col s12 m4" id="description1">
                        <h1 class="padMe">Revenue vs Expenses</h1>

                        <span>Our graphs allow you to visualize your economic habits easily and compactly. They will permit you to analyze if your economic situation permits you to spend on non-neccessary things. Although a graph with a big spending might look disheathening, it also might be an opportunity to save!</span>
                    </div>
                    <div class="col s12 m8" id="myChartcon">
                        <div class="ct-chart ct-perfect-fourth" id="myChart"></div>

                    </div>


                </div>

                <div style="border-top:0px;border-right: 1px;border-left: 1px;border-bottom: 1px; border-color:#27c971; border-style: solid;  border-radius:5px 5px 0 0;margin-bottom:10px"></div>
                <div class="row">

                    <div class="col s12 m4" id="description2">
                        <h1>Balance</h1>
                        <span>We show you the history of your balance for the last 12 months. This will help you visualize your situation and help you understand how we came up with our suggestions. We also show the prediction of short term future finances that allows to determine a plan for your dream vacation. </span>
                    </div>

                    <div class="col s12 m8" id="myChart2con">
                        <div class="ct-chart ct-perfect-fourth" id="myChart2"></div>

                    </div>
                </div>


            </div>
        </div>
        <div class="parallax-container valign-wrapper">
            <div class="parallax"><img src="https://puu.sh/sgyge/8b67b37aeb.jpg" alt="Unsplashed background img 2"></div>
        </div>
      <!--  <div class="parallax-container valign-wrapper">
            <div class="parallax"><img src="https://puu.sh/sgyge/8b67b37aeb.jpg" alt="Unsplashed background img 2"></div>
        </div>-->

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
            <div class="col s12 center-align">
                    <img class="padMe center-align" src="/banner.png" height="100px">
                </div>
            <div class="footer-copyright">
                <div class="container center">
                    <span class="hide-on-small-only">Powered by: nessie, aMaDEUS, Microsoft Azure Made by <a class="brown-text text-lighten-3" href="http://i.imgur.com/6PlRXhI.gif">CodeForFood</a> </span>©2016 Code For Food<span class="hide-on-med-and-down">All rights reserved.</span>
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
            console.log("in this bitch");
            $("#myChart").height("0px");
            $("#myChart2").height("0px");
            $("#myChart").height($("#description1").height());
            $("#myChartcon").height($("#description1").height()+10);
            $("#myChart2").height($("#description2").height());
            $("#myChart2con").height($("#description2").height()+10);
        }
        var purchaseMonth = [];
        var depositMonth = [];
        var netMonth = [];
        var combineDP = [];
        var minMon = 2*2*2*2*2*2*2*2*2*2*2*2*2*2*2*2;
        var minNet = 2*2*2*2*2*2*2*2*2*2*2*2*2*2*2*2;
        var curBal = 0;
        $.ajax({
            url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549dde?key=92d167a667478cadc9b5542720b5463d',
            success: function(results){
                curBal = results.balance;
                console.log(curBal);
                curBal /=100;
                console.log(curBal);
                $("#balance").html("Your balance is "+Math.round(curBal * 100) / 100 + " with " +results.rewards+" reward points!");
            }
        });
        $.ajax({
            url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549dde/purchases?key=92d167a667478cadc9b5542720b5463d',
            success: function(results){
                console.log("purchases");
                for(var i  =0;i<12;i++)
                {
                    var sumPurchase = 0;
                    for(var j =0;j<results.length;j++)
                    {
                        if(results[j].purchase_date.indexOf("2015-"+(i+1)+"-")==0 ){
                            sumPurchase += results[j].amount;
                            console.log(results[j].amount);
                        }
                    }
                    purchaseMonth.push(sumPurchase*33);
                    console.log(sumPurchase);
                }
                console.log(purchaseMonth);
                $.ajax({
                    url: 'http://api.reimaginebanking.com/accounts/58279be1360f81f104549dde/deposits?key=92d167a667478cadc9b5542720b5463d',
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
                            netMonth.push(curBal);
                            curBal = curBal -(depositMonth[11-k] - purchaseMonth[11-k])
                            if(netMonth[k]<minNet)
                            {
                                minNet = netMonth[k];
                            }
                        }
                        netMonth = netMonth.reverse();
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
                        var slope = result.equation[0];
                        var yIntercept = result.equation[1];
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
                        makeChart("#myChart",combineDP,minMon,'month','amount');
                        makeChart("#myChart2",temp,minNet,'month','balance');
                    }
                });
            }
        });


        graphSize();
        $(window).resize(function(){
            graphSize();
        });
    </script>
</html>
