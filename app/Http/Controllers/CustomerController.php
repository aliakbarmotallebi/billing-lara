<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(Request $request): Response
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create(Request $request): Response
    {
        return view('customer.create');
    }

    public function store(CustomerStoreRequest $request): Response
    {
        $customer = Customer::create($request->validated());

        $request->session()->flash('customer.name', $customer->name);

        return redirect()->route('customer.index');
    }
}
