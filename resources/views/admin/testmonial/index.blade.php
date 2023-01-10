@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Testmonial Aria Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('testmonial.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Name</label>
                             <input type="text" name="title_name" class="form-control @error('title_name') is-invalid @enderror"   placeholder="Write your title name">
                             @error('title_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Title Head</label>
                             <input type="text" name="title_head" class="form-control @error('title_head') is-invalid @enderror"   placeholder="Write your title head">
                             @error('title_head')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                             <input type="text"  name="short_desc" class="form-control @error('short_desc') is-invalid @enderror" placeholder="write your short description">
                             @error('short_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Testmonial Photo</label>
                             <input type="file" name="testmonial_photo" class="form-control @error('testmonial_photo') is-invalid @enderror" placeholder="write your testmonial photo">
                             @error('testmonial_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Testmonial Updated</button>
                            </div>
                        </div>
                    </form>
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