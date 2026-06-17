@extends('layouts.master')

@section('title', 'Detail Student')
@section('content')
    @include('layouts.navbar')
    <div class="container">
        <a class="mt-4 btn btn-primary" href="{{ route('home') }}">Back</a>
        <div class="card mt-4">
            <div class="card-body">
                <h3>Name: {{$data->name}}</h3>
                <h3>Nim: {{$data->nim}}</h3>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="h5">Add Score</h2>
                <form action="{{ route('students.scores.insert') }}" method="POST">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ $data->id }}">
                    <div class="col-md-4">
                        <label for="" class="form-label">Course</label>
                        <select name="course_id" class="form-control" required>
                            <option value="" disabled selected>-- Select Course --</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>                               
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Score (0 - 100)</label>
                        <input type="number" name="score" class="form-control" required min=0, max=100>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-success">Save Score</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Course</th>
                            <th>Score</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scores as $score)
                            @php
                                if ($score->score >= 90 && $score->score <= 100) {
                                    $grade = 'A';
                                } else if ($score->score >= 85 && $score->score <= 89) {
                                    $grade = 'A-';
                                } else if ($score->score >= 80 && $score->score <= 84) {
                                    $grade = 'B+';
                                } else if ($score->score >= 75 && $score->score <= 79) {
                                    $grade = 'B';
                                } else {
                                    $grade = 'Goblok Lu';
                                }
                            @endphp
                        <tr>
                            <td>{{ $score->courses->code }} - {{$score->courses->name}}</td>
                            <td>{{$score->score}}</td>
                            <td>{{$grade}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        {{-- <h4>Score list: </h4> --}}
        <ul class="list-group">
            {{-- @foreach ($student['score'] as $score)
                @php
                    if ($score >= 90 && $score <= 100) {
                        $grade = 'A';
                    } else if ($score >= 85 && $score <= 89) {
                        $grade = 'A-';
                    } else if ($score >= 80 && $score <= 84) {
                        $grade = 'B+';
                    } else if ($score >= 75 && $score <= 79) {
                        $grade = 'B';
                    } else {
                        $grade = 'Goblok Lu';
                    }
                @endphp
                <li class="list-group-item">Score: {{ $score }} - Grade: {{ $grade }}</li>
            @endforeach --}}
        </ul>
    </div>
@endsection