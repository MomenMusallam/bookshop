@extends('bookszone.layouts.main_layout')
    @section('pageContent')




    <div class="ht__bradcaump__area bg-image--4 brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        <div class="slide animation__style10  align__center--left">
            <div class="container">

                <div class="row">

                    <div class="slider__content">

                        <div class="contentbox">
{{--                            <h2>Think before you <span>speak </span></h2>--}}
{{--                            <h2>Read before  <span>you think </span></h2>--}}
{{--                            <!-- <h2>from <span>Here </span></h2> -->--}}
{{--                            <a class="shopbtn" href="#">Swipe the screen down</a>--}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- End Bradcaump area -->
    <section class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                                <div class="shop__list nav justify-content-center" role="tablist">

                                </div>
                                <p>Showing 1–12 of 40 results</p>
                                <div class="orderby__wrapper">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab__container">
                        <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                            <div class="row">


                                <!-- Start Single Product -->
                                @foreach($books as $book)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product">
                                            <div class="product__thumb">
                                                <a class="first__img" href="{{url('view/book/').'/'.  $book->id}}"><img src="{{url($book->image)}}" alt="product image"></a>
{{--                                                <ul class="prize position__right__bottom d-flex">--}}
{{--                                                    <li>{{$book->title}}</li>--}}
{{--                                                </ul>--}}
                                                <div class="action">
                                                    <div class="actions_inner">
                                                        {{--                                                        <ul class="add_to_links">--}}
                                                        {{--                                                            <li><a class="cart" href="cart.html"></a></li>--}}
                                                        {{--                                                            <li><a class="wishlist" href="wishlist.html"></a></li>--}}
                                                        {{--                                                            <li><a class="compare" href="compare.html"></a></li>--}}
                                                        {{--                                                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"></a></li>--}}
                                                        {{--                                                        </ul>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <h4><a href="{{url('view/book') .'/'. $book->id}}">{{$book->title}}</a></h4>
                                                {{--                                                <ul class="rating d-flex">--}}
                                                {{--                                                    <li class="on"><i class="fa fa-star-o"></i></li>--}}
                                                {{--                                                    <li class="on"><i class="fa fa-star-o"></i></li>--}}
                                                {{--                                                    <li class="on"><i class="fa fa-star-o"></i></li>--}}
                                                {{--                                                    <li><i class="fa fa-star-o"></i></li>--}}
                                                {{--                                                    <li><i class="fa fa-star-o"></i></li>--}}
                                                {{--                                                </ul>--}}
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                                <!-- End Single Product -->
                                <!-- End Single Product -->
                            </div>
{{--                            <ul class="wn__pagination">--}}
{{--                                <li class="active"><a href="#">1</a></li>--}}
{{--                                <li><a href="#">2</a></li>--}}
{{--                                <li><a href="#">3</a></li>--}}
{{--                                <li><a href="#">4</a></li>--}}
{{--                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Shop Page -->

    <!-- End Shop Page -->
    <!-- Footer Area -->
    @endsection
