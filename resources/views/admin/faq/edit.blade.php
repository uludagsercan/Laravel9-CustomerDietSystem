@extends('layouts.adminBase')
@section('title',"Admin panel")
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <form action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post">
        @csrf
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">

                    <!-- Page title actions -->
                    <div class="col">
                        <h1>Update Question</h1>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="mb-3">
            <label class="form-label">Question</label>
            <input type="text" class="form-control" name="question" value="{{$data->question}}" placeholder="question">
        </div>
        <div class="mb-3">
            <label class="form-label">Answer</label>
            <textarea id="answer" class="form-control" name="answer">
                                {{$data->answer}}
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
                <option selected="selected" value="{{$data->status}}">{{$data->status ? 'True':'False'}}</option>
                <option value="1">True</option>
                <option value="0">False</option>


            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>


    </form>
@endsection
