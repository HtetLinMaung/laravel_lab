@extends('layout')

@section('contents')
<h1>{{ $project->title }}</h1>
<p>{{ $project->descriptions }}</p>
<a href="{{ route('projects.edit', ['id' => $project->id]) }}">Edit</a>
<a href="" id="delete">Delete</a>
<form id="delete_form" action="{{ route('projects.destroy', ['id' => $project->id]) }}" method="post">
    @method('DELETE')
    @csrf
</form>
@endsection

@section('script')
<script>
    const btnDelete = document.getElementById('delete');
    btnDelete.addEventListener('click', (e) => {
        e.preventDefault();
        document.getElementById('delete_form').submit();
    });
</script>
@endsection
