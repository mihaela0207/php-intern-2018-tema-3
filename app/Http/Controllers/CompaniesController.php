<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    public function showAllCompanies()
    {
        return response()->json(Company::all());
    }

    public function showOneCompany($id)
    {
        return response()->json(Company::find($id));
    }

   public function create(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'description' => 'required|alpha'
        ]);

        $company = Company::create($request->all());

        return response()->json($company, 201);
    }

    public function update($id, Request $request)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return response()->json($company, 200);
    }

    public function delete($id)
    {
        Company::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}