@extends('layouts.master')

@section('title', 'Edit Student')
@section('content')
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="card p-4">
            <form action="{{ route('students.update', $student->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="">
                    <label class="form-label">Student Name:</label>
                    <input value="{{ old('student_name', $student->name) }}" type="text" class="form-control", name="student_name", required>
                </div>
                <div class="">
                    <label class="form-label">Student Number:</label>
                    <input value="{{ old('student_nim', $student->nim) }}" type="text" class="form-control", name="student_nim", required>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Update Student</button>
            </form>
        </div>
    </div>
    
@endsection