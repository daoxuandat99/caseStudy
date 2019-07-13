@extends('layout.app')
@section('namePage','show note')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Type</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$note->id}}</th>
            <td>{{$note->title}}</td>
            <td>{{$note->content}}</td>
            <td>{{$note->noteType->name}}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('notes.index')}}">
        <button type="submit" class="btn btn-outline-warning">Back</button>
    </a>
@endsection
