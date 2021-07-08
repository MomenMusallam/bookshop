@extends('bookszone.layouts.main_layout')
@section('pageContent')

    <!-- End Search Popup -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
{{--                    <div class="bradcaump__inner text-center">--}}
{{--                        <h2 class="bradcaump-title">Shop Single</h2>--}}
{{--                        <nav class="bradcaump-content">--}}
{{--                            <a class="breadcrumb_item" href="index.html">Home</a>--}}
{{--                            <span class="brd-separetor">/</span>--}}
{{--                            <span class="breadcrumb_item active">Shop Single</span>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start main Content -->
    <div class="maincontent bg--white pt--80 pb--55">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="wn__single__product">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="wn__fotorama__wrapper">
                                    <div class="fotorama wn__fotorama__action" data-nav="thumbs">

                                            <a href="1.jpg"><img src="{{$book->image}}" alt=""></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product__info__main">
                                    <h1></h1>
                                    <div class="product-info-stock-sku d-flex">
                                        <p>Edition No :<span>{{$book->edition_No}}</span></p>
                                        <p>Year Of Release :<span> {{$book->year_of_release}}</span></p>
                                    </div>
                                    <div class="product-reviews-summary d-flex">

                                        <div class="reviews-actions d-flex">

                                        </div>
                                    </div>


                                    <div class="price-box">
                                        <span>{{$book->title}}</span>
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <span>Author : {{$book->author->name}}</span>
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <span>Publishing House : {{$book->PublishingHouse->Phousename}}</span>
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <span>Category : {{$book->category->categorie_title}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                    <div class="shop__sidebar">
                        <aside class="wedget__categories poroduct--cat">
                            <h3 class="wedget__title">Product Categories</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{ url('show/all/books/category') . '/' . $category->id}}">{{$category->categorie_title}}</a></li>
                                @endforeach

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
