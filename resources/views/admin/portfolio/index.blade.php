@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Portfolio Aria Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Heading </label>
                             <input type="text" name="thum_heading" class="form-control @error('thum_heading') is-invalid @enderror" placeholder="Write your first heading">
                             @error('thum_heading')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Title</label>
                             <input type="text" name="thum_title" class="form-control @error('thum_title') is-invalid @enderror"   placeholder="Write your thum_title">
                             @error('thum_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" ></textarea>
                             @error('thum_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Btn Text</label>
                             <input type="text"  name="thum_btn_text" class="form-control @error('icons') is-invalid @enderror" placeholder="write your thum_btn_text">
                             @error('thum_btn_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Photo</label>
                             <input type="file" name="thum_photo" class="form-control @error('thum_photo') is-invalid @enderror" placeholder="write your thum_photo">
                             @error('thum_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Portfolio Save</button>
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