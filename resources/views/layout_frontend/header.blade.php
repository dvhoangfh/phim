<!DOCTYPE html>
<html lang="en">
<head>
<title>HohoPhim - Xem phim onnile miễn phí</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="shortcut icon" type="image/png" href="/public/frontend/images/logo.png"/>
<!-- //for-mobile-apps -->
<link href="/public/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/public/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/public/frontend/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="/public/frontend/css/faqstyle.css" type="text/css" media="all" />
<link href="/public/frontend/css/single.css" rel='stylesheet' type='text/css' />
<link href="/public/frontend/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="/public/frontend/css/jquery.slidey.min.css" rel="stylesheet">
<!-- pop-up -->
<link href="/public/frontend/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="/public/frontend/css/font-awesome.min.css" />
<!-- banner-bottom-plugin -->
<link href="/public/frontend/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<!-- flexslider -->
<link rel="stylesheet" href="/public/frontend/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- mystyle -->
<link href="/public/frontend/css/mystyle.css" rel="stylesheet" type="text/css" media="all">
<!-- js -->
<script type="text/javascript" src="/public/frontend/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/frontend/js/jquery-ui.min.js"></script>

</head>
<body>
<!-- header -->
    <div class="header">
    <a href="{{ route('welcome')}}"><img src="/public/frontend/images/logo.jpg" alt=""></a>
        <div class="container">
            <div class="w3layouts_logo">
                
            </div>
            <div class="w3_search">
                <form action="#" method="post">
                    <input type="text" id="search" name="Search" placeholder="Search" required="">
                    <input type="submit" value="Go">
                </form>
            </div>
            <div class="w3l_sign_in_register">
                <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 653</li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //header -->
<!-- bootstrap-pop-up -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Sign In & Sign Up
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                </div>
                <section>
                    <div class="modal-body">
                        <div class="w3_login_module">
                            <div class="module form-module">
                              <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">Click Me</div>
                              </div>
                              <div class="form">
                                <h3>Login to your account</h3>
                                <form action="#" method="post">
                                  <input type="text" name="Username" placeholder="Username" required="">
                                  <input type="password" name="Password" placeholder="Password" required="">
                                  <input type="submit" value="Login">
                                </form>
                              </div>
                              <div class="form">
                                <h3>Create an account</h3>
                                <form action="#" method="post">
                                  <input type="text" name="Username" placeholder="Username" required="">
                                  <input type="password" name="Password" placeholder="Password" required="">
                                  <input type="email" name="Email" placeholder="Email Address" required="">
                                  <input type="text" name="Phone" placeholder="Phone Number" required="">
                                  <input type="submit" value="Register">
                                </form>
                              </div>
                              <div class="cta"><a href="#">Forgot your password?</a></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<!-- //bootstrap-pop-up -->
@inject('datatheloai', 'App\Theloai')
@inject('dataquocgia', 'App\Quocgia')
@include('layout_frontend.menu',[$theloai = $datatheloai->GetAll() , $quocgia = $dataquocgia->GetAll()])
@yield('content')
@include('layout_frontend.footer')
<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="/public/frontend/js/move-top.js"></script>
<script type="text/javascript" src="/public/frontend/js/easing.js"></script>
<script src="/public/frontend/js/bootstrap.min.js"></script>
<script defer src="/public/frontend/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/public/frontend/js/myjs.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/public/frontend/js/owl.carousel.js"></script>
<script>
    $(document).ready(function() { 
        $("#owl-demo").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 5,
          itemsDesktop : [640,4],
          itemsDesktopSmall : [414,3]
     
        });
     
    }); 
</script> 
<script type="text/javascript">
    $(document).ready(function() {
          $('.flexslider').flexslider({
            slideshow: false,
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        $('.toggle').click(function(){
          // Switches the Icon
          $(this).children('i').toggleClass('fa-pencil');
          // Switches the forms  
          $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
          }, "slow");
        });
        $().UItoTop({ easingType: 'easeOutQuart' });   
        $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');        
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');       
            }
        );
        // 
        $(".scroll").click(function(event){     
            event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
       // 
    });
</script>
@yield('script')
</body>
</html>