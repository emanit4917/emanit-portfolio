@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-9">
            <div class="card m-auto">
                <div class="card-header">
                    <h5>Banner Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Name Heading</label>
                             <input type="text" name="heading" class="form-control @error('heading') is-invalid @enderror"  placeholder="heading">
                             @error('heading')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Name Title</label>
                             <input type="text"  name="name_title" class="form-control @error('name_tatile') is-invalid @enderror" placeholder="name tatile here">
                             @error('name_tatile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Description</label>
                             <input type="text"  name="description" class="form-control @error('description') is-invalid @enderror" placeholder="description text here">
                             @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Banner Photo</label>
                             <input type="file" name="banner_photo" class="form-control @error('banner_photo') is-invalid @enderror" placeholder="Banner Image here">
                             @error('banner_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Links</label>
                             <input type="text"  name="links" class="form-control @error('banner_photo') is-invalid @enderror" placeholder="Links here ">
                             @error('Links')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Button Text</label>
                             <input type="text"  name="button_text" class="form-control @error('button_text') is-invalid @enderror" placeholder="button text here ">
                             @error('button_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Banner Insert</button>
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

