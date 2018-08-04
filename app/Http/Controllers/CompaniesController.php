<?php

namespace App\Http\Controllers;

use App\Company;

class CompaniesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return all companies
     */
    public function showAllCompanies(){

        $companies = Company::all();
        
        return json_encode($companies);
    }

    public function getCompanyById($id){
        // $company = Company::getById($id);

        $company = Company::find($id);


        // return json_encode($company);
    }

    public function getCompanyByType($type){
        echo 2;
        $companies = Company::where('type',$type)->get();

        // return json_encode($companies);
    }
}
