<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => 3103119065,
            "Nama" => "Fadhilah",
            "gender" => "Perempuan",
            "phone" => 085293809149,
            "class" => "XII RPL 2"
        ];
    }
}
