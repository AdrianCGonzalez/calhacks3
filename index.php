
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='viewport' content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>

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

		<div class="pageWrapper">
			<div>
				<span>
          yo
        			asdfasdfasd hi victor
          hi andres
          Hi esteban
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
