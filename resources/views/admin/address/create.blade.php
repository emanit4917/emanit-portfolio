@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Contact All Data Information</h5>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Location name</th>
                        <th scope="col">Address</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                        <th scope="col">soc_icon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($address_all as $key => $address)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$address->short_desc}}</td>
                        <td>{{$address->loc_name}}</td>
                        <td>{{$address->address}}</td>
                        <td>{{$address->phone}}</td>
                        <td>{{$address->email}}</td>
                        <td>{{$address->soc_icon}}</td>
                       
                        <td>
                            <a href="{{route('edit.address', $address->id)}}"class="btn btn-info">Edit</a>
                            <a href="{{route('delete.address', $address->id)}}" class="btn btn-danger">Delete</a>
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