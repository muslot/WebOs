<?php
use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;
use App\Models\Notes\NotesController;
use App\Models\Desktop\DesktopController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('', [NotesController::class,'index']) -> name('note.index');

Route::get('/desktop', [DesktopController::class,'index']) -> name('desktop.index');
