@extends('layout.app')
@section('namePage', 'create note_type')
@section('content')
    <form action="{{route('note_types.add')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name"
                   placeholder="Enter name" name="name" required>
            @if($errors->has('name'))
                <p class="alert-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
            @if($errors->has('description'))
                <p class="alert-danger">{{$errors->first('description')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-group">Add</button>
        <a href="{{route('note_types.index')}}">
            <button type="button" class="btn btn-outline-warning">Back</button>
        </a>
    </form>
@endsection
