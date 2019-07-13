@extends('layout.app')
@section('namePage','edit note_type')
@section('content')
    <form action="{{route('note_types.update',$note_type->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name"
                   placeholder="Enter name" name="name" value="{{$note_type->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description"
                   value="{{$note_type->description}}">
        </div>
        <button type="submit" class="btn btn-group">Update</button>
        <a href="{{route('note_types.index')}}">
            <button type="button" class="btn btn-outline-warning">Back</button>
        </a>
    </form>
@endsection
