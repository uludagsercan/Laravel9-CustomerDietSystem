@extends('layouts.adminBase')
@section('title',"Admin panel")

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">

                <!-- Page title actions -->
                <div class="col">
                    <div class="btn-list">

                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                            Add Treatment
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Treatments</h3>
            </div>

            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Keyword</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Image Galery</th>
                        <th>Edit</th>

                        <th>Delete</th>
                        <th>Show</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                            <td><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="width: 50px" ></td>
                            <td>@if(strlen($rs->title)>15) {{substr($rs->title,0,15)}}... @else {{$rs->title }}@endif</td>
                            <td>@if(strlen($rs->description)>15) {{substr($rs->description,0,15)}}... @else {{$rs->description}}@endif</td>
                            <td>@if(strlen($rs->keywords)>15) {{substr($rs->keywords,0,15)}}... @else {{$rs->keywords}}@endif</td>
                            <td>@if(strlen($rs->detail)>15) {{substr($rs->detail,0,15)}}... @else {{$rs->detail}}@endif</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->status ? 'True':'False'}}</td>
                            <td><a href="{{route('admin.image.index',['tid'=>$rs->id])}}"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <img src="{{asset('assets')}}/admin/dist/img/imagegalery.png" style="width: 50px"></a></td>
                            <td><a class="btn btn-outline-info" href="{{route('admin.treatment.edit',['id'=>$rs->id])}}">Edit</a></td>
                            <td><a class="btn btn-outline-danger" href="{{route('admin.treatment.destroy',['id'=>$rs->id])}}">Delete</a></td>

                            <td><a class="btn btn-outline-cyan" href="{{route('admin.treatment.show',['id'=>$rs->id])}}">Show</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
                            prev
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!--@{{route('admin.treatment.store',['pid'=>$data->id])}}-->


    <form action="{{route('admin.treatment.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Treatment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" id="floatingSelect" name="category_id" aria-label="Floating label select example">
                                <option selected="selected" value="0">Main Category</option>
                                @foreach($categories as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title )}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Detail</label>
                            <input type="text" class="form-control" name="detail" placeholder="Detail">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keyword</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Keyword">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" placeholder="Quantity">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Min Quantity</label>
                            <input type="number" class="form-control" name="minquantity" placeholder="Min Quantity">
                        </div>

                        <div class="mb-3">
                            <div class="form-label">Image</div>
                            <input type="file" name="fimage" class="form-control">
                        </div>


                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>

                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <button class="btn btn-success">Save</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
