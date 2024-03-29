<!DOCTYPE HTML>
<html>
<head>
<title>NL FASHTION | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('css/style10.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylemenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/glyphicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider-product.css')}}">
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/simple-rating.css')}}" rel="stylesheet"> <!-- rating style css --> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/detail1.css')}}">
    <link rel="stylesheet" href="{{asset('css/etalage.css')}}">
    <link rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
        <script type="text/javascript">
            $(document).ready(function() {
                $(".dropdown img.flag").addClass("flagvisibility");
                $(".dropdown dt a").click(function() {
                    $(".dropdown dd ul").toggle();
                });
                            
                $(".dropdown dd ul li a").click(function() {
                    var text = $(this).html();
                    $(".dropdown dt a span").html(text);
                    $(".dropdown dd ul").hide();
                    $("#result").html("Selected value is: " + getSelectedValue("sample"));
                });
                            
                function getSelectedValue(id) {
                    return $("#" + id).find("dt a span.value").html();
                }
                $(document).bind('click', function(e) {
                    var $clicked = $(e.target);
                    if (! $clicked.parents().hasClass("dropdown"))
                        $(".dropdown dd ul").hide();
                });
                $("#flagSwitcher").click(function() {
                    $(".dropdown img.flag").toggleClass("flagvisibility");
                });
            });
        </script>
    <!-- start menu -->     
    <link href="{{asset('css/megamenu1.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
    <script>
        $(document).ready(function(){$(".megamenu").megamenu();});
    </script>
    <!-- end menu -->
    <!----details-product-slider--->
        <!-- Include the Etalage files -->
            <link rel="stylesheet" href="{{asset('css/etalage.css')}}">
        <!-- Include the Etalage files -->
        <!----//details-product-slider--->  
    <!-- top scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
</head>
<body>
    <header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo">
                    <h1><a href="{{route('home-user')}}"><img src="{{asset('images/1234.png')}}" style="width: 250px; height: 120px;" alt=""></a></h1>
                </div>
                <div class="search-form mx-md-auto">
                    <div class="form-w3layouts-grid">
                        <form action="{{route('search-user')}}" method="get" class="newsletter">
                            @csrf
                            <input class="search" id="liveSearch"  type="text" placeholder="Seach ..." required="" name="search" autocomplete="off" style="position: relative;">
                            {{-- <ul id="getLiveSearch" style="z-index: 1; background-color: #fff; position: absolute; top: 48%; width: 400px;font-size: 11px;">
                                <li  style="border-bottom: 1px dotted #ccc;padding-bottom: 10px;">
                                    <div style="float: left; width: 20%;">
                                        <a href=""><img src="{{asset('images/product/ao1.jpg')}}" alt="a" ></a>
                                    </div>
                                    <div>
                                        <br><a href="" style="color: #000;">AO CROPTOP</a>
                                        <br><span><del style="color: #555;">350,000 ₫</del></span>
                                        <span style="color: #FFAF02; font-size: 13px; margin-right: 10px;">300,000 ₫</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li  style="border-bottom: 1px dotted #ccc; padding-bottom: 10px;">
                                    <div style="float: left; width: 20%;">
                                        <a href=""><img src="{{asset('images/product/ao1.jpg')}}" alt="a" ></a>
                                    </div>
                                    <div>
                                        <br><a href="" style="color: #000;">AO CROPTOP</a>
                                        <br><span><del style="color: #555;">350,000 ₫</del></span>
                                        <span style="color: #FFAF02; font-size: 13px; margin-right: 10px;">300,000 ₫</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul> --}}
                        </form>
                    </div>
                </div>
                <div class="forms mt-md-0 mt-2" style="padding-top: 15px;">
                    @if(Auth::check())
                        <div style="margin-top: 5px; margin-right: 10px; float: left;">
                            <div class="commenterImage">
                                <img src="{{asset(Auth::user()->avatar)}}" />
                            </div>
                            <div class="btn-group" >
                                <button type="hidden" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="background: #fff; border: none;">
                                    <span style="font-weight: bold; color: teal;">{{ Auth::user()->name }}</span>
                                </button>
                                <ul class="dropdown-menu" style="background: #fff;">
                                    <li><a href="{{route('profile-user')}}" style="color: #a51890; border-bottom: 1px solid #ccc">User profile</a></li>
                                    <li><a href="{{route('home-admin')}}" style="color: #a51890; border-bottom: 1px solid #ccc">Administrator</a></li>
                                    <li><a href="{{route('logout')}}" style="color: #a51890;">Logout</a></li>  
                                </ul>
                            </div>
                        </div>
                    @else
                        <a href="{{route('login')}}" class="btn" style="font-size: 18px"><span class="fa fa-user-circle-o"></span> Login</a>
                        <a href="{{route('register-user')}}" class="btn" style="font-size: 18px"><span class="fa fa-pencil-square-o"></span> Register</a>
                    @endif
                    <ul class="icon2 sub-icon2 profile_img"  id="getCart">
                        <li>
                            <a class="active-icon" href="{{route('shoppingCart-user')}}"  style="margin-top: 1%; color: #a51890; font-size: 23px;position: relative;">
                            <i class="fas fa-shopping-cart" style="margin-top: 9px"></i><span style="border-radius: 50px;padding: 1px 5px;background:#ff6517;color:#fff;font-size: 15px;position: absolute; top: 0px; right:-7px;font-size: 13px">{{Cart::getTotalQuantity()}}</span>
                            </a>
                            <ul class="sub-icon2 list">
                                <li>
                                    <div class="row" style="margin-bottom: 20px">
                                        @foreach(Cart::getContent() as $item)
                                            <?php $size = App\Size::select('name')->where('id',$item->attributes->size_id)->first(); 
                                            ?>
                                            <div class="row" style="padding: 10px">
                                                <div class="col-lg-4">
                                                <img src="{{asset($item->attributes->image)}}" alt="" style="width: 80px">
                                                </div>
                                                <div class="col-lg-8" style="padding-right: 20px; line-height: 15px">
                                                    <span style="font-size: 12px;">{{$item->name}}</span>
                                                    <div class="col-lg-5">
                                                        <br><span>x{{$item->quantity}} </span>
                                                        <span style="background: url(//theme.hstatic.net/1000243581/1000361905/14/bg-variant-checked.png?v=131) no-repeat right bottom #fff; padding:3px 5px; border: 1px solid #ccc;">{{$size->name}}</span> 
                                                    </div>
                                                    <div class="col-lg-7" style="line-height: 10px">
                                                        <br><span style="font-size: 12px;color:#ed4e4e;">{{ number_format($item->price*$item->quantity,0)}} ₫</span>
                                                        <a href="{{route('delete-cart-user',$item->id)}}" class="glyphicon glyphicon-remove" style="color:red;text-decoration:none;"></a>
                                                        <button class="glyphicon glyphicon-remove deleteCart" data-idcart="{{$item->id}}"  style="color:red;text-decoration:none;border: none;background: #fff;"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    <div class="row" style="text-align: left;">
                                        <span style="margin-left: 40px; margin-top: 20px; color:brown; font-weight: bold;">Total:  <span style="font-size: 15px;color: #ed4e4e;margin-left: 40px" >{{number_format(Cart::getTotal())}} ₫</span></span>
                                    </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px">
                                        <a href="{{route('shoppingCart-user')}}" style="color: #fff;background: darkorange;text-decoration: none;padding: 7px 20px;margin-right: 10px;border-radius: 0;margin-left: 30px;">View Card</a>
                                        @if(Cart::getTotal() > 0)
                                        <a href="{{route('show-checkout-user')}}" style="color: #fff;background: darkorange;text-decoration: none;padding: 7px 20px;border-radius: 0">Pay</a>
                                        @else
                                        <a href="{{route('shoppingCart-user')}}" style="color: #fff;background: darkorange;text-decoration: none;padding: 7px 20px;border-radius: 0">Pay</a>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <nav class="text-center menutop" id="menuTop" style="margin-top:0;padding-bottom: 15px;">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu" >
                    <li class="active">
                        <a href="{{ route('home-user') }}" style="text-decoration: none;">Home</a>
                    </li>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ asset('san-pham/'.$category->id.'/'.$category->name) }}" style="text-decoration: none;">{{ $category->name }}</a>
                        </li>
                    @endforeach
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Brand <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#" style="text-decoration: none;">Brand <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul style="z-index: 1;">
                            @foreach($brands as $brand)
                            <li><a href="{{ asset('san-pham/'.$brand->id.'/'.$brand->name) }}" class="drop-text" style="text-decoration: none;">{{ $brand->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li><a href="{{ route('list-all-product') }}" style="text-decoration: none;">Shop</a></li>
                    <li><a href="events.html" style="text-decoration: none;">Events</a></li>
                    <li><a href="contact.html"  style="text-decoration: none;">Contact</a></li>
                </ul>
            </nav> --}}
            <!-- //nav -->
        </div>
    </header>
  
    @yield('content')
    {{-- <div class="container-fluid divfooter" >    
        <div class="container divfooter">
            <div class="col-sm-3">
                <h4 class="textbot">CONTACT</h4>
                <p class="textbot1">82 Bui Van Thai, Phường Hòa Hải, Quận Ngũ Hành Sơn, Tp. Đà Nẵng</p>
                <p class="textbot1">Phone: 0902 438  246 - DangNam09</p>
                <p class="textbot1">Email: namdangnguyen09@gmail.com</p>
            </div>
            <div class="col-sm-3">
                <h4 class="textbot">SUPPORTING POLICIES</h4>
                <p><a href="index.php">Index</a></p>
                <p><a href="@">Product</a></p>
                <p><a href="@">About</a></p>
                <p><a href="@">Table Size</a></p>
                <p><a href="@">Hướng dẫn đặt hàng</a></p>
                <p style="color: #fff;">Design by Nam - Linh IT 2019</p>
            </div>
            <div class="col-sm-3">
                <h4 class="textbot">LINK</h4>
                <p class="textbot1"><a href="http://facebook.com/rooneynam91" target="_blank">Hãy kết nối với chúng tôi</a></p>
            </div>
            <div class="col-sm-3">
                <h4 class="textbot">SIGN UP FOR INFORMATION</h4>
                <iframe src="http://shopfashion.runtime.vn/" width="340" height="260px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    </div> --}}
    <div class="footer_agileinfo_w3">
            <div class="footer_inner_info_w3ls_agileits">
                <div class="col-md-3 footer-left">
                    <h2><a href="{{url('/')}}"><span>NL</span>Fashtion </a></h2>
                    <p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                    <ul class="social-nav model-3d-0 footer-social social two">
                        <li>
                            <a href="https://www.facebook.com/rooneynam91" class="facebook" target="blank">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/namdangnguyen09" class="twitter" target="blank">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/namdangnguyen09" class="instagram" target="blank">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 footer-right">
                <div class="sign-grds">
                    <div class="col-md-4 sign-gd">
                        <h4>Our <span>Information</span> </h4>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="404.html">Services</a></li>
                            <li><a href="">Short Codes</a></li>
                            {{-- <li><a href="{{route('contact')}}">Contact</a></li> --}}
                        </ul>
                    </div>
    
                    <div class="col-md-5 sign-gd-two">
                        <h4>Store <span>Information</span></h4>
                        <div class="address">
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Phone Number</h6>
                                    <p>+1 234 567 8901</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Email Address</h6>
                                    <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Location</h6>
                                    <p>Broome St, NY 10002,California, USA.
    
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 sign-gd flickr-post">
                        <h4>Flickr <span>Posts</span></h4>
                        <ul>
                            <li><a href="#"><img src="{{asset('images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
                            <li><a href="#"><img src="{{asset('images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <!-- end footer -->
    <script type="text/javascript">
        jQuery(document).ready(function($){
            //lay vị trí hiện tại của menu cách top x px
            pos = $("#menuTop").position();
            $(window).scroll(function(){
                var possScroll = $(document).scrollTop();
                if (parseInt(possScroll) > parseInt(pos.top)) {
                    $("#menuTop").addClass('navbar-fixed-top nentrongsuot');
                }else{
                    $("#menuTop").removeClass('navbar-fixed-top nentrongsuot');
                }
            });
        });
    </script>
    <script>
    $(document).ready(function(){
        //live search ajax
        $('#liveSearch').on('keyup',function(){
                var search = $(this).val();
                if (search == "") {
                    $('#getLiveSearch').html('');
                   
                }else{
                     $.ajax({
                        type: 'get',
                        url: '{{ route('live-search-user') }}',
                        data: {
                            search: search,
                        },
                        success:function(data){
                            $('#getLiveSearch').html(data);
                        }
                    });
                }
               
            });

        $('.deleteCart').click(function(event) {
            //event.preventDefault();   
            var cart_id =  $(this).attr('data-idcart'); 
            //alert(cart_id);
            
            $.ajax({
                url: '{{route('deleteAjax-cart-user')}}',
                type: 'GET',
                data: {                     
                    cart_id:cart_id,
                                },
                success: function(data) { 
                    $("#getCart").html(data);
                    //location.reload();
                },
                error: function($error) {
                    alert('Thao tác fail!');
                }
            })
        });     
    });
    </script>
    <script src="{{asset('js/simple-rating.js')}}"></script>
</body>
</html>