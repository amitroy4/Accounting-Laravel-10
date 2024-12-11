<?php

namespace App\Http\Controllers\Admin;

use App\Models\CurrencyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Monarobase\CountryList\CountryListFacade as Countries;

class CurrencyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::getList('en'); // Retrieve countries in English
        $currencytypes = CurrencyType::all();
        $currencytype = 0;
        return view('admin.configure.currency_type.currency-type', compact('countries','currencytypes','currencytype'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'currency_name' => 'required|string|max:255',
            'currency_short_name' => 'nullable|string|max:255',
            'currency_code' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);

        CurrencyType::create($request->all());
        return redirect()->route('currency_type.index')->with('success', 'Currency Type created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $countries = Countries::getList('en'); // Retrieve countries in English
        $currencytypes = CurrencyType::all();
        $currencytype = CurrencyType::findOrFail($id);
        return view('admin.configure.currency_type.currency-type',compact('countries','currencytype','currencytypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'currency_name' => 'required|string|max:255',
            'currency_short_name' => 'nullable|string|max:255',
            'currency_code' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);

        // Find the currency by ID
        $currency = CurrencyType::findOrFail($id);

        // Update the fields explicitly
        $currency->currency_name = $request->currency_name;
        $currency->currency_short_name = $request->currency_short_name;
        $currency->currency_code = $request->currency_code;
        $currency->status = $request->status;
        $currency->save();

        $countries = Countries::getList('en'); // Retrieve countries in English
        $currencytypes = CurrencyType::all();
        $currencytype = 0;

        // Redirect back with success message
        session()->flash('success', 'Currency Type Updated successfully!');

        return view('admin.configure.currency_type.currency-type', compact('countries', 'currencytype', 'currencytypes'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the Currency by ID
        $currency_type = CurrencyType::findOrFail($id);
        $currency_type->delete();

        // Redirect back with a success message
        return redirect()->route('currency_type.index')->with('success', 'Currency Type deleted successfully!');
    }

    public function activeordeactive(string $id)
    {
        $currency_type = CurrencyType::findOrFail($id);

        $currency_type->status = !$currency_type->status;
        $currency_type->save();

        return redirect()->back()->with('success', 'Status Changed successfully!');

    }
}
