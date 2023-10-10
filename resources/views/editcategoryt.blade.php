@extends('layouts.sidebar')
@section('tittle', 'Edit-Category');
@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Edit Category</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Category</li>
                            <li class="breadcrumb-item active" aria-current="page">Editing {{$category->name}}</li>
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
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit Category</h4>
                    </div>
                    <div class="box-body">
                        <x-validation-errors class="mb-4" />

                        <form action="{{route('updatecategory')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Category </label>
                                            <input type="text" name="name" class="form-control" value="{{$category->name}}" required>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Sub Category (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Sub Category" readonly>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <!--/row-->

                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"> <i class="icon-Plus">
                                    </i> Update-Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection

