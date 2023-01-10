@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5>Insert Menu Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('nav.insert')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Menu Item</label>
                             <input type="text" class="form-control @error('navbar') is-invalid @enderror" name="navbar"  placeholder="insert menu item">
                             @error('navbar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Hyper Link</label>
                             <input type="text"  name="link" class="form-control @error('link') is-invalid @enderror" placeholder="insert menu link">
                             @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Menu Insert</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5>Menu Item List</h5>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Menu Item</th>
                        <th scope="col">Hyper Links</th>
                        <th scope="col">Authr Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($navdata as $key => $nav)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$nav->navbar}}</td>
                        <td>{{$nav->link}}</td>
                        <td>Eman</td>
                        <td>
                            <a href="{{route('edit.insert',$nav->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete',$nav->id)}}" class="btn btn-danger">Delete</a>
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
@if(session('success'))
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
            title: '{{session('success')}}',
            })
        </script>
    @endif

@endsection