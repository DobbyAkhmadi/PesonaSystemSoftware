<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Welcome;
class WelcomeController extends Controller
{
    //
    public function index()
    {
        $data= Welcome::all();
        return view('welcome', compact(['data']));
    }
}
