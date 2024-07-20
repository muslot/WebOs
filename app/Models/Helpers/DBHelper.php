<?php

namespace App\Models\Helpers;


class DBHelper {
    public static function CheckConnection(){
        try {
            \DB::connection()-> getPdo();
            return true;
        }catch (\Exception $e){
            return false;
        }

    }
}