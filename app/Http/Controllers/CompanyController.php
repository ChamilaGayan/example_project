<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function addPage()
    {
        return view('add_companies');
    }

    public function viewPage()
    {
        return view('view_companies');
    }

    public function editPage()
    {
        return view('update_companies');
    }
}
