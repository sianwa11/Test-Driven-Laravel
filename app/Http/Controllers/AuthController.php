<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store()
    {
        Author::create(\request()->only(['name', 'dob']));
    }

    public function validateRequest() {
        \request()->validate([]);
    }
}
