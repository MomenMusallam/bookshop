<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-7 col-lg-2">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('bookszonestyle/images/logo/logo.png') }}" alt="logo images">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start title">
                        <li class="drop"><a href="{{url('/')}}">BOOKS</a></li>
                        <li class="drop "><a >AUTHORS</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                    <li class="title ">AUTHORS</li>
                                    @foreach($authors as $author)
                                        <li><a href="{{ url('/show/all/books/author') . '/' . $author->id}}">{{$author->name}}</a></li>
                                    @endforeach


                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a >BUBLISHING HOUSES</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                    <li class="title">BUBLISHING HOUSES</li>
                                    @foreach($publishinghouses as $publishinghouse)
                                        <li><a href="{{ url('/show/all/books/publishinghouse') . '/' . $publishinghouse->id}}">{{$publishinghouse->Phousename}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a>CATEGORIES</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                    <li class="title">CATEGORIES</li>
                                    @foreach($categories as $category)
                                        <li><a href="{{ url('/show/all/books/category') . '/' . $category->id}}">{{$category->categorie_title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>


                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <li class="shop_search"><a class="search__active" href="#"></a></li>
                    <li class="wishlist"><a href="#"></a></li>

                    <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                        <div class="searchbar__content setting__block">

                            @if($user = Auth::user() )
                                <span class="currency-trigger"><a href="{{ url('/admin') }}">Admin Dashboard</a></span>
                                <span class="currency-trigger"><a class="dropdown-item" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
{{--                            {{ __('Logout') }}--}}
                            <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>



                            @else
                                <span class="currency-trigger"><a href="{{url('/login')}}">Login</a></span>
                            @endif

{{--                            </strong>--}}
                            <div class="content-inner">
                                <div class="switcher-currency">

                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">

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
                        <li><a href="index.html">BOOKS</a>
                        </li>
                        <li><a href="#">CATEGORIES
                            </a>
                            <ul>
                                <li><a href="about.html">About Page</a></li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-three-column.html">Portfolio 3 Column</a></li>
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
                        <li><a href="shop-grid.html">AUTHOR</a>
                            <ul>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-list.html">Shop List</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-no-sidebar.html">Shop No sidebar</a></li>
                                <li><a href="single-product.html">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">BUBLISHING HOUSES</a>
                            <ul>
                                <li><a href="blog.html">BUBS</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
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

<div class="box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="{{url('search/book')}}" method="get">
        <div class="field__search">
            <input type="text" placeholder="Search entire store here..." name="serach">
            <div class="action">
                <input type="submit" class="zmdi zmdi-search" value="Search">

            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->
<!-- Start Bradcaump area -->
