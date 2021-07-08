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
                        <h4 class="page-title">Authors</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Authors Table</h5>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">BOOKS</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach($publishinghouses as $publishinghouse)
                                    <tr>
                                        <th scope="row">{{$num++}}</th>
                                        <td>{{$publishinghouse->Phousename}}</td>
                                        <td ><a href="{{url('show/all/books/publishinghouse').'/'. $publishinghouse->id}}" class="btn btn-success btn-lg">View</a></td>
                                        <td ><a href="{{url('admin/publishinghouse/edit').'/'.$publishinghouse->id}}" class="btn btn-info btn-lg">Edit</a></td>
                                        <td ><a href="{{url('admin/publishinghouse/delete').'/'.$publishinghouse->id}}" class="btn btn-danger btn-lg">Delete</a></td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>
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
