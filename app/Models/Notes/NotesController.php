<?php

namespace App\Models\Notes;

use App\Models\Explorer;
use App\Models\Helpers\DBHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{

    public function index()
    {
        $notes = Explorer::all();
        return view("notes", compact("notes"));
        
    }
}
