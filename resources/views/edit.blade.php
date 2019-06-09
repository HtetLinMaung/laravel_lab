@extends('layout')

@section('contents')
<form action="{{ route('projects.update', ['id'=> $project->id ]) }}" method="post">
    @method('PATCH')
    @csrf
    <input type="text" name="title" placeholder="Project title..." value="{{ $project->title }}" required><br>
    <textarea name="descriptions" cols="30" rows="10" placeholder="Project description...">{{ $project->descriptions }}</textarea><br>
    <input type="submit" value="Update">
</form>
@endsection
