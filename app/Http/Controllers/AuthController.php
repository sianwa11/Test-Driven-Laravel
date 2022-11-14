<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store()
    {

        Author::create($this->validateRequest());
    }

    public function validateRequest() {
        return \request()->validate([
            'name' => 'required',
            'dob' => 'required'
        ]);
    }
}
