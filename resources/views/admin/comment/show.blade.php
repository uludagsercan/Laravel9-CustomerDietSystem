@extends('layouts.adminBase')
@section('title',"Admin panel")

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">

                    <tbody>
                  <tr>
                      <td>Username</td>
                      <td>{{$review->user->name}}</td>
                  </tr>
                  <tr>
                      <td>Product Name</td>
                      <td>{{$review->treatment->title}}</td>
                  </tr>
                  <tr>
                      <td>Product Name</td>
                      <td>{{$review->treatment->title}}</td>
                  </tr>
                  <tr>
                      <td>Subject</td>
                      <td>{{$review->review}}</td>
                  </tr>
                  <tr>
                      <td>Ip</td>
                      <td>{{$review->IP}}</td>
                  </tr>
                  <tr>
                      <td>Rate</td>
                      <td>{{$review->rate}}</td>
                  </tr>
                  <form action="{{route('admin.comment.update',['id'=>$review->id])}}" method="post">
                      @csrf
                  <tr>
                      <td>Status</td>
                      <td>
                          <select class="form-select" id="floatingSelect" name="status" aria-label="Floating label select example">
                              <option selected="selected" value="{{$review->status}}">Selected: {{$review->status ? 'True':'False'}}</option>
                              <option value="1">True</option>
                              <option value="0">False</option>
                          </select>
                      </td>
                  </tr>
                      <tr>

                          <td><button type="submit" class="btn btn-success">Update</button></td>
                      </tr>
                  </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
