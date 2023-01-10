@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Banner All Data Information</h5>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Name Title</th>
                        <th scope="col">description</th>
                        <th scope="col">Banner Photo</th>
                        <th scope="col">Links</th>
                        <th scope="col">Button Text</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($banner_info as $key => $binfo)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$binfo->heading}}</td>
                        <td>{{$binfo->name_title}}</td>
                        <td>{{$binfo->description}}</td>
                        <td>{{$binfo->banner_photo}}</td>
                        <td>{{$binfo->links}}</td>
                        <td>{{$binfo->button_text}}</td>
                        <td>
                            <a href="#"class="btn btn-info">Edit</a>
                            <a href="{{route('delete.banner',$binfo->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
@if(session('del'))
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
            icon: 'success',
            title: '{{session('del')}}',
            })
        </script>
    @endif

@endsection