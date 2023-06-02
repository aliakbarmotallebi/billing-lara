<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceStoreRequest;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InvoiceController extends Controller
{
    public function index(Request $request): Response
    {
        $invoices = Invoice::all();

        return view('invoice.index', compact('invoices'));
    }

    public function create(Request $request): Response
    {
        return view('invoice.create');
    }

    public function store(InvoiceStoreRequest $request): Response
    {
        $invoice = Invoice::create($request->validated());

        $request->session()->flash('invoice.name', $invoice->name);

        return redirect()->route('invoice.index');
    }
}
