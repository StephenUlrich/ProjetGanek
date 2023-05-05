<!DOCTYPE html>
<html lang="en">
<head>
{{-- Meta --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

{{-- SITE TITLE --}}
<title>Riqoqo - eCommerce 2023</title>
{{-- Favicon Icon --}}
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
{{-- Animation CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">	
{{-- Latest Bootstrap min CSS --}}
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
{{-- Icon Font CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
{{--- owl carousel CSS--}}
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css') }}">
{{-- Magnific Popup CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
{{-- Slick CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
{{-- Style CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

{{-- LOADER --}}
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
{{-- END LOADER --}}

{{-- Home Popup Section --}}
<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="popup_content">
                            <div class="popup-text">
                                <div class="heading_s3 text-center">
                                    <h4>Souscrire et Obtenir jusqu'à 25% de remise!</h4>
                                </div>
                                <p>Souscrire à la newsletter et recevoir des mise à jour sur les nouveaux produits.</p>
                            </div>
                            <form method="post" class="rounded_input">
                            	<div class="form-group">
                                	<input name="email" required type="email" class="form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                	<button class="btn btn-fill-line btn-block text-uppercase btn-radius" title="Subscribe" type="submit">Souscrire</button>
                                </div>
                            </form>
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this popup again!</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
{{-- End Screen Load Popup Section --}} 

{{-- START HEADER --}}
<header class="header_wrap fixed-top header_with_topbar">
	<div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="lng_dropdown mr-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-image="{{ asset('assets/images/eng.png') }}" data-title="English">England</option>
                                <option value='fn' data-image="{{ asset('assets/images/fn.png') }}" data-title="France">France</option>
                                {{--<option value='us' data-image="{{ asset('assets/images/us.png') }}" data-title="United States">United States</option>--}}
                            </select>
                        </div>
                        <div class="mr-3">
                            <select name="countries" class="custome_select">
                                <option value='FCFA' data-title="FCFA">FCFA</option>
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>                                
                            </select>
                        </div>
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-mobile"></i><span>(+225) 05 46 378 989</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="text-center text-md-right">
                       	<ul class="header_list">
                        	{{--<li><a href="/compare"><i class="ti-control-shuffle"></i><span>Compare</span></a></li>--}}
                            <li><a href="/wishlist"><i class="ti-heart"></i><span>Liste de souhaits</span></a></li>
                            <li><a href="/login"><i class="ti-user"></i><span>S'identifier</span></a></li>
                            <li><a href="/signup"><i class="ti-email"></i><span>S'inscrire</span></a></li>{{--i class="bi bi-lock"></i>--}}
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="/">
                    <img class="logo_light" src="{{ asset('assets/images/logo_riqoqo_light.png') }}" alt="logo" />
                    <img class="logo_dark" src="{{ asset('assets/images/logo_riqoqo_dark.png') }}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="nav-link dropdown-toggle active" href="/">Kwaba</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    {{-- Only Furniture1  by Stephen 
                                    <li><a class="dropdown-item nav-link nav_item active" href="index.html">Fashion 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Fashion 2</a></li>--}}

                                    <li><a class="dropdown-item nav-link nav_item" href="/furniture1">RIQOQO</a></li>
                                    
                                    {{-- Only Furniture1 
                                    <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Furniture 2</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-5.html">Electronics 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-6.html">Electronics 2</a></li>--}}
                                </ul>
                            </div>   
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Nous sommes</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item" href="/about">A propos de nous</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="/term-condition">Termes et conditions</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="/login">Se connecter</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="/signup">S'inscrire</a></li>
{{-- 
                                    <li><a class="dropdown-item nav-link nav_item" href="/contact">Contact Us</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="/faq">Faq</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="/404">404 Error Page</a></li>--}}
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Notre Boutique</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-3">
                                                <ul> 
                                                    <li class="dropdown-header">Vêtements & Autres</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shopproduct-parfumgreyflannel">Parfums Grey Flannel</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shopproduct-parfumcollectionprivee">Parfums Collection privée</a></li>
                                                    {{--<li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">Curabitur tempus</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Vivamus in tortor</a></li>--}}
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Emballages</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shopproduct-bocauxplastiques">Bocaux plastiques</a></li>
                                                    {{--<li><a class="dropdown-item nav-link nav_item" href="checkout.html">Etiam ac rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Quisque condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="compare.html">Curabitur laoreet</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Vivamus in tortor</a></li>--}}
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Accessoires</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shopproduct-brossetoillette">Brosse toilette</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shopproduct-hachoirmanuel">Hachoir manuel</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shopproduct-peignechauffant">Peigne chauffant</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shopproduct-plaquedegivrante">Plaque dégivrante</a></li>
                                                    {{--<li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>--}}
                                                </ul>
                                            </li>
                                            {{--<li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Accessories</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                </ul>
                                            </li>--}}
                                        </ul>
                                <div class="d-lg-flex menu_banners">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{ asset('assets/images/menubarner-peigne2en1.png') }}" alt="menu_banner1">
                                            <div class="banne_info">
                                                <h6>10% Off</h6>
                                                <h4>Peigne chauffant</h4>
                                                <a href="/shopproduct-peignechauffant">Acheter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{ asset('assets/images/menubarner-bocauxplastiq.png') }}" alt="menu_banner2">
                                            <div class="banne_info">
                                                <h6>15% Off</h6>
                                                <h4>Bocaux plastiques</h4>
                                                <a href="/shopproduct-bocauxplastiques">Acheter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{ asset('assets/images/menubarner-parfumcollpriv.png') }}" alt="menu_banner3">
                                            <div class="banne_info">
                                                <h6>23% Off</h6>
                                                <h4>Collection privée</h4>
                                                <a href="/shopproduct-parfumcollectionprivee">Acheter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{--<li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu dropdown-reverse">
                                <ul>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Grids</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-three-columns.html">3 columns</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-four-columns.html">4 columns</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-left-sidebar.html">Left Sidebar</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-right-sidebar.html">right Sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-standard-left-sidebar.html">Standard Left Sidebar</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-standard-right-sidebar.html">Standard right Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Masonry</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-three-columns.html">3 columns</a></li>
                                           		<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-four-columns.html">4 columns</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-left-sidebar.html">Left Sidebar</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-right-sidebar.html">right Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Single Post</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single.html">Default</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-left-sidebar.html">left sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-slider.html">slider post</a></li> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-video.html">video post</a></li> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-audio.html">audio post</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">List</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-list-left-sidebar.html">left sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-list-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Shop </a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-9">
                                        <ul class="d-lg-flex">
                                            <li class="mega-menu-col col-lg-4">
                                                <ul> 
                                                    <li class="dropdown-header">Shop Page Layout</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">shop List view</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Shop Load More</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Other Pages</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/shop-cart">Cart</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/checkout">Checkout</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/my-account">My Account</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/wishlist">Wishlist</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/compare.html">compare</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="/order-completed">Order Completed</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Product Pages</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Default</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Thumbnails Left</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <div class="header_banner">
                                            <div class="header_banner_content">
                                                <div class="shop_banner">
                                                    <div class="banner_img overlay_bg_40">
                                                        <img src="{{ asset('assets/images/shop_banner1.jpg') }}" alt="shop_banner"/>
                                                    </div> 
                                                    <div class="shop_bn_content">
                                                        <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                                        <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                                        <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>--}}
                        <li><a class="nav-link nav_item" href="/contact">Nous contacter</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{ asset('assets/images/cart_thamb1.jpg') }}" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{ asset('assets/images/cart_thamb2.jpg') }}" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line btn-radius view-cart">View Cart</a><a href="#" class="btn btn-fill-out btn-radius checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
{{-- END HEADER --}}

{{-- START SECTION BANNER --}}
<div class="banner_section slide_wrap shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg" data-img-src="{{ asset('assets/images/banner-bocauxplastiques-1920x600.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-9 col-10">
                                <div class="banner_content2">
                                    <h6 class="mb-2 mb-sm-3 staggered-animation text-uppercase" data-animation="fadeInDown" data-animation-delay="0.2s">Nouvel arrivage</h6>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Bocaux plastiques</h2>
                                    <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">notre gamme de bocaux et contenants en plastique pour produits de beauté et produits cosmétiques. Tous nos pots et contenants en plastique sont livrés avec leur couvercle. Parfaits pour stocker vos crèmes, gels et masques pour le visage ou pour les cheveux ! Disponibles à l'unité ou en grande quantité.</p>
                                    <a class="btn btn-line-fill btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="fadeInUp" data-animation-delay="0.5s">Acheter maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{ asset('assets/images/banner-plaquedegivrante-1920x600.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-9 col-10">
                                <div class="banner_content2">
                                    <h5 class="mb-2 mb-sm-3 staggered-animation font-weight-light" data-animation="fadeInDown" data-animation-delay="0.2s">50% de remise aujourd'hui!</h5>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Plaque dégivrante</h2>
                                    <a class="btn btn-border-fill btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="fadeInUp" data-animation-delay="0.4s">Acheter maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg" data-img-src="{{ asset('assets/images/banner-peignechauffant2en1-1920x650.png') }}">
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-9 col-10">
                                <div class="banner_content2">
                                    <h5 class="mb-2 mb-sm-3 staggered-animation font-weight-light" data-animation="fadeInDown" data-animation-delay="0.2s">Profitez de l'un des meilleurs produits au rapport qualité-prix disponible sur le marché</h5>
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Peigne chauffant 2 en 1</h2>
                                    <a class="btn btn-border-fill btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="fadeInUp" data-animation-delay="0.4s">Acheter maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators indicators_style2">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
    </div>
</div>
{{-- END SECTION BANNER --}}

{{$slot}}

{{-- START FOOTER --}}
<footer class="footer_dark">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Contact info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>Route du Zoo, Abobo-Dokui, Abidjan</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@riqoqo.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>(+225) 05 46 378 989</p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <ul class="social_icons rounded_social">
                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
        		</div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Liens utiles</h6>
                        <ul class="widget_links">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/faq">FAQ</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Subscribe Our Newsletter</h6>
                        <p>If you want to get an email from us every time we have a new special offer, then sign up here!</p>
                        <div class="newsletter_form rounded_input">
                            <form>
                                <input type="text" required="" class="form-control" placeholder="Enter Email Address">
                                <button type="submit" class="btn-send" name="submit" value="Submit"><i class="icon-envelope-letter"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2023 All Rights Reserved by Inovexial Design</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-md-right">
                        <li><a href="#"><img src="{{ asset('assets/images/visa.png') }}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/discover.png') }}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/master_card.png') }}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/paypal.png') }}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/amarican_express.png') }}" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- END FOOTER --}}

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

{{-- Latest jQuery --}} 
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script> 
{{-- popper min js --}}
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
{{-- Latest compiled and minified Bootstrap --}} 
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script> 
{{-- owl-carousel min js  --}} 
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script> 
{{-- magnific-popup min js  --}} 
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script> 
{{-- waypoints min js  --}} 
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script> 
{{-- parallax js  --}} 
<script src="{{ asset('assets/js/parallax.js') }}"></script> 
{{-- countdown js  --}} 
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script> 
{{-- imagesloaded js --}} 
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
{{-- isotope min js --}} 
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
{{-- jquery.dd.min js --}}
<script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
{{-- slick js --}}
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
{{-- elevatezoom js --}}
<script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
{{-- scripts js --}} 
<script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>
</html>