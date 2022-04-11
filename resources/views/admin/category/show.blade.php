@extends('layouts.adminBase')
@section('title',"Create Category")

@section('content')

    <div class="card">
        <div class="card-header">
            @section('pageTitle','Category Detail')
            @section('pageLink','/admin/category')
            @section('pageName','Category')
            @section('currentPage','Show')
        </div>
        <div class="card-body">

            <table class="table table-striped">
                <tbody>
                <tr>
                    <th style="width: 50px">Title: </th>
                    <td>
                        {{$data->title}}
                    </td>
                </tr>
                <tr>
                    <th>Description: </th>
                    <td>
                        {{$data->description}}
                    </td>
                </tr>
                <tr>
                    <th>Status: </th>
                    <td>
                        {{$data->status ? 'True':'False'}}
                    </td>

                </tr>
                <tr>
                    <th>Keywords: </th>
                    <td>
                        {{$data->keywords}}
                    </td>

                </tr>
                <tr>
                    <th>Created Date: </th>
                    <td>
                        {{$data->created_at}}
                    </td>
                </tr>
                <tr>
                    <th>Updated Date: </th>
                    <td>
                        {{$data->updated_at}}
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection
