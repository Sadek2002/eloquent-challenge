<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Company;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        $companies = Company::all();

        return view('profiles.index', ['profiles' => $profiles, 'companies' => $companies]);
    }
}
