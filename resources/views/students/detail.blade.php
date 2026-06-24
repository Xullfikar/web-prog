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
                <h2 class="h-5">Status: {{blank($data->prediction) ? '-' : ($data->prediction ? 'Telat' : 'Tepat Waktu')}}</h2>
                <form action="{{ route('students.predict', $data->id) }}" method="POST">
                    @csrf
                    <button class="btn bt-sm btn-info" type="submit">Predict Status</button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h2 class="h5">Add Score</h2>
                <form action="{{ route('students.scores.insert') }}" method="POST">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ $data->id }}">
                    <div class="row g-3">
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
                            <label for="" class="form-label">Attendance Percentage (0 - 100)</label>
                            <input type="number" name="attendence" class="form-control" required min=0, max=100>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Assigment (0 - 100)</label>
                            <input type="number" name="assigment" class="form-control" required min=0, max=100>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Mid Exam (0 - 100)</label>
                            <input type="number" name="mid" class="form-control" required min=0, max=100>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Final Exam (0 - 100)</label>
                            <input type="number" name="final" class="form-control" required min=0, max=100>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Score (0 - 100)</label>
                            <input type="number" name="score" class="form-control" required min=0, max=100>
                        </div>
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
                            <th>Attendece</th>
                            <th>Assigment</th>
                            <th>Final</th>
                            <th>Mid</th>
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
                                    $grade = 'Bercanda';
                                }
                            @endphp
                        <tr>
                            <td>{{ $score->courses->code }} - {{$score->courses->name}}</td>
                            <td>{{$score->attendence}}%</td>
                            <td>{{$score->assigment}}</td>
                            <td>{{$score->mid_exam}}</td>
                            <td>{{$score->final_exam}}</td>
                            <td>{{$score->score}}</td>
                            <td>{{$grade}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
