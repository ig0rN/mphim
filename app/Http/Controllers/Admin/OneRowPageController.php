<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Http\Requests\VersionsRequest;
use App\Http\Requests\CommercialRequest;
use App\Http\Requests\ReferenceRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\PressRequest;
use App\Http\Requests\PrivacyPolicyRequest;

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

    // Press
    public function showPress()
    {
        $content = OneRowPage::where('page', 'press')->first();
        return view('admin.pages.press', compact('content'));
    }

    public function updatePress(PressRequest $request, OneRowPage $press)
    {
        $press->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    // Privacy Policy
    public function showPrivacyPolicy()
    {
        $content = OneRowPage::where('page', 'privacy-policy')->first();
        return view('admin.pages.privacy-policy', compact('content'));
    }

    public function updatePrivacyPolicy(PrivacyPolicyRequest $request)
    {
        $privacyPolicy = OneRowPage::where('page', 'privacy-policy')->first();

        $privacyPolicy->update($request->all());
        
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
