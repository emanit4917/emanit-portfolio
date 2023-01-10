@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Brand Aria Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Brand Photo</label>
                             <input type="file" name="brand_photo" class="form-control @error('brand_photo') is-invalid @enderror" placeholder="write your brand_photo">
                             @error('brand_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Brand Save</button>
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