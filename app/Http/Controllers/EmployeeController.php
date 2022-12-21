<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class EmployeeController extends Controller
{
    public function addPage()
    {
        $company = Company::get();
        return view('add_employees', ['companies'=> $company]);
        // return view('add_employees');
    }

    public function viewPage()
    {
        $employee = Employee::get();
        return view('view_employees', ['employees'=> $employee]);
    }

    public function editPage($id)
    {
        $company = Company::get();
        $employee = Employee::find($id);
        return view('update_employees', compact('employee'), ['companies'=> $company]);
    }


    //add employee
    public function addemployee(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required|min:2|max:1000',
            'nick_name' => 'required|max:1000',

            ],[
            'full_name.required' => ' The full name field is required.',
            'nick_name.required' => ' The nick name field is required.',

            ]);

            Employee::create([
                    'full_name' => $request->full_name,
                    'nick_name' => $request->nick_name,
                    'company' => $request->company,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'position' => $request->position
                ]);


        return redirect()->back()->with('status','Employee Successfully Added');
    }


    //update employee
    public function employeeUpdate(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->full_name = $request->input('full_name');
        $employee->nick_name = $request->input('nick_name');
        $employee->company = $request->input('company');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->position = $request->input('position');
        $employee->update();
        return redirect()->back()->with('status','Employee Successfully Updated');
    }

    //delete employee
    public function employeeDelete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        $employee = Employee::get();
        return view('view_employees', ['employees'=> $employee]);
    }
}
