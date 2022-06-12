@extends('layouts.adminBase')
@section('title',"Admin panel")

@section('content')


    <div class="table-responsive">
        <table class="table table-striped table-vcenter" >

            <tbody>


                <tr>
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr> <tr>
                    <th>Name</th>
                    <td>{{$data->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$data->email}}</td>
                </tr>
                <tr >
                    <th>Roles</th>

                    <td class="float-left">
                        @foreach($data->roles as $rs)
                        {{$rs->name}}
                        <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$rs->id])}}">[x]</a>
                        @endforeach
                    </td>

                </tr>
                <tr>
                    <th>Add Role</th>
                    <td>
                        <form action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                            @csrf

                            <select class="form-control" name="role_id">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Add Role</button>
                            </div>
                        </form>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>


@endsection
