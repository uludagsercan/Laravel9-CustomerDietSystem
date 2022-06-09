@extends('layouts.adminWindow')

@section('title','İmage Gallery Update')

@section('content')

    <form action="{{route('admin.image.update',['tid'=>$treatmentData->id,'id'=>$imageData->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="card-header">
                <h5>Update Image Gallery</h5>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$imageData->title}}">
                </div>
                <div class="mb-3">

                    <select class="form-control" name="treatment_id">
                        @foreach($treatmentsData as $rs)
                        <option value="{{$rs->id}}" @if($rs->id == $imageData->treatment_id) selected="selected" @endif>
                            {{$rs->title}}
                        </option>
                        @endforeach
                    </select>
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

                                            <input type="file" class="form-control" name="fimage" value="{{$imageData->image}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-end">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($imageData->image)}}" style="width: 120px"  class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="text-end py-3">
                    <button class="btn btn-success">Update</button>
                </div>

            </div>



        </div>
    </form>
@endsection
