<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Http\Requests\VersionsRequest;
use App\Http\Requests\CommercialRequest;
use App\Http\Requests\ReferenceRequest;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OneRowPageController extends Controller
{
    // Versions
    public function showVersions()
    {
        $content = OneRowPage::where('page', 'versions')->first();
        return view('admin.pages.versions', compact('content'));
    }

    public function updateVersions(VersionsRequest $request, OneRowPage $versions)
    {
        $versions->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    // Commercial
    public function showCommercial()
    {
        $content = OneRowPage::where('page', 'commercial')->first();
        return view('admin.pages.commercial', compact('content'));
    }

    public function updateCommercial(CommercialRequest $request, OneRowPage $commercial)
    {
        $commercial->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    // Reference
    public function showReference()
    {
        $content = OneRowPage::where('page', 'reference')->first();
        return view('admin.pages.reference', compact('content'));
    }

    public function updateReference(ReferenceRequest $request, OneRowPage $reference)
    {
        $reference->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    public function showHome()
    {
        $content = OneRowPage::where('page', 'home')->first();
        return view('admin.pages.home', compact('content'));
    }

    public function updateHome(ReferenceRequest $request, OneRowPage $home)
    {
        $home->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
