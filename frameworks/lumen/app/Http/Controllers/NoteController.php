<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $notes = Note::all();
        return response()->json($notes);
    }

    public function create(Request $request)
    {
        $note = Note::create($request->all());
        return response($note);
    }

    public function show($id)
    {
        $note = Note::find($id);
        return response()->json($note);
    }

    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        return response()->json($note);
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        if ($note == null) {
            return response()->json(['msg' => 'note not found']);
        } else if ($note->delete() > 0) {
            return response()->json(['msg' => 'successfully deleted']);
        } else {
            return response()->json(['msg' => 'error']);
        }
    }
}
