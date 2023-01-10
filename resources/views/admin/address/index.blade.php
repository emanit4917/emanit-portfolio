@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-9">
            <div class="card m-auto">
                <div class="card-header">
                    <h5>Contact Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('contacts.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                             <input type="text" name="short_desc" class="form-control @error('short_desc') is-invalid @enderror"  placeholder="Write your description here">
                             @error('short_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Lcation Name</label>
                             <input type="text"  name="loc_name" class="form-control @error('loc_name') is-invalid @enderror" placeholder="Please inpute your current location address">
                             @error('loc_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Address</label>
                             <input type="text"  name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter your full address">
                             @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                             <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Input phone number">
                             @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $phone }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Email</label>
                             <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email address ">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Socail Icons</label>
                             <input type="text"  name="soc_icon" class="form-control @error('soc_icon') is-invalid @enderror" placeholder="Input Socail Icon">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Contact Update</button>
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
@if(session('contacts'))
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
            title: '{{session('contacts')}}',
            })
        </script>
    @endif

@endsection