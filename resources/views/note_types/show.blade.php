@extends('layout.app')
@section('namePage', 'show note_type')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$note_type->id}}</th>
            <td>{{$note_type->name}}</td>
            <td>{{$note_type->description}}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('note_types.index')}}">
        <button type="button" class="btn btn-outline-warning">Back</button>
    </a>
@endsection
