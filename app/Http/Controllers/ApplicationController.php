<?php

namespace App\Http\Controllers;

use App\Mail\UserApplication;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => ['required', 'string','regex:/^([А-Я][а-я]{0,}([ -][А-Я][а-я]{0,}){0,7})$/u'],
            'phone_number' => ['required', 'numeric', 'digits:10'],
            'email' => ['required', 'string', 'regex:/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);   
        } 

        $userData = [
            'name' => $request->name,
            'email' => strtolower($request->email),
            'phone_number' => "8" . $request->phone_number,
        ];

        Application::create($userData);
            
        Mail::to('administratorsite@gmail.com')->send(new UserApplication($userData));

        return response()->json(['message' => "Заявка отправлена!"], 200);

    }
}
