@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card m-auto">
                <div class="card-header">
                    <h5>Social Icon</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('social.store')}}" method="POST" >
                        @csrf

                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Socail Name</label>
                             <input type="text"  name="icon_name" class="form-control @error('icon_name') is-invalid @enderror" placeholder="Links here ">
                             @error('icon_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Socail Links</label>
                             <input type="text"  name="links" class="form-control @error('banner_photo') is-invalid @enderror" placeholder="Links here ">
                             @error('Links')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Icon Insert</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Socail Icon List</h5>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Socail Icon</th>
                        <th scope="col">Socail Links</th>
                        <th scope="col">Action</th>
                       
                    </tr>
                </thead>
                <tbody>

                   @foreach($socail_data as $key => $socail)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$socail->icon_name}}</td>
                        <td>{{$socail->links}}</td>
                        <td>{{$socail->created_at->diffForHumans()}}</td>
                         <td>
                            <a href="#"class="btn btn-info">Edit</a>
                            <a href="{{route('delete.social',$socail->id)}}" class="btn btn-danger">Delete</a>
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
</div>
@endsection

@section('footer_script')
@if(session('insert'))
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
            title: '{{session('insert')}}',
            })
        </script>
    @endif

@endsection