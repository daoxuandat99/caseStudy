@extends('layout.app')
@section('namePage', 'edit note')
@section('content')
    <form action="{{route('notes.update',$note->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title"
                   value="{{$note->title}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content"
                   value="{{$note->content}}">
        </div>
        <div class="form-group">
            <label>Type</label>
            <select class="form-control" name="type_id">
                @foreach($note_types as $note_type)
                    <option value="{{ $note_type->id }}">{{ $note_type->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-group">Update</button>
        <a href="{{route('notes.index')}}">
            <button type="button" class="btn btn-outline-warning">Back</button>
        </a>
    </form>
@endsection
