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
                        <th scope="col">Thum_heading</th>
                        <th scope="col">Thum_title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Thum_btn_text</th>
                        <th scope="col">thum_photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($portfolio as $key => $portfolio_view)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$portfolio_view->thum_heading}}</td>
                        <td>{{$portfolio_view->thum_title}}</td>
                        <td>{{$portfolio_view->thum_btn_text}}</td>
                        <td>{{$portfolio_view->description}}</td>
                        <td>{{$portfolio_view->thum_photo}}</td>
                        <td>
                            <a href="{{route('edit.portfolio', $portfolio_view->id)}}"class="btn btn-info">Edit</a>
                            <a href="{{route('destroy.portfolio', $portfolio_view->id)}}" class="btn btn-danger">Delete</a>
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