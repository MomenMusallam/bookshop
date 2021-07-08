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
                        <h4 class="page-title">Categories</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{url('admin/category/update') .'/'.$category->id}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PATCH">
                                <div class="card-body">
                                    <h4 class="card-title">Update Category</h4>
                                    @if($errors->all() != null)
                                        @foreach($errors->all() as $massege)
                                            <div class="alert alert-danger" role="alert">
                                                {{$massege}}
                                            </div>
                                        @endforeach
                                    @elseif(session()->has('result'))
                                        @if(session('result'))
                                            <div class="alert alert-success" role="alert">
                                                Category Author success !
                                            </div>

                                        @else
                                            <div class="alert alert-danger" role="alert">
                                                Category did not Added!
                                            </div>
                                        @endif
                                    @elseif(session()->has('checkMassage'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('checkMassage')}}
                                        </div>

                                    @endif
                                    <div class="form-group row">
                                        <label name="categoryTitle" for="catTitle" class="col-sm-3 text-right control-label col-form-label">Category
                                            Title </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="categoryTitle" class="form-control" id="fname"
                                                  value="{{$category->categorie_title}}" placeholder="Enter Category Title ">
                                        </div>
                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
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
