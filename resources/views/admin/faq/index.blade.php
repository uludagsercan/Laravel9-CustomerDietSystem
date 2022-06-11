@extends('layouts.adminBase')
@section('title',"Admin panel")
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
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
                            Add Question
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
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faq as $rs)
                    <tr>

                        <td>{{$rs->id}}</td>
                        <td>{{$rs->question}}</td>
                        <td class="overflow-scroll">{!! $rs->answer !!}</td>

                        <td>{{$rs->status ? 'True':'False'}}</td>
                        <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-warning">Update</a></td>
                        <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-bitbucket">Show</a></td>
                        <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-dangere">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <form action="{{route('admin.faq.store')}}" method="post">
        @csrf
        <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Faq</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Question</label>
                            <input type="text" class="form-control" name="question" placeholder="question">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Answer</label>
                            <textarea id="answer" class="form-control" name="answer">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" id="floatingSelect" name="status" aria-label="Floating label select example">
                                <option value="1">True</option>
                                <option value="0">False</option>


                            </select>
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
