@extends('layout')

@section('contents')
<form action="{{route('projects.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Project title..." required><br>
    <textarea name="descriptions" cols="30" rows="10" placeholder="Project description..."></textarea><br>
    <input type="submit" value="Save">
</form>
@endsection
