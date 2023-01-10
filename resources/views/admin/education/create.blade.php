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
                        <th scope="col">Short_dec</th>
                        <th scope="col">Education title</th>
                        <th scope="col">Years</th>
                        <th scope="col">Skill_heading</th>
                        <th scope="col">Parchentage Skill</th>
                        <th scope="col">Education photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($edu_data as $key => $educate)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$educate->short_dec}}</td>
                        <td>{{$educate->edu_title}}</td>
                        <td>{{$educate->years}}</td>
                        <td>{{$educate->skill_heading}}</td>
                        <td>{{$educate->parchentage}}</td>
                        <td>{{$educate->edu_photo}}</td>
                        <td>
                            <a href="#"class="btn btn-info">Edit</a>
                            <a href="{{route('delete.education',$educate->id)}}" class="btn btn-danger">Delete</a>
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