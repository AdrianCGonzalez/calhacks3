
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

                    <li><a href="logIn.html">Log In</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="aboutUs.html">About Us</a></li>

                    <li><a href="logIn.html">Log In</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

            </div>
        </nav>


        <div class="fixed-action-btn">
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
      <br>
      <div class="row hide-on-small-only">
        <div class="col s12 m7">
          <h1>Traveling has never been easier</h1>
          <br>
          <p>Nulla id ligula tortor. Quisque tincidunt neque purus, et aliquet arcu ullamcorper eu. Cras in arcu ac urna ultrices bibendum. Vestibulum rutrum diam leo, vitae pulvinar turpis facilisis ut. Morbi a ullamcorper quam. Praesent placerat ac augue vitae cursus. Maecenas semper nisi nibh, in maximus magna condimentum vitae. Curabitur nec vestibulum ex, in fringilla arcu. Curabitur nec elit eget tortor tristique fringilla in in massa. Suspendisse et porttitor est, in volutpat lorem. Nulla pulvinar quis velit quis facilisis. Sed leo dolor, feugiat ac est sed, semper mattis lectus. Maecenas suscipit ornare erat sed congue. Nullam volutpat neque id libero mattis scelerisque. Integer ac ante finibus, ultricies ante id, convallis lorem. Fusce rhoncus eros vitae magna tempor, sit amet hendrerit dui aliquet.</p>
        </div>
        <div class="col s12 m5">
          <img src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Squirrel_posing.jpg" style="width:100% height:100%">
        </div>
      </div>
      <br>
      <hr>
      <br>
        <div class="row" height="50vh">
<div class="col s12 m4" id="description1">
  <h1>Line Chart</h1>
  <br>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor eros eget mauris blandit accumsan. Suspendisse accumsan blandit commodo. Nulla lobortis metus nec egestas luctus. Nunc ac hendrerit massa, vel blandit mauris. Vestibulum feugiat porta varius. Ut feugiat arcu purus, vitae dignissim erat finibus vel. Donec eu arcu sit amet dui cursus semper. In hac habitasse platea dictumst. Mauris ornare non quam non vehicula. Nunc molestie sagittis ex eget placerat.</p>
          </div>
            <div class="col s12 m8">
                <canvas id="myChart" width="100%" height="50%"></canvas>
            </div>


        </div>
      <br>
      <hr>
      <br>
        <div class="row" height="50vh">

<div class="col s12 m4" id="description2">
  <h1>Bar Chart</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor eros eget mauris blandit accumsan. Suspendisse accumsan blandit commodo. Nulla lobortis metus nec egestas luctus. Nunc ac hendrerit massa, vel blandit mauris. Vestibulum feugiat porta varius. Ut feugiat arcu purus, vitae dignissim erat finibus vel. Donec eu arcu sit amet dui cursus semper. In hac habitasse platea dictumst. Mauris ornare non quam non vehicula. Nunc molestie sagittis ex eget placerat.</p>
          </div>

            <div class="col s12 m8">
                <canvas id="myChart2" width="100%" height="50%"></canvas>
            </div>
        </div>
      <br>
      <hr>
      <br>

      <h1 class="center-align">Empowering Users From Day 1</h1>
      <br>
      <img class="center-align" src="https://www.drift.com/wp-content/uploads/2016/10/icons.jpg">
    <br>
      	<div class="parallax-container valign-wrapper">
			<div class="section no-pad-bot">
				<div class="container">
					<div style="background-color: rgba(25, 25, 25, 0.4);">
						<div class="row center">
							<h5 class="header col s12 light">BlahBLahBLahBlah</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="http://wallpaperbackgrounds.com/Content/wallpapers/animal/turtle/124097-2678.jpg" alt="Unsplashed background img 2"></div>
		</div>

      <h1>Here's how we're different.</h1>
      <br>
      <b>An intelligent messaging app.</b>
      <br>
      <p>With our bot, we’re bringing the power of Artificial Intelligence to the most important part of your business: the relationships you have with your customers. Driftbot is able to understand all of the conversations your customers are having with your company, and help get the right message to the right person at the right time. That means no more worrying about sales reps wasting time with support questions, or angry customers going unanswered for days.</p>
      <b>An intelligent messaging app.</b>
      <br>
      <p>With our bot, we’re bringing the power of Artificial Intelligence to the most important part of your business: the relationships you have with your customers. Driftbot is able to understand all of the conversations your customers are having with your company, and help get the right message to the right person at the right time. That means no more worrying about sales reps wasting time with support questions, or angry customers going unanswered for days.</p>
      <b>An intelligent messaging app.</b>
      <br>
      <p>With our bot, we’re bringing the power of Artificial Intelligence to the most important part of your business: the relationships you have with your customers. Driftbot is able to understand all of the conversations your customers are having with your company, and help get the right message to the right person at the right time. That means no more worrying about sales reps wasting time with support questions, or angry customers going unanswered for days.</p>
      <br>

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
                  	responsive:false;
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
        function graphSize()
        {
          console.log("in this bitch");
            $("#myChart").height($("#description1").height());
$("#myChart2").height($("#description2").height());
        }
        graphSize();
        $(window).resize(function(){
            graphSize();
        });
    </script>
</html>
