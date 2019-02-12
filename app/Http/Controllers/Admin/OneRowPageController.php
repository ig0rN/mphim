<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Http\Requests\HomePageRequest;
use App\Http\Requests\HomePageNumbersRequest;
use App\Http\Requests\VersionsRequest;
use App\Http\Requests\CommercialRequest;
use App\Http\Requests\ReferenceRequest;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OneRowPageController extends Controller
{
    // Home Page
    public function showHome()
    {
        $content = OneRowPage::where('page', 'home')->first();
        $students = HomeNumber::where('type', 'students')->first();
        $courses = HomeNumber::where('type', 'courses')->first();
        $instructors = HomeNumber::where('type', 'instructors')->first();
        return view('admin.pages.home-page')
                ->with([
                    'content' => $content,
                    'students' => $students,
                    'courses' => $courses,
                    'instructors' => $instructors
                ]);
    }

    public function updateHomeText(HomePageRequest $request, OneRowPage $home)
    {
        $home->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

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
}
