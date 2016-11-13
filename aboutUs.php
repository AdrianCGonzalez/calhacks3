
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
                        <a href="index.php" class="brand-logo hide-on-med-and-down" style="margin-left:40px">DreamCatcher</a>
                        <ul id="nav-mobile" class="right hide-on-small-only">
                            <li><a href="aboutUs.php">About Us</a></li>
                            <li><a href="#modal1" data-target="modal1" class="modal-trigger">Log In</a></li>
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
                <li><a class="btn-floating red" href="aboutUs.php"><i class="material-icons">perm_identity</i></a></li>
                <li><li><a href="#modal1" data-target="modal1" class=" btn-floating red modal-trigger"><i class="material-icons">vpn_key</i></a></li>
            </ul>
        </div>


        <div id="modal1" class="modal" style="overflow:hidden;">
            <div class="modal-content">
                <h4 style="text-align:center">Sign In</h4>
                <form class="col s12">

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="name" class="validate">
                            <label for="name">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="comment" type="text" class="validate">
                            <label for="comment">Password</label>
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
        <div class="contentWrapper">
            <div class="pageWrapper">
                <h3  style="text-align:center;color:#black;border-bottom: 1px solid rgba(221, 179, 8, 0.2);">About Us</h3>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="col m3"> <img data-caption="Michael Brooks" class=" materialboxed img-circle responsive-img center-block" src="michael.jpg" width="200" height="250px" /> </div>
                    <div class="col m8">
                        <p align="left">
                            <br><b>Michael Brooks</b>

                            <br>
                            <br>Undergraduate Student, Bioengineering 4th year<br><br>

                            Donec ut vulputate nulla. Cras sit amet dui a elit vestibulum porta vitae a mi. Mauris non consequat sapien. Suspendisse potenti. Pellentesque eget quam ante. Cras porttitor magna in sem maximus, vel imperdiet velit sagittis. Morbi ultrices, lorem nec vestibulum tristique, lorem ante ultricies odio, et mollis eros ligula bibendum quam. </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col m1"></div>
                    <div class="col m3"> <img data-caption="Esteban Perez" class=" materialboxed img-circle responsive-img center-block" src="esteban.jpg" width="200" height="250px" /> </div>
                    <div class="col m8">
                        <p align="left">
                            <br><b>Esteban Perez</b>

                            <br>
                            <br>Undergraduate Student, Computer Science And Engineering 4th year<br><br>

                            Donec ut vulputate nulla. Cras sit amet dui a elit vestibulum porta vitae a mi. Mauris non consequat sapien. Suspendisse potenti. Pellentesque eget quam ante. Cras porttitor magna in sem maximus, vel imperdiet velit sagittis. Morbi ultrices, lorem nec vestibulum tristique, lorem ante ultricies odio, et mollis eros ligula bibendum quam.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col m1"></div>
                    <div class="col m3"> <img data-caption="Alisa Prusa" class=" materialboxed img-circle responsive-img center-block" src="alisa.jpg" width="200" height="250px" /> </div>
                    <div class="col m8">
                        <p align="left">
                            <br><b>Alisa Prusa</b>

                            <br>
                            <br>Alumni, Computer Science And Engineering<br>
                            Donec ut vulputate nulla. Cras sit amet dui a elit vestibulum porta vitae a mi. Mauris non consequat sapien. Suspendisse potenti. Pellentesque eget quam ante. Cras porttitor magna in sem maximus, vel imperdiet velit sagittis. Morbi ultrices, lorem nec vestibulum tristique, lorem ante ultricies odio, et mollis eros ligula bibendum quam.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="col m3"> <img data-caption="Victor Gonzalez" class=" materialboxed img-circle responsive-img center-block" src="victor.jpg" width="200" height="250px" /> </div>
                    <div class="col m8">
                        <p align="left">
                            <br><b>Victor Gonzalez</b>

                            <br>
                            <br>Undergraduate Student, Computer Science And Engineering 4th year<br><br>

                            Donec ut vulputate nulla. Cras sit amet dui a elit vestibulum porta vitae a mi. Mauris non consequat sapien. Suspendisse potenti. Pellentesque eget quam ante. Cras porttitor magna in sem maximus, vel imperdiet velit sagittis. Morbi ultrices, lorem nec vestibulum tristique, lorem ante ultricies odio, et mollis eros ligula bibendum quam.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col m1"></div>
                    <div class="col m3"> <img data-caption="Adrian Gonzalezz" class=" materialboxed img-circle responsive-img center-block" src="adrian.jpg" width="200" height="250px" /> </div>
                    <div class="col m8">
                        <p align="left">
                            <br><b>Adrian Gonzalezz</b>

                            <br>
                            <br>Undergraduate Student, Computer Science And Engineering 4th year<br><br>

                            Donec ut vulputate nulla. Cras sit amet dui a elit vestibulum porta vitae a mi. Mauris non consequat sapien. Suspendisse potenti. Pellentesque eget quam ante. Cras porttitor magna in sem maximus, vel imperdiet velit sagittis. Morbi ultrices, lorem nec vestibulum tristique, lorem ante ultricies odio, et mollis eros ligula bibendum quam.</p>
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
