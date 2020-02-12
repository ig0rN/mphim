<?php

namespace App\Http\Controllers\Front;

use Mail;
use Session;
use Validator;
use App\Database\Customer;
use App\Database\Mphim;
use App\Database\OneRowPage;
use App\Database\Roadmap;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact\ContactMail;
use Illuminate\Validation\Rule;

class SimplePageController extends Controller
{
    public function showHome()
    {
        $home = OneRowPage::where('page', 'home')->first();
        $roadmap = Roadmap::orderBy('date', 'desc')->get();
        $whatIs = Mphim::where('name', 'What is')->first();
        $whatDoes = Mphim::where('name', 'What does it do')->first();
        $whyTo = Mphim::where('name', 'Why to have it')->first();
        return view('pages.home')
                ->with([
                    'home' => $home,
                    'roadmap' => $roadmap,
                    'whatIs' => $whatIs,
                    'whatDoes' => $whatDoes,
                    'whyTo' => $whyTo,
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
        $banks = Customer::where('name', 'Banks')->first();
        $schools = Customer::where('name', 'Schools')->first();
        $university = Customer::where('name', 'University')->first();
        return view('pages.customers')
                ->with([
                    'companies' => $companies,
                    'proffesionals' => $proffesionals,
                    'tradeAssoc' => $tradeAssoc,
                    'publicIns' => $publicIns,
                    'banks' => $banks,
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

    public function showPress()
    {
        $content = OneRowPage::where('page', 'press')->first();
        return view('pages.press')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }

    public function showPrivacyPolicy()
    {
        $content = OneRowPage::where('page', 'privacy-policy')->first();
        return view('pages.privacy-policy')
                ->with([
                    'content' => $content,
                    'language' => app()->getLocale()
                ]);
    }

    public function showContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:190',
            'email' => 'required|email|max:190',
            'phone' => 'nullable|max:191',
            'message' => 'required|max:5000',
            'company_name' => 'nullable|max:190',
            'subject' => 'nullable|max:190',
            'email_to' => [
                'required',
                Rule::in([
                    'info@mphimplus.com',
                    'commerciale@mphimplus.com',
                    'sicilia@mphimplus.com',
                    'veneto@mphimplus.com',
                ]),
            ],
        ]);

        if ($request->website) {
            return response()->json([
                'status' => false
            ]);
        }

        if ($validator->passes()) {
            try {
                Mail::to($request->email_to)->send(new ContactMail);

                Session::flash('success', __('translate.contact_success_message'));
            } catch (Exception $e) {
                Session::flash('error', __('translate.something_went_wrong'));

                return response()->json([
                    'status' => false
                ]);
            }

            return response()->json([
                'status' => true
            ]);
        } else {
            return response()->json([
                'errors' => $validator->getMessageBag()->toArray()
            ]);
        }
    }
}
