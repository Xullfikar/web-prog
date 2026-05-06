@extends('layouts.master')

@section('title', 'Login')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 bg-secondary vh-100"></div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="card p-4" style="width: 400px">
                    <h2>Login</h2>
                    <form action="{{ route('login.do') }}" method="POST">
                        @csrf
                        <div class="my-2">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="" class="form-control" value="{{ old('username') }}">
                        </div>
                            
                        <div class="my-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        @if (session('error_messages'))
                            <div class="alert alert-danger mt-3">{{session('error_messages')}}</div>
                        @endif
                        <button class="mt-2 btn btn-primary w-100" type="submit">Login</button>
                    </form>
                    <a href="{{ route('register.view') }}" class="mt-2 btn btn-link">Don't have an account? Register here</a>
                </div>
            </div>
        </div>
    </div>
@endsection