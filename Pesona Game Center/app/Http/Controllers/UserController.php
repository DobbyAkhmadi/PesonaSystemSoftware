<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Home;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Construct the specified resource in db.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Home::all();

        return view('user.home', compact(['data']));
    }
}
