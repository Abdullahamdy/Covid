<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset("frontend/css/bootstrap.min.css")}}">
	<link rel="stylesheet" href="{{asset("frontend/css/plugins.css")}}">
	<link rel="stylesheet" href="{{asset("frontend/style.css")}}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset("frontend/css/custom.css")}}">

	<!-- Modernizer js -->
	<script src="{{asset("frontend/js/vendor/modernizr-3.5.0.min.js")}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    .woocommerce button[name="update_cart"],
.woocommerce input[name="update_cart"] {
	display: none;
}
</style>
</head>

<body>
    <header id="wn__header" class="header__area header__absolute sticky__header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset("frontend/images/logo/logo.png")}}" alt="logo images">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <nav class="mainmenu__nav">
                        <ul class="meninmenu d-flex justify-content-start">
                            <li class="drop with--one--item"><a href="index.html">Home</a></li>
                            <li class="drop"><a href="#">Shop</a>
                                <div class="megamenu mega03">
                                    <ul class="item item03">
                                        <li class="title">Shop Layout</li>
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Shop Page</li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="error404.html">404 Page</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Bargain Books</li>
                                        <li><a href="shop-grid.html">Bargain Bestsellers</a></li>
                                        <li><a href="shop-grid.html">Activity Kits</a></li>
                                        <li><a href="shop-grid.html">B&N Classics</a></li>
                                        <li><a href="shop-grid.html">Books Under $5</a></li>
                                        <li><a href="shop-grid.html">Bargain Books</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop"><a href="shop-grid.html">Books</a>
                                <div class="megamenu mega03">
                                    <ul class="item item03">
                                        <li class="title">Categories</li>
                                        <li><a href="shop-grid.html">Biography </a></li>
                                        <li><a href="shop-grid.html">Business </a></li>
                                        <li><a href="shop-grid.html">Cookbooks </a></li>
                                        <li><a href="shop-grid.html">Health & Fitness </a></li>
                                        <li><a href="shop-grid.html">History </a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Customer Favourite</li>
                                        <li><a href="shop-grid.html">Mystery</a></li>
                                        <li><a href="shop-grid.html">Religion & Inspiration</a></li>
                                        <li><a href="shop-grid.html">Romance</a></li>
                                        <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                                        <li><a href="shop-grid.html">Sleeveless</a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Collections</li>
                                        <li><a href="shop-grid.html">Science </a></li>
                                        <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                                        <li><a href="shop-grid.html">Self-Improvemen</a></li>
                                        <li><a href="shop-grid.html">Home & Garden</a></li>
                                        <li><a href="shop-grid.html">Humor Books</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop"><a href="shop-grid.html">Kids</a>
                                <div class="megamenu mega02">
                                    <ul class="item item02">
                                        <li class="title">Top Collections</li>
                                        <li><a href="shop-grid.html">American Girl</a></li>
                                        <li><a href="shop-grid.html">Diary Wimpy Kid</a></li>
                                        <li><a href="shop-grid.html">Finding Dory</a></li>
                                        <li><a href="shop-grid.html">Harry Potter</a></li>
                                        <li><a href="shop-grid.html">Land of Stories</a></li>
                                    </ul>
                                    <ul class="item item02">
                                        <li class="title">More For Kids</li>
                                        <li><a href="shop-grid.html">B&N Educators</a></li>
                                        <li><a href="shop-grid.html">B&N Kids' Club</a></li>
                                        <li><a href="shop-grid.html">Kids' Music</a></li>
                                        <li><a href="shop-grid.html">Toys & Games</a></li>
                                        <li><a href="shop-grid.html">Hoodies</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop"><a href="#">Pages</a>
                                <div class="megamenu dropdown">
                                    <ul class="item item01">
                                        <li><a href="about.html">About Page</a></li>
                                        <li class="label2"><a href="portfolio.html">Portfolio</a>
                                            <ul>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="error404.html">404 Page</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="team.html">Team Page</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop"><a href="blog.html">Blog</a>
                                <div class="megamenu dropdown">
                                    <ul class="item item01">
                                        <li><a href="blog.html">Blog Page</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </div>
                            </li>
                           @auth


                            <form method="post" action="/logout">
                                @csrf
                            <li><button type="submit">logout</button></li>
                        </form>
                        @endauth

                        </ul>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                        <li class="shop_search"><a class="search__active" href="#"></a></li>
                        <li class="wishlist"><a href="#"></a></li>
                        @inject('cart','App\Models\Cart' )
                        @php
                            $carts = $cart->where('user_id',Auth::id())
                        @endphp

                        <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">{{$carts->count()}} </span></a>
                            <!-- Start Shopping Cart -->
                            <div class="block-minicart minicart__active">
                                <div class="append_item minicart-content-wrapper">
                                    <div class="micart__close">
                                        <span>close</span>
                                    </div>
                                    <div class="items-total d-flex justify-content-between">
                                        <span>3 items</span>
                                        <span>Cart Subtotal</span>
                                    </div>
                                    <div class="total_amount text-right">
                                        <span>$66.00</span>
                                    </div>
                                    <div class="mini_action checkout">
                                        <a class="checkout__btn" href="cart.html">Go to Checkout</a>
                                    </div>


                                    @foreach ($carts->get() as $model)


                                    <div class="single__items" data-basket-id="{{$model->products->id}}">
                                        <div class="miniproduct">
                                            <div class="item01 d-flex">
                                                <div class="thumb">
                                                    <a href="product-details.html"><img src="{{asset("Attachments/products/".$model->products->image[0]->filename)}}" alt="product images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6><a href="product-details.html">{{$model->name}}</a></h6>
                                                    <span class="prize">${{$model->products->price}}</span>
                                                    <div class="product_prize d-flex justify-content-between">
                                                        <span class="qun">Qty: {{$model->qutit}}</span>
                                                        <ul class="d-flex justify-content-end">
                                                            <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="mini_action cart">
                                        <a class="cart__btn" href="{{url('edit-cart')}}">View and edit cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Shopping Cart -->
                        </li>
                        <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                            <div class="searchbar__content setting__block">
                                <div class="content-inner">
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Currency</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <span class="currency-trigger">USD - US Dollar</span>
                                                <ul class="switcher-dropdown">
                                                    <li>GBP - British Pound Sterling</li>
                                                    <li>EUR - Euro</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Language</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <span class="currency-trigger">English01</span>
                                                <ul class="switcher-dropdown">
                                                    <li>English02</li>
                                                    <li>English03</li>
                                                    <li>English04</li>
                                                    <li>English05</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Select Store</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <span class="currency-trigger">Fashion Store</span>
                                                <ul class="switcher-dropdown">
                                                    <li>Furniture</li>
                                                    <li>Shoes</li>
                                                    <li>Speaker Store</li>
                                                    <li>Furniture</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>My Account</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <span><a href="#">Compare Product</a></span>
                                                    <span><a href="#">My Account</a></span>
                                                    <span><a href="#">My Wishlist</a></span>
                                                    <span><a href="#">Sign In</a></span>
                                                    <span><a href="#">Create An Account</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class="row d-none">
                <div class="col-lg-12 d-none">
                    <nav class="mobilemenu__nav">
                        <ul class="meninmenu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Page</a></li>
                                    <li><a href="portfolio.html">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="error404.html">404 Page</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="team.html">Team Page</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-grid.html">Shop</a>
                                <ul>
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none">
            </div>
            <!-- Mobile Menu -->
        </div>
    </header>
@yield('content')
{{-- $products = Product::all();
$carts = Cart::where('user_id',Auth::id())->get();  --}}
{{-- @inject('product', 'App\Models\Products')
@inject('carts', 'App\Models\Cart') --}}



    <script src="{{asset("frontend/js/vendor/jquery-3.2.1.min.js")}}"></script>
	<script src="{{asset("frontend/js/popper.min.js")}}"></script>
	<script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("frontend/js/plugins.js")}}"></script>
	<script src="{{asset("frontend/js/active.js")}}"></script>
<script>
    $(document).on('click','.addwishlist',function(e){
        e.preventDefault();
        $.ajax({
            headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
            type:'post',
            url:"{{Route('stor.wishlist')}}",
            data:{
                'productId': $(this).attr('data-product-id'),
            },
            success:function(data){

            }

        })

    });


    $(document).on('click','.addshopptincart',function(e){
        e.preventDefault();
        $.ajax({
            headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
            type:'post',
            url:"{{Route('stor.shoppingcart')}}",
            data:{
                'productId': $(this).attr('data-product-id'),
            },
            success:function(data){

                if(!data['error']){
                   var dataAppend = data.data;
                   var img = dataAppend.image[0].filename;
                   var qut = $('.product_qun').text();
                   $('.product_qun').empty();
                   $('.product_qun').text(++qut);
                   $('.append_item').append(
                      `<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="{{asset('Attachments/products/${img}')}}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">${dataAppend.name}</a></h6>
														<span class="prize">${dataAppend.price}</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: ${data.cart.qutit}</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>


											</div>
										</div>
                                        `
                   )



            }



            }

        })

    });






    //AJAX SEARCH

 $(document).ready(function(){
     $('.search-input').on('keyup',function(){
         var _q = $(this).val()
         if(_q.length>=3){
             $.ajax({
                 url:"{{url('productsearch')}}",
                 data:{
                     q:_q,
                 },
                 dataType:'json',
                 beforeSend:function(){
                     $(".search-result").html("<a href= '' class='list-group-item'>loading...</a>")
                 },
             success:function(res){



                var _html = '';
                $.each(res.data,function(index,data){
                   var img = data.image[0].filename;
                    _html +=

`
<div class="col-lg-3 col-md-4 col-sm-6 col-12 h-25" >
<div class="furniture--4  row mt--50"style=">
<div class="col-lg-2 col-md-4 col-sm-6 col-6">
<div class="product product__style--3" style="display:inline" >
                    <div class="product__thumb"style="display:inline" hight="100px">
                        <a class="first__img" href="{{url('products-details/${data.id}')}}" style=""><img height="230px"  src="{{asset('Attachments/products/${img}')}}" alt="product image"></a>
                        <a class="second__img animation1" href="single-product.html"><img src="{{asset("fontend/images/books/9.jpg")}}" alt="product image"></a>
                        <div class="hot__box">
                            <span class="hot-label">BEST SALER</span>
                        </div>
                    </div>
                    <div  class="product__content content--center content--center">
                        <h4 style="color:white"><a href="" style="color:white">${data.name}</a></h4>
                        <ul class="prize d-flex">
                            <li>$50.00</li>
                            <li class="old_prize">$35.00</li>
                        </ul>
                        <div class="action">
                            <div  class="actions_inner mr-5">
                                <ul class="add_to_links inline">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                    <li><a class="wishlist addshopptincart" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare addwishlist" href="#"  ><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__hover--content">
                            <ul class="rating d-flex">
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>


                `
                    // '<a class= "list-group-item"href="http://127.0.0.1:8000/product-details/'+data.id +'">'+data.name+'</a>';

                });
                $(".search-result").html(_html);
             },
             });
         }
     })
 });

var iprice = document.getElementsByClassName('PPRICE');
var iqtit = document.getElementsByClassName('QTY');
var itotal = document.getElementsByClassName('TOTAL');


function subTotal(){

    for(i = 0; i < iprice.length; i++){
        itotal[i].value = (iprice[i].value) * (iqtit[i].value);


    }

}
subTotal();

$('.buttromve').on('click',function(e){
    var thetr =$(this).closest('tr');
var theid = $(this).closest('tr').attr('id');


    var idbasket = document.querySelector(`[data-basket-id='${theid}']`);
    e.preventDefault();

   $.ajax({
            headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
            type:'post',
            url:"{{Route('delete.shoppingcart')}}",
            data:{
                'cart_id':  $(this).closest('tr').attr('id'),
            },
            success:function(data){
                if(data['success']){
                var qut = $('.product_qun').text();
                $('.product_qun').empty();
                $('.product_qun').text(--qut);
                 idbasket.remove();
                 thetr.remove();
                }


             },
             });


   });


//    $('.QTY').on('change',function(){
//        var qut = $(this).val();
//        var _tr =  $(this).closest('tr').attr('id');
//        $.ajax({
//             headers: {
//      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//    },
//             type:'post',
//             url:"{{Route('update.quntity')}}",
//             data:{
//                 'qunti':qut,
//                 '_id':_tr,

//             },
//             success:function(data){
//                 if(!data['success']){

//                 }


//              },
//              });

//    })

</script>
</body>
</html>
