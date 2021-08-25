<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\userMiddleware;
use Illuminate\Http\Request;
use App\Models\OrderInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            $id = Auth::id();
            $data = DB::select("CALL sp_vieworder('" . $id . "')");
            $detail = DB::select("CALL sp_detailorder('" . $id . "')");
            // dd($data);
            $sum = 0;
            foreach ($detail as $row) {
                $sum += $row->pricetemp * $row->qty;
            }
            // dd($sum);
            return view('user.OrderInfo', compact(['data', 'detail', 'sum']));
        }
    }
}
