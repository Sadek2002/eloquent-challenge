<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Profile;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $profiles = Profile::all();

        return view('companies.index', ['companies' => $companies, 'profiles' => $profiles]);
    }
}
