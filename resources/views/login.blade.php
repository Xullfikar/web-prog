@extends('layouts.master')

@section('title', 'Login')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 bg-secondary vh-100"></div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="card p-4" style="width: 400px">
                    <h2>Login</h2>
                    <form action="">
                        <div class="my-2">
                            <label for="">Username</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="">Password</label>
                            <input type="password" name="" id="" class="form-control">
                        </div>
                        <a href="{{ route('home') }}" class="mt-2 btn btn-primary w-100">Login</a>
                    </form>
                    <a href="{{ route('register.view') }}" class="mt-2 btn btn-link">Don't have an account? Register here</a>
                </div>
            </div>
        </div>
    </div>
@endsection