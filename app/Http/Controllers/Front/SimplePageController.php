<?php

namespace App\Http\Controllers\Front;

use App\Database\OneRowPage;
use App\Database\HomeNumber;
use App\Database\Mphim;
use App\Database\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SimplePageController extends Controller
{
    public function showHome()
    {
        $content = OneRowPage::where('page', 'home')->first();
        $students = HomeNumber::where('type', 'students')->first();
        $courses = HomeNumber::where('type', 'courses')->first();
        $instructors = HomeNumber::where('type', 'instructors')->first();
        return view('pages.home')
                ->with([
                    'content' => $content,
                    'students' => $students,
                    'courses' => $courses,
                    'instructors' => $instructors,
                    'language' => app()->getLocale()
                ]);
    }

    public function showMphim()
    {
        $whatIs = Mphim::where('name', 'What is')->first();
        $whatDoes = Mphim::where('name', 'What does it do')->first();
        $whyTo = Mphim::where('name', 'Why to have it')->first();
        return view('pages.mphim')
                ->with([
                    'whatIs' => $whatIs,
                    'whatDoes' => $whatDoes,
                    'whyTo' => $whyTo,
                    'language' => app()->getLocale()
                ]);
    }

    public function showCustomers()
    {
        $companies = Customer::where('name', 'Companies')->first();
        $proffesionals = Customer::where('name', 'Professionals')->first();
        $tradeAssoc = Customer::where('name', 'Trade associations')->first();
        $publicIns = Customer::where('name', 'Public institutions')->first();
        $schools = Customer::where('name', 'Schools')->first();
        $university = Customer::where('name', 'University')->first();
        return view('pages.customers')
                ->with([
                    'companies' => $companies,
                    'proffesionals' => $proffesionals,
                    'tradeAssoc' => $tradeAssoc,
                    'publicIns' => $publicIns,
                    'schools' => $schools,
                    'university' => $university,
                    'language' => app()->getLocale()
                ]);
    }

    public function showVersions()
    {
        $content = OneRowPage::where('page', 'versions')->first();
        return view('pages.versions')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }

    public function showCommercial()
    {
        $content = OneRowPage::where('page', 'commercial')->first();
        return view('pages.commercial')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }

    public function showReference()
    {
        $content = OneRowPage::where('page', 'reference')->first();
        return view('pages.reference')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }
}
