<?php

namespace App\Http\Controllers\Admin;

use App\Database\Mphim;
use App\Http\Requests\MphimRequest;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MphimController extends Controller
{
    public function index()
    {
        $texts = Mphim::all();
        return view('admin.pages.mphim.list', compact('texts'));
    }
    
    public function edit(Mphim $text)
    {
        return view('admin.pages.mphim.edit', compact('text'));
    }

    public function update(MphimRequest $request, Mphim $text)
    {
        $text->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
