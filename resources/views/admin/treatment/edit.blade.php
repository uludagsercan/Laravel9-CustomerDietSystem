@extends('layouts.adminBase')
@section('title',"Update Treatment")

@section('content')

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <form method="post" action="/admin/treatment/update/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Update Treatment</h4>
                            <div class="form-group row">
                                <label
                                    for="fname"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Title</label
                                >
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="fname"
                                        value="{{$data->title}}"
                                        name="title"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="cono1"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Description</label
                                >
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" >{{$data->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="lname"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Keywords</label
                                >
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="lname"
                                        value="{{$data->keywords}}"
                                        name="keyword"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="detail1"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Detail</label
                                >
                                <div class="col-sm-9">
                                    <textarea id="detail1" class="form-control" name="detail">{{$data->detail}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Status</label>

                                <div class="col-md-9">
                                    <select class="form-select" name="status"
                                            aria-label="Default select example">
                                        <option selected>Selected item: {{$data->status ? 'True':'False'}}</option>

                                        <option value="true">True</option>
                                        <option value="false">False</option>

                                    </select>


                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">File Upload</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input
                                            type="file"
                                            class="custom-file-input"
                                            id="validatedCustomFile"
                                            name="fimage";
                                            required
                                            value="{{$data->image}}"
                                        />
                                        <label
                                            class="custom-file-label"
                                            for="validatedCustomFile"
                                        >Choose file...</label
                                        >
                                        <div class="invalid-feedback">
                                            Example invalid custom file feedback
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </form>


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
@endsection
