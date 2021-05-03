<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Home;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $role = Auth::user()->role;
        if($role == "admin"){
            return redirect()->to('admin');
        } else if($role == "user"){

            return redirect()->to('user');

        } else {
            return redirect()->to('logout');
        }
    }
    public function ViewGeneral()
    {
        $data= Home::all();
        return view('user/home', compact(['data']));
    }
}
