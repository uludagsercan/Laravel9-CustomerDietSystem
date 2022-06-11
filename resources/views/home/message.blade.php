@if($message = \Illuminate\Support\Facades\Session::get('info'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>

@endif
@if($message = \Illuminate\Support\Facades\Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>

@endif
@if($message = \Illuminate\Support\Facades\Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>

@endif
@if($message = \Illuminate\Support\Facades\Session::get('warning'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>

@endif
@if($errors->any())
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">x</button>
        Check the following errors :(
    </div>

@endif
