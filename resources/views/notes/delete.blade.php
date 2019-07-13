@extends('layout.app')
@section('namePage', 'delete note')
@section('content')
    <p class="alert-danger">
        Xóa {{$note->name}}
    </p>
    <a href="{{route('notes.destroy', $note->id)}}">
        <button class="btn btn-danger">Delete</button>
    </a>
    <a href="{{route('notes.index')}}">
        <button class="btn btn-primary">Back</button>
    </a>
@endsection
