@extends('layout.app')
@section('namePage', 'delete note_type')
@section('content')
    <p class="alert-danger">
        Xóa {{$note_type->name}} số {{$note_type->id}}
    </p>
    <a href="{{route('note_types.destroy', $note_type->id)}}">
        <button class="btn btn-danger">Delete</button>
    </a>
    <a href="{{route('note_types.index')}}">
        <button class="btn btn-primary">Back</button>
    </a>
@endsection
