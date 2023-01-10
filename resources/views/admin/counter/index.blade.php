@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-9">
            <div class="card m-auto">
                <div class="card-header">
                    <h5>Counter Aria Section</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('counter.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Counter Number</label>
                             <input type="text" name="count_number" class="form-control @error('count_number') is-invalid @enderror"  placeholder="Counter Number Bold">
                             @error('count_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Counter Icon</label>
                             <input type="text"  name="count_icon" class="form-control @error('count_icon') is-invalid @enderror" placeholder="counter icons">
                             @error('count_icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Counter Title</label>
                             <input type="text"  name="count_title" class="form-control @error('count_title') is-invalid @enderror" placeholder="Counter Titel">
                             @error('count_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Counter Save</button>
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
