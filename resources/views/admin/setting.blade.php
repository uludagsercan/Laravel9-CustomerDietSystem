@extends('layouts.adminBase')
@section('title',"Setting panel")
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="card">
        <ul class="nav nav-tabs" data-bs-toggle="tabs">
            <li class="nav-item">
                <a href="#tabs-general-9" class="nav-link active" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="5 12 3 12 12 3 21 12 19 12"></polyline><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                    General</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-smtp-9" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                    Smtp Email</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-social-9" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                    Social Media</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-about-9" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                    About Us</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-contact-9" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                    Contact Page</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-references-9" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                    References</a>
            </li>
        </ul>
        <form method="post" action="{{route('admin.settingUpdate',['sid'=>$data->id])}}" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active show" id="tabs-general-9">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" placeholder="Keywords">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}" placeholder="Description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company</label>
                        <input type="text" class="form-control" name="company" value="{{$data->company}}" placeholder="Company">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fax</label>
                        <input type="text" class="form-control" name="fax" value="{{$data->fax}}" placeholder="Fax">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Phone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Icon</label>
                        <input type="file" class="form-control" name="icon" value="{{$data->icon}}" placeholder="Icon">
                    </div>

                    <div class="form-group mb-3 ">
                        <label class="form-label">Status</label>
                        <div>
                            <select class="form-select" name="status">
                                <option value="{{$data->status}}" selected="selected">Selected:@if($data->status>0)True @else False @endif</option>
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="tabs-smtp-9">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{$data->email}}" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Smtp Server</label>
                        <input type="text" class="form-control" value="{{$data->smtpserver}}" name="smtpserver" placeholder="Smtp Server">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Smptp Password</label>
                        <input type="text" class="form-control" value="{{$data->smtppassword}}" name="smtppassword" placeholder="Smptp Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Smtp Port</label>
                        <input type="number" class="form-control" value="{{$data->smtpport}}" name="smtpport" placeholder="Smtp Port">
                    </div>
                </div>
                <div class="tab-pane" id="tabs-social-9">
                    <div class="mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" value="{{$data->facebook}}" name="facebook" placeholder="Facebook">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" value="{{$data->instagram}}" name="instagram" placeholder="Instagram">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Twitter</label>
                        <input type="text" class="form-control" value="{{$data->twitter}}" name="twitter" placeholder="Twitter">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Linkedin</label>
                        <input type="text" class="form-control" value="{{$data->linkedin}}" name="linkedin" placeholder="Linkedin">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Youtube</label>
                            <input type="text" class="form-control" value="{{$data->youtube}}" name="youtube" placeholder="youtube">
                    </div>
                </div>
                <div class="tab-pane" id="tabs-about-9">
                    <div class="mb-3">
                        <label class="form-label">About</label>
                        <textarea id="about" name="about">{!! $data->about !!}</textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#about' ) )

                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>
                <div class="tab-pane" id="tabs-contact-9">
                    <div class="mb-3">
                        <label class="form-label">Contact</label>
                        <textarea id="contact" name="contact">{!! $data->contact !!}</textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#contact' ) )

                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>
                <div class="tab-pane" id="tabs-references-9">
                    <div class="mb-3">
                        <label class="form-label">About</label>
                        <textarea id="references" name="references">{!! $data->references !!}</textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#references' ) )

                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-warning" type="submit">Update</button>
        </div>
        </form>
    </div>
@endsection
