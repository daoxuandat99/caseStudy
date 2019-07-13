<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Http\Requests\NoteTypeRequest;
use App\Note;
use App\NoteType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        $note_types = NoteType::all();
        return view('notes.index', compact('notes', 'note_types'));
    }

    public function create()
    {
        $note_types = NoteType::all();
        return view('notes.create', compact('note_types'));
    }

    public function add(Request $request)
    {
        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->input('content');
        $note->type_id = $request->type_id;
        $note->save();
        return redirect()->route('notes.index');
    }

    public function delete($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.delete', compact('note'));
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()->route('notes.index');
    }

    public function edit($id)
    {
        $note_types = NoteType::all();
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note', 'note_types'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->title = $request->title;
        $note->content = $request->input('content');
        $note->type_id = $request->type_id;
        $note->save();
        return redirect()->route('notes.index');
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.show', compact('note'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $notes = NoteType::where('name', 'like', "%$keyword%")->paginate(1);
        if (count($notes) == 0) {
            Session::flash('message', 'Không tìm thấy');
            return view('notes.index', compact('notes'));
        }
        Session::flash('message', 'Đã tìm thấy');
        return view('notes.index', compact('notes'));
    }

}
