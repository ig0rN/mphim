<?php

namespace App\Http\Controllers\Admin;

use App\Database\Academy;
use App\Http\Requests\AcademyRequest;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademyController extends Controller
{
    public function index()
    {
        $academies = Academy::all();
        return view('admin.pages.academy.list', compact('academies'));
    }
    
    public function edit(Academy $academy)
    {
        return view('admin.pages.academy.edit', compact('academy'));
    }
    
    public function update(AcademyRequest $request, Academy $academy)
    {
        $academy->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
