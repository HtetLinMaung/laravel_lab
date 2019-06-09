@extends('layout')

@section('contents')
<form action="{{ route('projects.update', ['id'=> $project->id ]) }}" method="post">
    @method('PATCH')
    @csrf
    {{-- $errors->has('title') --}}
    <input type="text" name="title" placeholder="Project title..." value="{{ old('title', $project->title) }}"><br>
    <textarea name="descriptions" cols="30" rows="10"
        placeholder="Project description...">{{ old('descriptions', $project->descriptions) }}</textarea><br>
    <input type="submit" value="Update">
</form>
@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
@endsection
