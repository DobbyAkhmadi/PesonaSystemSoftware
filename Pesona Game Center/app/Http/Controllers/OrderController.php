<?php

namespace App\Http\Controllers;

use App\Models\foods;
use App\Models\Packages;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $foods = Foods::all();
        $packages = Packages::all();
        // dd($packages);
        return view('user.Order', compact(['foods', 'packages']));
    }
    public function AddItem()
    {
    }
}
