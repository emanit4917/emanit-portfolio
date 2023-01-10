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
                        <th scope="col">title_name</th>
                        <th scope="col">title_head</th>
                        <th scope="col">short_desc</th>
                        <th scope="col">testmonial_photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($testm_data as $key => $testm_all)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$testm_all->title_name}}</td>
                    <td>{{$testm_all->title_head}}</td>
                    <td>{{$testm_all->short_desc}}</td>
                    <td>{{$testm_all->testmonial_photo}}</td>
                    
                    <td>
                        <a href="{{route('edit.testmonial', $testm_all->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('destroy.testmonial', $testm_all->id)}}" class="btn btn-danger">Delete</a>
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
@if(session('status'))
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
            title: '{{session('status')}}',
            })
        </script>
    @endif

@endsection