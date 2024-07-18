<?php

namespace App\Models\Notes;

use App\Models\Explorer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    
    public function index(){

        $notes = Explorer::all();
        // foreach ($notes as $note){
        //     dump($note ->title);
        // }
        // dd($notes);
        return view("notes", compact("notes"));
    }
}
