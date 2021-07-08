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
                        <h4 class="page-title">Books</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author Name</th>
                                            <th>Edition No.</th>
                                            <th>Year Of Release</th>
                                            <th>Category</th>
                                            <th>publishing house</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>

                                        @foreach($books as $book)
                                            <tr>
                                                <th>{{$book->title}}</th>
                                                <th>{{$book->author->name}}</th>
                                                <th>{{$book->edition_No}}</th>
                                                <th>{{$book->year_of_release}}</th>
                                                <th>{{$book->category->categorie_title}}</th>
                                                <th>{{$book->publishinghouse->Phousename}}</th>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-info" href="{{url('view/book').'/'.$book->id}}">View</a>
                                                        <button type="button"
                                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{url('admin/book/edit').'/'.$book->id}}">Edit</a>
                                                            <a class="dropdown-item text-danger" href="{{url('admin/book/delete').'/'.$book->id}}">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tbody>


                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author Name</th>
                                            <th>Edition No.</th>
                                            <th>Year Of Release</th>
                                            <th>Category</th>
                                            <th>publishing house</th>
                                            <th>Actions</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>


@endsection
