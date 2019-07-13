<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteTypeRequest;
use App\NoteType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NoteTypeController extends Controller
{
    public function index()
    {
        $note_types = NoteType::paginate(1);
        return view('note_types.index', compact('note_types'));
    }

    public function create()
    {
        return view('note_types.create');
    }

    public function add(NoteTypeRequest $request)
    {
        $note_type = new NoteType();
        $note_type->name = $request->name;
        $note_type->description = $request->description;
        $note_type->save();
        Session::flash('message', 'Tạo thành công');
        return redirect()->route('note_types.index');
    }

    public function edit($id)
    {
        $note_type = NoteType::findOrFail($id);
        return view('note_types.edit', compact('note_type'));
    }

    public function update(Request $request, $id)
    {
        $note_type = NoteType::findOrFail($id);
        $note_type->name = $request->name;
        $note_type->description = $request->description;
        $note_type->save();
        Session::flash('message', 'Chỉnh sửa thành công');
        return redirect()->route('note_types.index');
    }

    public function delete($id)
    {
        $note_type = NoteType::findOrFail($id);
        return view('note_types.delete', compact('note_type'));
    }

    public function destroy($id)
    {
        $note_type = NoteType::findOrFail($id);
        $note_type->delete();
        Session::flash('message', 'Đã xóa');
        return redirect()->route('note_types.index');
    }

    public function show($id)
    {
        $note_type = NoteType::findOrFail($id);
        return view('note_types.show', compact('note_type'));
    }

}
