@extends('layouts.adminBase')

@section('title','Add Treatment')

@section('content')
    <form action="{{route('admin.treatment.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="card-header">
                <h5>Add Treatment</h5>
            </div>

            <div class="card-body">
                <div class="col-md-12">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" id="floatingSelect" name="category_id" aria-label="Floating label select example">
                        <option selected="selected" value="0">Main Category</option>
                        @foreach($data as $rs)
                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title )}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description">
                </div>

                <div class="col-md-12">
                    <label class="form-label">Keyword</label>
                    <input type="text" class="form-control" name="keywords">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Detail</label>
                    <input type="text" class="form-control" name="detail">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Price</label>
                    <input type="price" class="form-control" name="price">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Tax</label>
                    <input type="price" class="form-control" name="tax">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Discount</label>
                    <input type="price" class="form-control" name="discount">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Min Quantity</label>
                    <input type="number" class="form-control" name="minquantity">
                </div>

                <div class="col-md-12">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="fimage">
                </div>

                <div class="mb-3 py-3">
                    <div class="form-label">Status</div>
                    <div>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status">
                            <span class="form-check-label">True</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" name="status" type="radio">
                            <span class="form-check-label">False</span>
                        </label>

                    </div>
                </div>
                <div class="text-end py-3">
                    <button class="btn btn-success">Save</button>
                </div>

            </div>



        </div>
    </form>
@endsection
