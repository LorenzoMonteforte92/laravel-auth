@extends('layouts.admin')

@section('content')
    @foreach ($projects as $singleProject)
        <div>
            <h6>{{ $singleProject->name }}</h6>
            <div>{{ $singleProject->name }}</div>
            <div></div>
            <div></div>
        </div>

    @endforeach
@endsection