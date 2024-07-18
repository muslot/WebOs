<?php

namespace App\Models\Desktop;

use App\Models\Explorer;
use Illuminate\Http\Request;

class DesktopController
{
    public function index(){
        return view("desktop");
    }
}
