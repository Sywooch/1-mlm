<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title>404 Error Page</title>

        <!--ADDING THE REQUIRED STYLE SHEETS-->

        <link type="text/css" href="//1-mlm.com/404/css/bootstrap.css" rel="stylesheet">  <!--BOOTSTRAP 3 CSS FILE-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> <!-- Google web font link-->
        <link type="text/css" href="//1-mlm.com/404/css/font-awesome.css" rel="stylesheet"> <!--Font Awesome CSS FILE-->
        <link type="text/css" href="//1-mlm.com/404/css/custom.css" rel="stylesheet">  <!--CUSTOM CSS FILE-->
        <link type="text/css" href="//1-mlm.com/404/css/animate.css" rel="stylesheet">  <!--animate.css FILE-->



        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->



    </head>
    <body>

        <section>
            <div class="container">
                <div class="row row1">
                    <div class="col-md-12">
                        <h3 class="center capital f1 wow fadeInLeft" data-wow-duration="2s">Что-то пошло не так!</h3>
                        <h1 id="error" class="center wow fadeInRight" data-wow-duration="2s">0</h1>
                        <p class="center wow bounceIn" data-wow-delay="2s">Страница не найдена!</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="cflask-holder" class="wow fadeIn" data-wow-delay="2800ms">
                            <span class="wow tada " data-wow-delay="3000ms"><i class="fa fa-flask fa-5x flask wow flip" data-wow-delay="3300ms"></i> 
                                <i id="b1" class="bubble"></i>
                                <i id="b2" class="bubble"></i>
                                <i id="b3" class="bubble"></i>

                            </span>
                        </div>
                    </div>
                </div>


                <div class="row"> <!--Search Form Start-->
                    <div class="col-md-12">     
                        <div class="col-md-6 col-md-offset-3 search-form wow fadeInUp" data-wow-delay="4000ms">
                            <form action="#" method="get">
                                <input type="text" placeholder="Search" class="col-md-9 col-xs-12"/>
                                <input type="submit" value="Search" class="col-md-3 col-xs-12"/>
                            </form>
                        </div>
                    </div>
                </div> <!--Search Form End-->   


                <div class="row"> <!--Links Start-->
                    <div class="col-md-12">
                        <div class="links-wrapper col-md-6 col-md-offset-3">
                            <ul class="links col-md-9">
<li class="wow fadeInRight" data-wow-delay="4400ms"><a href="//1-mlm.com/"><i class="fa fa-home fa-2x"></i></a></li>
<li class="wow fadeInRight" data-wow-delay="4300ms"><a href="https://www.facebook.com/1mlmcom/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
<li class="wow fadeInRight" data-wow-delay="4200ms"><a href="https://twitter.com/1mlmcom" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
<li class="wow fadeInLeft" data-wow-delay="4200ms"><a href="https://plus.google.com/u/0/+1%D0%B9%D0%9C%D0%9B%D0%9C%D0%A0%D0%B5%D1%81%D1%83%D1%80%D1%81TM" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a></li>
<li class="wow fadeInLeft" data-wow-delay="4300ms"><a href="https://www.youtube.com/channel/UC4Q97tIPa3_xn3uUdjybPQw" target="_blank"><i class="fa fa-youtube fa-2x"></i></a></li>
<li class="wow fadeInLeft" data-wow-delay="4400ms"><a href="http://vk.com/1mlmcom" target="_blank"><i class="fa fa-vk fa-2x"></i></a></li>
                            </ul>

                        </div>
                    </div>

                </div> <!-- Links End--> 
            </div>
        </section>

        <!--ADDING THE REQUIRED SCRIPT FILES-->
        <script type="text/javascript" src="//1-mlm.com/404/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="//1-mlm.com/404/js/countUp.js"></script>
        <script type="text/javascript" src="//1-mlm.com/404/js/wow.js"></script>

        <!--Initiating the CountUp Script-->
        <script type="text/javascript">
            "use strict";
            var count = new countUp("error", 0, 404, 0, 3);

            window.onload = function() {
                // fire animation
                count.start();
            }
        </script>

        <!--Initiating the Wow Script-->
        <script>  
            "use strict";
            var wow = new WOW(
            {
                animateClass: 'animated',
                offset:       100
            }
        );
            wow.init();
        </script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-48537202-1', 'zooxstudio.co');
            ga('send', 'pageview');

        </script>


    </body>
</html>
