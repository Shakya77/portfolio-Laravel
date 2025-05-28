<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpDemoController extends Controller
{
    public function store()
    {
        return response()->json([
            'message' => 'Demo signup successful. We will contact you soon.'
        ], 201);
    }
}
