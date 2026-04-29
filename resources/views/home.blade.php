@extends('layouts.master')

@section('title', 'Homepage')
@section('content')
    @include('layouts.navbar')
    <div class="container">
        <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Average Score</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $st)
                @php
                    $average = array_sum($st['score']) / count($st['score'])
                @endphp
                <tr>
                    <td>{{$st['id']}}</td>
                    <td><a href="{{ route('students.detail', $st['id'])}}">{{$st['name']}}</a></td>
                    <td>{{ round($average, 2) }}</td>
                    <td>
                        @if ($average > 85)
                            <span class="badge text-bg-success">Lulus</span>
                        @else
                            <span class="badge text-bg-danger">Gak Lulus</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection