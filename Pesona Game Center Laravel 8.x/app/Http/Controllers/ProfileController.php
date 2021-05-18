<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('user.profile');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $storeData = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|max:255',
    //         'phone' => 'required|numeric',
    //         'password' => 'required|max:255',
    //     ]);
    //     $student = Profile::create($storeData);

    //     return redirect('/students')->with('completed', 'Student has been saved!');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $student = Profile::findOrFail($id);
    //     return view('edit', compact('student'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $updateData = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|max:255',
    //         'phone' => 'required|numeric',
    //         'password' => 'required|max:255',
    //     ]);
    //     Profile::whereId($id)->update($updateData);
    //     return redirect('/students')->with('completed', 'Student has been updated');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $student = Profile::findOrFail($id);
    //     $student->delete();

    //     return redirect('/students')->with('completed', 'Student has been deleted');
    // }

}
