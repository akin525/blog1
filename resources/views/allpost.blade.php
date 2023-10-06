@extends('layouts.sidebar')
@section('tittle', 'All-Post')
@section('content')
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">All Post</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Posts</li>
                                    <li class="breadcrumb-item active" aria-current="page">All-post</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">List Of All Published Post</h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th rowspan="2">TIttle</th>
                                            <th colspan="2">Published</th>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <th>Edit </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allpost as $sa)
                                        <tr>
                                            <td>{{$sa->topic}}</td>
                                            <td>{{$sa['created_at']}}</td>
                                            <td><a href="#" class="badge badge-success">Edit</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Tittle</th>
                                            <th>Date</th>
                                            <th>Edit</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
@section('script')
    <script src="{{asset('admin/js/pages/data-table.js')}}"></script>
@endsection
