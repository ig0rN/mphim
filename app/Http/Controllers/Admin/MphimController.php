<?php

namespace App\Http\Controllers\Admin;

use App\Database\Mphim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MphimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Mphim::all();

        return view('admin.pages.mphim.list', compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Database\Mphim  $mphim
     * @return \Illuminate\Http\Response
     */
    public function show(Mphim $mphim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Database\Mphim  $mphim
     * @return \Illuminate\Http\Response
     */
    public function edit(Mphim $text)
    {
        return view('admin.pages.mphim.edit', compact('text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Database\Mphim  $mphim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mphim $text)
    {
        $text->update($request->all());

        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Database\Mphim  $mphim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mphim $mphim)
    {
        //
    }
}
