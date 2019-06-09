@extends('layout')

@section('title')
Home
@endsection

@section('contents')
<h1>Projects</h1>
@foreach ($projects as $project)
<ul>
    <li><a href="{{ route('projects.show', ['id' => $project->id]) }}">{{ $project->title }}</a></li>
</ul>
@endforeach
@endsection
