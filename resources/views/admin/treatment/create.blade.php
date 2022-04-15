@extends('layouts.adminBase')

@section('title', 'Create Treatment')

@section('content')

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <form method="post" action="/admin/treatment/store">
            @csrf
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
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
                                        placeholder="Title Here"
                                        name="title"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="desc1"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Description</label
                                >
                                <div class="col-sm-9">
                                    <textarea id="desc1" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="detail1"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Detail</label
                                >
                                <div class="col-sm-9">
                                    <textarea id="detail1" class="form-control" name="detail"></textarea>
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
                                        placeholder="Keywords Here"
                                        name="keyword"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="price"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Price</label
                                >
                                <div class="col-sm-9">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="price"

                                        name="price"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                                <div class="col-md-9">

                                    <div class="form-check">
                                        <input
                                            type="radio"
                                            class="form-check-input"
                                            id="customControlValidation1"
                                            name="status"
                                            value="true"
                                            required
                                        />
                                        <label
                                            class="form-check-label mb-0"
                                            for="customControlValidation1"
                                        >True</label
                                        >
                                    </div>
                                    <div class="form-check">
                                        <input
                                            type="radio"
                                            class="form-check-input"
                                            id="customControlValidation2"
                                            name="status"
                                            value="false"
                                            required
                                        />
                                        <label
                                            class="form-check-label mb-0"
                                            for="customControlValidation2"
                                        >False</label
                                        >
                                    </div>

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