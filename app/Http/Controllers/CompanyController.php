<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCompanyRequest $request)
    {
        $company = new Company();
        $company->name = $request->input('name');
        $company->industry = $request->input('industry');
        $company->bio = $request->input('bio');
        $company->headquarter = $request->input('headquarter');

        if ($request->has('links')) {
            $company->links = $request->input('links');
        }

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos'); 
            $company->logo = $logoPath; 
        }

        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->name = $request->input('name');
        $company->industry = $request->input('industry');
        $company->bio = $request->input('bio');
        $company->headquarter = $request->input('headquarter');

        if ($request->has('links')) {
            $company->links = $request->input('links');
        } 

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos'); 
            $company->logo = $logoPath; 
        }

        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company updated successfully!');

    }
    /**
     * Soft delete the specified resource from storage.
     */
    public function softDelete(Company $company)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
    }
}
