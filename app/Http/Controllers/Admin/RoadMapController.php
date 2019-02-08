<?php

namespace App\Http\Controllers\Admin;

use App\Database\Roadmap;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoadmapRequest;

class RoadMapController extends Controller
{
    public function index()
    {
        $roadmap = Roadmap::orderBy('date', 'desc')->get();

        return view('admin.pages.roadmap.index', compact('roadmap'));
    }

    public function create()
    {
        return view('admin.pages.roadmap.create');
    }

    public function store(RoadmapRequest $request)
    {
        Roadmap::create($request->all());

        return redirect()->route('admin.roadmap.index')
                        ->with(['success' => 'You have successfully made a new roadmap event.']);
    }

    public function edit(Roadmap $roadmap)
    {
        return view('admin.pages.roadmap.edit', compact('roadmap'));
    }

    public function update(RoadmapRequest $request, Roadmap $roadmap)
    {
        $roadmap->update($request->all());

        return redirect()->route('admin.roadmap.index')
                        ->with(['success' => 'You have successfully updated a roadmap event.']);
    }

    public function destroy(Roadmap $roadmap)
    {
        $roadmap->delete();

        return redirect()->route('admin.roadmap.index')
                        ->with(['success' => 'You have successfully deleted a roadmap event.']);
    }
}
