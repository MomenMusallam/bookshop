@extends('bookszone.layouts.main_layout')
    @section('pageContent')


    <div class="ht__bradcaump__area bg-image--6 brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        <div class="slide animation__style10  align__center--left">
            <div class="container">

                <div class="row">

                    <div class="slider__content">

                        <div class="contentbox">
                            <h2>Think before you <span>speak </span></h2>
                            <h2>Read before  <span>you think </span></h2>
                            <!-- <h2>from <span>Here </span></h2> -->
                            <a class="shopbtn" href="#">Swipe the screen down</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- End Bradcaump area -->
    <!-- Start Shop Page -->
    <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                    <div class="shop__sidebar">
                        <aside class="wedget__categories poroduct--cat">
                            <h3 class="wedget__title">Product Categories</h3>
                            <ul>
{{--                                <li><a href="#">Biography <span>(3)</span></a></li>--}}
                                @foreach($categories as $category)
                                    <li><a href="{{ url('/show/all/books/category') . '/' . $category->id}}">{{$category->categorie_title}}</a></li>
                                @endforeach
                            </ul>
                        </aside>

                    </div>
                </div>
                <div class="col-lg-9 col-12 order-1 order-lg-2">
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

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <h4><a href="{{url('view/book') .'/'. $book->id}}">{{$book->title}}</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- End Single Product -->
                            </div>

                        </div>
                        <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
                            <div class="list__view__wrapper">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
    <!-- Footer Area -->
    @endsection
