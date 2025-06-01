<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\SchoolDemo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignUpDemoController extends Controller
{
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'schoolName' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json(["success" => false, "message" => $validator->errors()->all()], 200);
        }

        $school_demo = new SchoolDemo();
        $school_demo->full_name = request()->name;
        $school_demo->email = request()->email;
        $school_demo->school_name = request()->schoolName;
        $school_demo->phone = request()->phone;
        $school_demo->message = request()->message;
        $school_demo->save();
        if ($school_demo->save()) {
            return response()->json([
                'success' => true,
                'header' => 'Thank You!',
                'message' => 'Demo signup successful. We will contact you soon.'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Demo signup failed. Please try again.'
            ], 500);
        }
    }
}
