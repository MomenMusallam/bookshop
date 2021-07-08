@extends('admindashboard.layouts.table_layout')
@section('tableContent')

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
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Static Table</h5>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">View Books</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $num = 1;
                                @endphp
                                    @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{$num++}}</th>
                                            <td>{{$category->categorie_title}}</td>
                                            <td ><a href="{{url('show/all/books/category').'/'. $category->id}}" class="btn btn-success btn-lg">View</a></td>
                                            <td ><a href="{{url('admin/category/edit').'/'.$category->id}}" class="btn btn-info btn-lg">Edit</a></td>
                                            <td ><a href="{{url('admin/category/delete').'/'.$category->id}}" class="btn btn-danger btn-lg">Delete</a></td>
                                       </tr>
                                    @endforeach


                                </tr>
                                </tbody>
                            </table>
                            <div>{{$categories->links()}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection
