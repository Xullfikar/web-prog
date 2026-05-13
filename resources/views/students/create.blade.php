@extends('layouts.master')

@section('title', 'Add New Student')
@section('content')
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="card p-4">
            <form action="{{ route('students.insert')}}" method="POST">
                @csrf
                <div class="">
                    <label class="form-label">Student Name:</label>
                    <input type="text" class="form-control", name="student_name", required>
                </div>
                <div class="">
                    <label class="form-label">Student Number:</label>
                    <input type="text" class="form-control", name="student_nim", required>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Add Student</button>
            </form>
        </div>
    </div>
    
@endsection