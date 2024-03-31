<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;

class HomepageController extends Controller
{
    public function __invoke(){
        return[
            'user' => auth()->user()
        ];
    }
}