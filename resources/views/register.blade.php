@extends('layouts.master')

@section('title', 'Register')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 bg-secondary vh-100"></div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="card p-4" style="width: 400px">
                    <h2>Register</h2>
                    <form action="{{ route('register.do') }}" method="POST">
                        @csrf
                        <div class="my-2">
                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control" value="{{ old('username') }}">
                        </div>
                        <div class="my-2">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="" class="form-control">
                        </div>
                        @include('components.error_messages')
                        <button type="submit" class="mt-2 btn btn-primary w-100">Register</button>
                    </form>
                    <a href="{{ route('login.view') }}" class="mt-2 btn btn-link">Already have an account? Login here</a>
                </div>
            </div>
        </div>
    </div>
@endsection
