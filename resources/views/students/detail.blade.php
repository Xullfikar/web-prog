@extends('layouts.master')

@section('title', 'Detail Student')
@section('content')
    @include('layouts.navbar')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
        <h3>Name: {{$student['name']}}</h3>
        <h4>Score list: </h4>
        <ul class="list-group">
            @foreach ($student['score'] as $score)
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
            @endforeach
        </ul>
    </div>
@endsection