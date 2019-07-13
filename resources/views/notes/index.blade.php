@extends('layout.app')
@section('namePage', 'index note')
@section('content')
    <form class="form-control" action="{{route('notes.search')}}" method="post">
        @csrf
        <input class="input-group-text" type="text" name="keyword">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <table class="table table-sm table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($notes as $key => $note)
            <tbody>
            <tr>
                <th scope="row">{{$key++}}</th>
                <td>{{$note->title}}</td>
                <td>{{$note->content}}</td>
                <td>{{$note->type_id}}</td>
                <td>
                    <a href="{{route('notes.edit',$note->id)}}">
                        <button type="button" class="btn btn-primary">Update</button>
                    </a>
                    <a href="{{route('notes.delete',$note->id)}}">
                        <button type="button" class="btn btn-dark">Delete</button>
                    </a>
                    <a href="{{route('notes.show',$note->id)}}">
                        <button type="button" class="btn btn-link">Show</button>
                    </a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <a href="{{route('notes.create')}}">
        <button type="button" class="btn btn-link">Add</button>
    </a>
@endsection