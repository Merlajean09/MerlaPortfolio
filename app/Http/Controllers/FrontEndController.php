<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $user= DB::table('users')->where('email','hohay@gmail.com')->get();

        $skills = DB::table('skills')->get();
        $abouts = DB::table('abouts')->get();
        $experiences = DB::table('experiences')->get();
        $webinars = DB::table('webinars')->get();
        $blogs = DB::table('blogs')->get();
        $education = DB::table('education')->get();
        return view ('welcome', compact('skills', 'abouts','experiences','webinars','blogs','education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
