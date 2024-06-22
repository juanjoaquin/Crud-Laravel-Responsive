<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{
    public function index() 
    {
        // $notes = Note::all();
        // $notes = Note::latest()->get();
        $notes = Note::latest()->paginate(6);
        return view('note.index', compact('notes'));
    }

    public function create() 
    {
        return view('note.create');
    }

    public function store(NoteRequest $request): RedirectResponse
    {

        $note = Note::create($request->all());

        return redirect()->route('note.index')->with('success', 'Note created');
    }

    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    public function show(Note $note) 
    {
        return view('note.update', compact('note'));
    }

    public function destroy(Request $request, Note $note)
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
    }

    public function refresh() {
        return redirect()->route('note.index');
    }
}
