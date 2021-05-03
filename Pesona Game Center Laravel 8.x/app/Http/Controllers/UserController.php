<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('user.home');
    }


}
