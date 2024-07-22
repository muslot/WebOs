<?php

namespace App\Models\Notes;

use App\Models\Explorer;
use App\Models\Helpers\DBHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public $currentEditFolderId = null;

    public function index()
    {
        $notes = Explorer::all();
        return view('notes', [
            'notes' => $notes
        ]);

    }

    public function NameEdit($id)
    {
        $notes = Explorer::find($id);
        return view('note.edit', compact('notes'));
    }


}
