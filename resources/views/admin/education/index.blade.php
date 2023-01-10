@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-9">
            <div class="card m-auto">
                <div class="card-header">
                    <h5>Education Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('eduction.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                             <input type="text" name="short_dec" class="form-control @error('short_dec') is-invalid @enderror"  placeholder="Short Desciption">
                             @error('short_dec')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Education Title</label>
                             <input type="text"  name="edu_title" class="form-control @error('name_tatile') is-invalid @enderror" placeholder="Skill eduction main title">
                             @error('edu_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Year</label>
                             <input type="number"  name="years" class="form-control @error('years') is-invalid @enderror" placeholder="Skill Years">
                             @error('years')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Skill heading</label>
                             <input type="text"  name="skill_heading" class="form-control @error('skill_heading') is-invalid @enderror" placeholder="Skill Heading here">
                             @error('skill_heading')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Skill Parchantege</label>
                             <input type="text"  name="parchentage" class="form-control @error('parchentage') is-invalid @enderror" placeholder="Skill parchantage here ">
                             @error('parchentage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Education Banner Photo</label>
                             <input type="file"  name="edu_photo" class="form-control @error('edu_photo') is-invalid @enderror" placeholder="Education Banner Photo ">
                             @error('edu_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Updated</button>
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