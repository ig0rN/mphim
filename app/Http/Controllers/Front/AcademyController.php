<?php

namespace App\Http\Controllers\Front;

use App\Database\Academy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademyController extends Controller
{
    public function showIndex()
    {
        $content = Academy::where('name', 'Academy')->first();
        return view('pages.academy.index')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }

    public function showCompany()
    {
        $content = Academy::where('name', 'Training4Company')->first();
        return view('pages.academy.company')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }
    
    public function showAgent()
    {
        $content = Academy::where('name', 'Training4Agent')->first();
        return view('pages.academy.agent')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }
    
    public function showAdvisor()
    {
        $content = Academy::where('name', 'Training4Advisor')->first();
        return view('pages.academy.advisor')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }
    
    public function showManager()
    {
        $content = Academy::where('name', 'Training4Manager')->first();
        return view('pages.academy.manager')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }
}
