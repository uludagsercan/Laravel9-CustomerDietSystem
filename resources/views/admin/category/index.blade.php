@extends('layouts.adminBase')
@section('title',"Category List")

@section('content')

<div class="container">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body printableArea">
                <h3><b></b> <span class="pull-right">Category List</span></h3>
                <hr />
                <div class="row">

                    <div class="col-md-3">
                        <a href="{{route('admin.category.create')}}" class="btn btn-cyan">Add Categegory</a>
                    </div>

                    <div class="col-md-12">
                        <div class="table-responsive mt-5" style="clear: both">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Title</th>
                                    <th class="text-end">Description</th>
                                    <th class="text-end">İmage</th>
                                    <th class="text-end">Status</th>
                                    <th class="text-end">Parent id</th>
                                    <th class="text-end">keywords</th>
                                    <th class="text-end">created date</th>
                                    <th class="text-end">updated date</th>
                                    <th class="text-end">edit</th>
                                    <th class="text-end">delete</th>
                                    <th class="text-end">show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td class="text-center">{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td class="text-end">{{$item->image}}</td>
                                    <td class="text-end">{{$item->status}}</td>
                                    <td class="text-end">{{$item->parent_id}}</td>
                                    <td class="text-end">{{$item->keywords}}</td>
                                    <td class="text-end">{{$item->created_at}}</td>
                                    <td class="text-end">{{$item->updated_at}}</td>
                                    <td class="text-end"><a class="btn btn-warning btn-sm" href="{{route("admin.category.edit",['id'=> $item->id])}}">Edit</a></td>
                                    <td class="text-end"><a class="btn btn-danger btn-sm" href="{{route("admin.category.destroy",['id'=> $item->id])}}">Delete</a></td>
                                    <td class="text-end"><a class="btn btn-success btn-sm" href="{{route("admin.category.show",['id'=> $item->id])}}">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
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
@endsection
