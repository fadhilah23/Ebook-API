<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119044,
        'name' => 'Fadhilah Wanda Almira',
        'gender' => 'Perempuan',
        'phone' => '085293809149',
        'class' => 'XII RPL 2'];
  }
}