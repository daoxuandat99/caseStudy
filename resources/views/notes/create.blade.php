@extends('layout.app')
@section('namePage', 'create note')
@section('content')
    <form action="{{route('notes.add')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content"
                   style="height: 100px" required>
        </div>
        <div class="form-group">
            <label>Type</label>
            <select class="form-control" name="type_id">
                @foreach($note_types as $note_type)
                    <option value="{{ $note_type->id }}">{{ $note_type->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-group">Add</button>
        <a href="{{route('notes.index')}}">
            <button type="button" class="btn btn-outline-warning">Back</button>
        </a>
    </form>
@endsection
