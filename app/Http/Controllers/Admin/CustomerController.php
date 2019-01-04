<?php

namespace App\Http\Controllers\Admin;

use App\Database\Customer;
use App\Http\Requests\CustomerRequest;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.pages.customers.list', compact('customers'));
    }

    public function edit(Customer $customer)
    {
        return view('admin.pages.customers.edit', compact('customer'));
    }
    
    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
