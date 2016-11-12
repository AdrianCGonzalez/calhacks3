
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
        <meta http-equiv="refresh" content="15">
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <title>Vacation</title>

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
    </style>

    <body>
        <nav class="teal darken-2">
            <div class="nav-wrapper">
                <div class="contentWrapper">
                    <div class="pageWrapper">
                        <a href="index.php" class="brand-logo"> <img src="http://www.calhacks.io/assets/img/sittingbear.png" style="margin-top:13px;width:36px;height:36px"></a>
                        <a href="index.php" class="brand-logo hide-on-small-only" style="margin-left:40px">CalHacks</a>
                        <ul id="nav-mobile" class="right hide-on-large-only">
                            <li><a href="aboutUs.html">About Us</a></li>
                            <li><a href="logIn.html">Log In</a></li>
                        </ul>
                        <ul id="nav-mobile" class="side-nav">
                            <li><a href="aboutUs.html">About Us</a></li>

                            <li><a href="logIn.html">Log In</a></li>
                        </ul>
                        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
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
                <li><a class="btn-floating green" href="logIn.html"><i class="material-icons">vpn_key</i></a></li>
            </ul>
        </div>



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

            <div class="parallax"><img src="https://inst.eecs.berkeley.edu/~cs194-26/fa14/upload/files/proj3/cs194-fb/images/blurry_turtle.jpg" alt="Unsplashed background img 1"></div>
        </div>

        <br>
        <div class="contentWrapper">
            <div class="pageWrapper">




                <div class="row hide-on-med-and-down">
                    <div class="col s12 m7">
                        <h1 style="padding-bottom:10px" >Personalized Traveling Based On Your Income</h1>

                        <p>Nulla id ligula tortor. Quisque tincidunt neque purus, et aliquet arcu ullamcorper eu. Cras in arcu ac urna ultrices bibendum. Vestibulum rutrum diam leo, vitae pulvinar turpis facilisis ut. Morbi a ullamcorper quam. Praesent placerat ac augue vitae cursus. Maecenas semper nisi nibh, in maximus magna condimentum vitae. Curabitur nec vestibulum ex, in fringilla arcu. Curabitur nec elit eget tortor tristique fringilla in in massa. Suspendisse et porttitor est, in volutpat lorem. Nulla pulvinar quis velit quis facilisis. Sed leo dolor, feugiat ac est sed, semper mattis lectus. Maecenas suscipit ornare erat sed congue. Nullam volutpat neque id libero mattis scelerisque. Integer ac ante finibus, ultricies ante id, convallis lorem. Fusce rhoncus eros vitae magna tempor, sit amet hendrerit dui aliquet.</p>
                    </div>
                    <div class="col s12 m5">
                        <img class="responsive-img" src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Squirrel_posing.jpg">
                    </div>
                </div>

                <div class="row hide-on-large-only">
                    <div class="row">
                        <div class="col s12 m7">
                            <h1 style="padding-bottom:10px">Personalized Traveling Based On Your Income</h1>
                        </div>
                        <div class="col s12 m5">
                            <img class="responsive-img" src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Squirrel_posing.jpg">
                        </div>
                    </div>
                    <div class="col s12 m7">
                        <p>Nulla id ligula tortor. Quisque tincidunt neque purus, et aliquet arcu ullamcorper eu. Cras in arcu ac urna ultrices bibendum. Vestibulum rutrum diam leo, vitae pulvinar turpis facilisis ut. Morbi a ullamcorper quam. Praesent placerat ac augue vitae cursus. Maecenas semper nisi nibh, in maximus magna condimentum vitae. Curabitur nec vestibulum ex, in fringilla arcu. Curabitur nec elit eget tortor tristique fringilla in in massa. Suspendisse et porttitor est, in volutpat lorem. Nulla pulvinar quis velit quis facilisis. Sed leo dolor, feugiat ac est sed, semper mattis lectus. Maecenas suscipit ornare erat sed congue. Nullam volutpat neque id libero mattis scelerisque. Integer ac ante finibus, ultricies ante id, convallis lorem. Fusce rhoncus eros vitae magna tempor, sit amet hendrerit dui aliquet.</p>
                    </div>

                </div>

                <hr class="padMe">

                <div class="row" height="50vh">
                    <div class="col s12 m4" id="description1">
                        <h1 class="padMe">Bar Chart</h1>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor eros eget mauris blandit accumsan. Suspendisse accumsan blandit commodo. Nulla lobortis metus nec egestas luctus. Nunc ac hendrerit massa, vel blandit mauris. Vestibulum feugiat porta varius. Ut feugiat arcu purus, vitae dignissim erat finibus vel. Donec eu arcu sit amet dui cursus semper. In hac habitasse platea dictumst. Mauris ornare non quam non vehicula. Nunc molestie sagittis ex eget placerat.</p>
                    </div>
                    <div class="col s12 m8">
                        <div class="ct-chart ct-perfect-fourth" id="myChart"></div>
						<script>makeChart("#myChart");</script>
                    </div>


                </div>

                <hr class="padMe">

                <div class="row" height="50vh">

                    <div class="col s12 m4" id="description2">
                        <h1>Line Chart</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor eros eget mauris blandit accumsan. Suspendisse accumsan blandit commodo. Nulla lobortis metus nec egestas luctus. Nunc ac hendrerit massa, vel blandit mauris. Vestibulum feugiat porta varius. Ut feugiat arcu purus, vitae dignissim erat finibus vel. Donec eu arcu sit amet dui cursus semper. In hac habitasse platea dictumst. Mauris ornare non quam non vehicula. Nunc molestie sagittis ex eget placerat.</p>
                    </div>

                    <div class="col s12 m8">
                        <div class="ct-chart ct-perfect-fourth" id="myChart2"></div>
						<script>makeChart("#myChart2");</script>
                    </div>
                </div>

                <hr class="padMe">


                <h2 class="center-align">Empowering Users From Day 1</h2>
                <div class="col s12 center-align">
                    <img class="padMe center-align" src="https://www.drift.com/wp-content/uploads/2016/10/icons.jpg">
                </div>
            </div>
        </div>
        <div class="parallax-container valign-wrapper">
            <div class="parallax"><img src="http://fullhdpictures.com/wp-content/uploads/2016/01/Different-Turtle-Wallpaper.jpg" alt="Unsplashed background img 2"></div>
        </div>
        <div class="contentWrapper">
            <div class="pageWrapper">
                <h1 class="padMe">Here's how we're different.</h1>
                <div class="holder repeat">
                    <div class="a f afl  card-panel">
                        <b class="padMe">An intelligent messaging app.</b>

                        <p>With our bot, we’re bringing the power of Artificial Intelligence to the most important part of your business: the relationships you have with your customers. Driftbot is able to understand all of the conversations your customers are having with your company, and help get the right message to the right person at the right time. That means no more worrying about sales reps wasting time with support questions, or angry customers going unanswered for days.</p>
                    </div>
                </div>
                <div class="holder repeat">
                    <div class="a f afr  card-panel">
                        <b class="padMe">An intelligent messaging app.</b>

                        <p>With our bot, we’re bringing the power of Artificial Intelligence to the most important part of your business: the relationships you have with your customers. Driftbot is able to understand all of the conversations your customers are having with your company, and help get the right message to the right person at the right time. That means no more worrying about sales reps wasting time with support questions, or angry customers going unanswered for days.</p>
                    </div>
                </div>
                <div class="holder repeat">
                    <div class="a f afl  card-panel">
                        <b class="padMe">An intelligent messaging app.</b>

                        <p>With our bot, we’re bringing the power of Artificial Intelligence to the most important part of your business: the relationships you have with your customers. Driftbot is able to understand all of the conversations your customers are having with your company, and help get the right message to the right person at the right time. That means no more worrying about sales reps wasting time with support questions, or angry customers going unanswered for days.</p>
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
            console.log("in this bitch");
            $("#myChart").height("0px");
            $("#myChart2").height("0px");
            $("#myChart").height($("#description1").height());
            $("#myChart2").height($("#description2").height());
            $("#myChart").width("100%");
            $("#myChart2").width("100%");
        }
        graphSize();
        $(window).resize(function(){
            graphSize();
        });
    </script>
</html>
