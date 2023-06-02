<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseStoreRequest;
use App\Models\Purchase;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PurchaseController extends Controller
{
    public function index(Request $request): Response
    {
        $purchases = Purchase::all();

        return view('purchase.index', compact('purchases'));
    }

    public function create(Request $request): Response
    {
        return view('purchase.create');
    }

    public function store(PurchaseStoreRequest $request): Response
    {
        $purchase = Purchase::create($request->validated());

        $request->session()->flash('purchase.name', $purchase->name);

        return redirect()->route('purchase.index');
    }
}
