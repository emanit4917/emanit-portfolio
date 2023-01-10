@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Portfolio Edit Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('portfolio.updated', $portfolio_data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Heading </label>
                             <input type="text" name="thum_heading" value="{{$portfolio_data->thum_heading}}" class="form-control @error('thum_heading') is-invalid @enderror"   placeholder="Write your first heading">
                             @error('thum_heading')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Title</label>
                             <input type="text" name="thum_title" value="{{$portfolio_data->thum_title}}" class="form-control @error('thum_title') is-invalid @enderror"   placeholder="Write your thum_title">
                             @error('short_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Description</label>
                             <input type="text" name="description" value="{{$portfolio_data->description}}" class="form-control @error('description') is-invalid @enderror"   placeholder="Write your thum_title">
                             @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Btn Text</label>
                             <input type="text"  name="thum_btn_text" value="{{$portfolio_data->thum_btn_text}}" class="form-control @error('icons') is-invalid @enderror" placeholder="write your thum_btn_text">
                             @error('thum_btn_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Thumbnail Photo</label>
                             <input type="file" name="thum_photo"  class="form-control @error('icons') is-invalid @enderror"  placeholder="write your thum_btn_text">
                             @error('thum_btn_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="exampleFormControlInput1" class="form-label">Old Photo</label>
                             <img src="{{asset($portfolio_data->thum_photo)}}" width="250px"class="my-3" height="150px" alt="">
                        </div>
                        
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Portfolio Updated</button>
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