<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Database\HomeNumber;
use Illuminate\Http\Request;
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

    public function updateHomeText(Request $request, OneRowPage $home)
    {
        $home->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    public function updateHomeNumbers(Request $request)
    {
        $students = HomeNumber::where('type', 'students')->first();
        $students->update([
            'number' => $request->students['number'],
            'mark' => $request->students['mark']
        ]);
        $courses = HomeNumber::where('type', 'courses')->first();
        $courses->update([
            'number' => $request->courses['number'],
            'mark' => $request->courses['mark']
        ]);
        $instructors = HomeNumber::where('type', 'instructors')->first();
        $instructors->update([
            'number' => $request->instructors['number'],
            'mark' => $request->instructors['mark']
        ]);

        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    // Versions
    public function showVersions()
    {
        $content = OneRowPage::where('page', 'versions')->first();
        return view('admin.pages.versions', compact('content'));
    }

    public function updateVersions(Request $request, OneRowPage $versions)
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

    public function updateCommercial(Request $request, OneRowPage $commercial)
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

    public function updateReference(Request $request, OneRowPage $reference)
    {
        $reference->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
