@extends('layouts.adminBase')

@section('title','Add Category')

@section('content')
    <form action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="card-header">
                <h5>Add Category</h5>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Keyword</label>
                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
        </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col">


                                <div class="mt-3">
                                    <div class="row g-2">

                                        <div class="col">

                                            <input type="file" class="form-control" name="fimage" value="{{$data->image}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-end">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" style="width: 120px" alt="Food Deliver UI dashboards" class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="floatingSelect" name="parent_id" aria-label="Floating label select example">
                        <option selected="selected" value="0">Main Category</option>
                        @foreach($dataList as $rs)
                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title )}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-label">Select</div>
                    <select class="form-select">
                        <option value="{{$data->image}}">Selected Status: {{$data->status ? 'True':'False'}}</option>
                        <option value="0">True</option>
                        <option value="1">False</option>

                    </select>
                </div>
                <div class="text-end py-3">
                    <button class="btn btn-success">Update</button>
                </div>

            </div>



        </div>
    </form>
@endsection
