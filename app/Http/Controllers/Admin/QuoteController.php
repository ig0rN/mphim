<?php

namespace App\Http\Controllers\Admin;

use App\Database\Quote;
use App\Http\Requests\QuoteRequest;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::all();
        return view('admin.pages.quote.list', compact('quotes'));
    }

    public function create()
    {
        return view('admin.pages.quote.create');
    }

    public function store(QuoteRequest $request)
    {
        Quote::create($request->all());
        return redirect()->route('admin.quotes')->with(['success' => 'You successfuly created quote']);
    }
    
    public function edit(Quote $quote)
    {
        return view('admin.pages.quote.edit', compact('quote'));
    }
    
    public function update(QuoteRequest $request, Quote $quote)
    {
        $quote->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect()->route('admin.quotes')->with(['success' => 'You successfuly deleted quote']);
    }
}
