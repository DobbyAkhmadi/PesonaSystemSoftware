<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            $id = Auth::id();
            $history = DB::select("CALL sp_historyorder('" . $id . "')");
            // dd($history);
            return view('user.history', compact(['history']));
        }
    }
}
