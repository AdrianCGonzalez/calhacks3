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
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Pay Bill</span>
                                    <p>Bill Pay is quicker and easier than writing and mailing paper checks.
                                        Pay your bills online in minutes!</p>
                                </div>
                                <div class="card-action">
                                    <a href="#payBill.php">Pay Bills Online</a>

                                </div>
                            </div>
                        </div>

                        <div class="col l3 m6 s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Transfer</span>
                                    <p>Send your money to other accounts safely and with ease. It's never been easier.</p>
                                </div>
                                <div class="card-action">
                                    <a href="transfer.php">Transfer Account Money</a>

                                </div>
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
                                    <a href="travel.php">Go Abroad</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l8 m12 card-panel">
                        <p>Places you can go</p>


                        <div class="row">
                            
                            <div class="col l9">
                            <hr>    <h3 style="color:#1ab394;"> Name Of Place </h3>

                            </div>
                            <div class="col l3">
                                <br>
                                <h4 class="right">$1000.00</h4>
                            </div>
                        </div>
                        <div class="col l4 m6 s12">
                            <b>Airline:</b>   
                            <br>
                            <p>xxxxxxx</p>

                        </div>
                        <div class="col l4 m6 s12">  
                            <b> depart from:</b>
                            <br>
                            <p>xxxxx</p>
                        </div>
                        <div class="col s12">
                            <b>Description:</b><br> 
                            <p> THis place is great cause its great. Words words words words words Nunc ullamcorper lacus nec mi porta, et feugiat diam tempus. Donec bibendum eros nisl, eget vestibulum enim suscipit pulvinar. Sed eget tempor libero. Vestibulum accumsan sed purus in congue. Proin finibus eleifend dolor in efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed mauris f</p>


                        </div>
                        
                        <div class="row">
                            <div class="col l9">
                            <hr>    <h3 style="color:#1ab394;"> Name Of Place </h3>

                            </div>
                            <div class="col l3">
                                <br>
                                <h4 class="right">$1000.00</h4>
                            </div>
                        </div>
                        <div class="col l4 m6 s12">
                            <b>Airline:</b>   
                            <br>
                            <p>xxxxxxx</p>

                        </div>
                        <div class="col l4 m6 s12">  
                            <b> depart from:</b>
                            <br>
                            <p>xxxxx</p>
                        </div>
                        <div class="col s12">
                            <b>Description:</b><br> 
                            <p> THis place is great cause its great. Words words words words words Nunc ullamcorper lacus nec mi porta, et feugiat diam tempus. Donec bibendum eros nisl, eget vestibulum enim suscipit pulvinar. Sed eget tempor libero. Vestibulum accumsan sed purus in congue. Proin finibus eleifend dolor in efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed mauris f</p>


                        </div>
                        
                        <div class="row">
                            <div class="col l9">
                             <hr>   <h3 style="color:#1ab394;"> Name Of Place </h3>

                            </div>
                            <div class="col l3">
                                <br>
                                <h4 class="right">$1000.00</h4>
                            </div>
                        </div>
                        <div class="col l4 m6 s12">
                            <b>Airline:</b>   
                            <br>
                            <p>xxxxxxx</p>

                        </div>
                        <div class="col l4 m6 s12">  
                            <b> depart from:</b>
                            <br>
                            <p>xxxxx</p>
                        </div>
                        <div class="col s12">
                            <b>Description:</b><br> 
                            <p> THis place is great cause its great. Words words words words words Nunc ullamcorper lacus nec mi porta, et feugiat diam tempus. Donec bibendum eros nisl, eget vestibulum enim suscipit pulvinar. Sed eget tempor libero. Vestibulum accumsan sed purus in congue. Proin finibus eleifend dolor in efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed mauris f</p>


                        </div>
                        
                        <div class="row">
                            <div class="col l9">
                           <hr>     <h3 style="color:#1ab394;"> Name Of Place </h3>

                            </div>
                            <div class="col l3">
                                <br>
                                <h4 class="right">$1000.00</h4>
                            </div>
                        </div>
                        <div class="col l4 m6 s12">
                            <b>Airline:</b>   
                            <br>
                            <p>xxxxxxx</p>

                        </div>
                        <div class="col l4 m6 s12">  
                            <b> depart from:</b>
                            <br>
                            <p>xxxxx</p>
                        </div>
                        <div class="col s12">
                            <b>Description:</b><br> 
                            <p> THis place is great cause its great. Words words words words words Nunc ullamcorper lacus nec mi porta, et feugiat diam tempus. Donec bibendum eros nisl, eget vestibulum enim suscipit pulvinar. Sed eget tempor libero. Vestibulum accumsan sed purus in congue. Proin finibus eleifend dolor in efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed mauris f</p>


                        </div>
                        
                    </div>
                    <div class="col l3 m12">
                        <div class="col m12 card-panel">

                            <p>Current Balance:</p>
                            <br>
                            <p> How much do you plan on spending on this trip? (reccomended 3% gross income)</p>
                            <br>


                        </div>
                        <div class="col m12 card-panel">

                            <p>Cart Summary</p>
                            <br><p>Total</p><p>$10000.00</p>
                            <hr>
                            <p> How much do you plan on spending on this trip? (reccomended 3% gross income)</p>
                            <br>


                        </div>
                        <div class="col m12 card-panel">

                            <p class="center-align">Support</p>
                            <br><h4 style="color:teal">+1 (209) 722-8022</h4>

                            <p>Call us for support</p>
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

</html>