<?php
use App\Http\Controllers\BdController;
use App\Http\Controllers\MyPlaceController;
use App\Models\Helpers\DBHelper;
use Illuminate\Support\Facades\Route;
use App\Models\Notes\NotesController;
use App\Models\Desktop\DesktopController;



// Route::get('/', function () {
//     return view('welcome');
// });

if(!DBHelper::CheckConnection()){
    //Route::view('','maintenance');
    echo view('maintenance');
    die();
}

Route::get('', [NotesController::class,'index']) -> name('note.index');

Route::get('/desktop', [DesktopController::class,'index']) -> name('desktop.index');
