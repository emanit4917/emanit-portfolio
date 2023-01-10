@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Education All Data Information</h5>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">head_title</th>
                        <th scope="col">short_desc</th>
                        <th scope="col">icons</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($service_data as $key => $service)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$service->head_title}}</td>
                    <td>{{$service->short_desc}}</td>
                    <td>{{$service->icons}}</td>
                  
                    <td>
                        <a href="#"class="btn btn-info">Edit</a>
                        <a href="{{route('service.delete',$service->id)}}" class="btn btn-danger">Delete</a>
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