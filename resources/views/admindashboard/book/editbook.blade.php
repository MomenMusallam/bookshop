@extends('admindashboard.layouts.form_layout')
@section('formContent')
    <div id="main-wrapper">
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Books</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{ URL('admin/book/update') . '/' .$book->id}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }} ">
                                <input type="hidden" name="_method" value="PUT">

                                <div class="card-body">
                                    <h4 class="card-title">Add Book</h4>
                                    @if($errors->all() != null)
                                        @foreach($errors->all() as $massege)
                                            <div class="alert alert-danger" role="alert">
                                                {{$massege}}
                                            </div>
                                        @endforeach
                                    @elseif(session()->has('result'))
                                        @if(session('result'))
                                            <div class="alert alert-success" role="alert">
                                                Update Book success !
                                            </div>

                                        @else
                                            <div class="alert alert-danger" role="alert">
                                                Book did not  Updated!
                                            </div>
                                        @endif
                                    @elseif(session()->has('checkMassage'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('checkMassage')}}
                                        </div>

                                    @endif
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Book Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="fname" value="{{$book->title}}" placeholder="Enter Book Title" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="yearReles" class="col-sm-3 text-right control-label col-form-label">Year Of Release</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="yearOfRelease" class="form-control" id="lname" value="{{$book->year_of_release}}" placeholder="Enter Year Of Release" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="EditionNo" class="col-sm-3 text-right control-label col-form-label">Edition Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="editionNumber" class="form-control" id="lname" value="{{$book->edition_No}}" placeholder="Enter Edition Number" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Author</label>
                                        <div class="col-md-4">
                                            <select name="author"  class="select2 form-control custom-select" style="width: 100%; height:36px;" >
                                                <option>Select Author</option>
                                                @foreach($authors as $author)
                                                    @if($book->author->id == $author->id)
                                                        <option value="{{$author->id}}" selected>{{$author->name}}</option>
                                                    @else
                                                        <option value="{{$author->id}}">{{$author->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Publishing House</label>
                                        <div class="col-md-4">
                                            <select name="publishingHouse"  class="select2 form-control custom-select" style="width: 100%; height:36px;" >
                                                <option>Select Publishing House</option>
                                                @foreach($publishinghouses as $publishinghouse)
                                                    @if($book->publishingHouse->id == $publishinghouse->id)
                                                        <option value="{{$publishinghouse->id}}" selected>{{$publishinghouse->Phousename}}</option>
                                                    @else
                                                        <option value="{{$publishinghouse->id}}">{{$publishinghouse->Phousename}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Category</label>

                                        <div class="col-md-9">
                                            <select name="category" class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;" >
                                                @foreach($categories as $Category)
                                                    @if($book->Category->id == $Category->id)
                                                        <option value="{{$Category->id}}" selected>{{$Category->categorie_title}}</option>
                                                    @else
                                                        <option value="{{$Category->id}}">{{$Category->categorie_title}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label for="yearReles" class="col-sm-3 text-right control-label col-form-label">Book Cover</label>
                                        <div class="col-sm-4">
                                            <img src="{{url($book->image)}}" width="160" height="220">
                                            <input type="file" name="image" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

@endsection
