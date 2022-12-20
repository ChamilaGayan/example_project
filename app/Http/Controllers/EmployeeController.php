<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addPage()
    {
        return view('add_employees');
    }

    public function viewPage()
    {
        return view('view_employees');
    }

    public function editPage()
    {
        return view('update_employees');
    }
}
