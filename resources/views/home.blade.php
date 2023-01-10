@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>Admin All User</h3>
                    <span> Totall User ->{{$total_user}}</span>
                </div>
                
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                        <tbody>
                           @foreach($all_user as $key=> $user)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
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
