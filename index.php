
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='viewport' content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
		<meta http-equiv="refresh" content="5">
		<meta name="apple-touch-fullscreen" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Vacation</title>
		<!--<meta http-equiv="refresh" content="3">-->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<link rel="stylesheet" href="./css/style.css">

		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

	</head>

	<body>
      			<nav>
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">CalHacks</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">JavaScript</a></li>
					</ul>
				</div>
			</nav>
		<div class="contentWrapper">


			<div class="pageWrapper">
				<div>
					<span>
						Inspiration
                      		We all have seen those traveling ads where they promise you affordable vacations to paradise on earth. Then you click, and then it turns out is not affordable at all. This is great prose. We have the bestest english. No more.
						What it does
                      		C14-Hacks uses personalized information and data analysis to facilitate travel planning. Not only does it recommend affordable touri about the

						How we built it
						Challenges we ran into
						Accomplishments that we're proud of
					</span>
				</div>
				<div class="holder repeat">
					<div class="a afl  card-panel">
						<div>
							test
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="page-footer red lighten-2">
			<div style="padding-left:20px;padding-right:20px;">
				<div class="row">
					<div class="col l5 hide-on-small-only">
						<h5 class="white-text">Company Bio</h5>
						<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


					</div>
					<div class="col l4 s6">
						<h5 class="white-text" style="text-align:center">Settings</h5>
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
					<span class="hide-on-small-only">Powered by: nessie, aMaDEUS, Microsoft Azure Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">CFF</a> </span>©2016 Code For Food<span class="hide-on-med-and-down">All rights reserved.</span>
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
	</script>
</html>
st spots,
