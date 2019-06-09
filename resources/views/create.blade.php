@extends('layout')

@section('contents')
<form action="{{route('projects.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Project title..." value="{{ old('title') }}"><br>
    <textarea name="descriptions" cols="30" rows="10" placeholder="Project description...">{{ old('descriptions') }}</textarea><br>
    <input type="submit" value="Save">
</form>
@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
@endsection
