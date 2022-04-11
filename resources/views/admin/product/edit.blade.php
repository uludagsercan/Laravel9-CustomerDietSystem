@extends('layouts.adminBase')
@section('title',"Edit Product")

@section('content')

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <form method="post" action="/admin/product/update/{{$data->id}}">
            @csrf
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Edit Category</h4>
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
                                        value="{{$data->title}}"

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
                                    <textarea class="form-control" name="description">{{$data->description}}</textarea>
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
                                        name="keywords"
                                        value="{{$data->keywords}}"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="detailName"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Detail</label
                                >
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="detailName"
                                        placeholder="Keywords Here"
                                        name="detail"
                                        value="{{$data->detail}}"
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
                                        placeholder="Keywords Here"
                                        name="price"
                                        value="{{$data->price}}"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="quantity"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Quantity</label
                                >
                                <div class="col-sm-9">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="quantity"
                                        placeholder="Keywords Here"
                                        name="quantity"
                                        value="{{$data->quantity}}"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="minQuantity"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Min Quantity</label
                                >
                                <div class="col-sm-9">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="minQuantity"
                                        placeholder="Keywords Here"
                                        name="minquantity"
                                        value="{{$data->minquantity}}"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="taxt"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Tax</label
                                >
                                <div class="col-sm-9">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="taxt"
                                        placeholder="Keywords Here"
                                        name="taxt"
                                        value="{{$data->taxt}}"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                                <div class="col-md-9">

                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option selected value="{{$data->status}}">Selected item: {{$data->status ? 'True':'False'}}</option>

                                        <option value="1">True</option>
                                        <option value="0">False</option>

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
