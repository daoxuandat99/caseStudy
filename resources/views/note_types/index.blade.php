@extends('layout.app')
@section('namePage', 'list note_type')
@section('content')
    {{$note_types->links()}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($note_types as $key => $note_type)
            <tbody>
            <tr>
                <th scope="row">{{$key++}}</th>
                <td>{{$note_type->name}}</td>
                <td>{{$note_type->description}}</td>
                <td>
                    <a href="{{route('note_types.edit',$note_type->id)}}">
                        <button type="button" class="btn btn-primary">Update</button>
                    </a>
                    <a href="{{route('note_types.delete',$note_type->id)}}">
                        <button type="button" class="btn btn-danger"
                                onclick="return confirm('Bạn muốn xóa,' {{$note_type->name}})">Delete
                        </button>
                    </a>
                    <a href="{{route('note_types.show',$note_type->id)}}">
                        <button type="button" class="btn btn-outline-light">Show</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('note_types.create')}}">
        <button type="button" class="btn btn-group">Add</button>
    </a>
@endsection
