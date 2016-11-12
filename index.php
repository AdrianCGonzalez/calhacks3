
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script>
            $('.button-collapse').sideNav();
            $(document).ready(function(){
                $('.parallax').parallax();
            });
        </script>

    </head>

    <body>
        <nav class="teal darken-2">
            <div class="nav-wrapper">
<a href="index.php" class="brand-logo"> <img src="http://www.calhacks.io/assets/img/sittingbear.png" style="margin-top:13px;width:36px;height:36px"></a>
                <a href="index.php" class="brand-logo" style="margin-left:40px">CalHacks</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="logIn.html">Log In</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="logIn.html">Log In</a></li>
              </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

            </div>
        </nav>

        <div id="index-banner" class="parallax-container">

            <div class="section no-pad-bot">
                <div class="container hide-on-med-and-up">
                    <br>
                    <br>
                    <div style="background-color: rgba(25, 25, 25, 0.1);">
                        <h1 class="header center white-text text-lighten-2">LittleJellyMan</h1>
                    </div>
                    <br>

                </div>
                <div class="container hide-on-small-only">
                    <br>
                    <br>
                    <div style="background-color: rgba(25, 25, 25, 0.1);">
                        <h1 class="header center white-text text-lighten-2">LittleJellyMan</h1>
                        <div class="row center">
                            <h4 class="header center white-text text-lighten-2">Team C14</h4>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
            <div class="parallax"><img src="https://inst.eecs.berkeley.edu/~cs194-26/fa14/upload/files/proj3/cs194-fb/images/blurry_turtle.jpg" alt="Unsplashed background img 1"></div>
        </div>
      <div class="row" height="50vh">

      <div class="col s12 m6">
      <canvas id="myChart" width="100%" width="50%"></canvas>
      </div>

      <div class="col s12 m6">
      <canvas id="myChart2" width="100%" widht="50%"></canvas>
      </div>
      </div>
        <script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

      <script>
var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [6, 1, 9, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>





        <div class="contentWrapper">
            <div class="pageWrapper">
                <div>

                    <div class="holder repeat">
                        <div class="a f afr  card-panel">
                            <div>
                                <span><pre>
                          Inspiration
                              We all have seen those traveling ads where they promise you affordable vacations to paradise on earth. Then you click, and then it turns out is not affordable at all. This is great prose. We have the bestest english. No more.
                          What it does
                              C14-Hacks uses personalized information and data analysis to facilitate travel planning. Not only does it recommend affordable and interesting tourist places that are affordabe to the user, it also offers a financial guidance for places that are not an option in the present.
                          How we built it
                              Using Capital One api, Nessie, we gather financial information and use it together with Amadeous Traveling API to determine an optimal traveling spot for the user. Furthermore, we also offer requirements and a timeline if the user wants to go to a specific place out of reach for the moment. With us, you can finally achieve your dream vacation.
                          Challenges we ran into
                          	We drank too much boba and felt bad. Furthermnore, we ran out of barbeque chips. Plz send more.
                          Accomplishments that we're proud of
                          	We ate a lot of bananas
                            </pre></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="holder repeat">
                    <div class="a f afl  card-panel">
                        <div>
                            test
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
        $(window).resize(function(){
            initializeAnimation();
            var myScroll = $(this).scrollTop();
            inAnimate(myScroll);
        });
    </script>
</html>
