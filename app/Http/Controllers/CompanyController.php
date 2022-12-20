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
        $company = Company::get();
        return view('view_companies', ['companies'=> $company]);
    }

    public function editPage($id)
    {
        $company = Company::find($id);
        return view('update_companies', compact('company'));
    }

    //add company
    public function addCompany(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required|min:2|max:1000',
            'email' => 'required|max:1000',

            ],[
            'company_name.required' => ' The company name field is required.',
            'email.required' => ' The email field is required.',

            ]);


            if($request->hasFile('logo')){
                $logoName = $request->logo->getClientOriginalName();
                $request->logo->storeAs('logo',$logoName,'public');

                Company::create([
                    'company_name' => $request->company_name,
                    'email' => $request->email,
                    'logo' => $logoName,
                    'telephone' => $request->telephone,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'whatsapp' => $request->whatsapp,
                    'telegram' => $request->telegram
                ]);
            }

        return redirect()->back()->with('status','Company Successfully Added');
    }

    //update company
    public function companyUpdate(Request $request, $id)
    {
        $company = Company::find($id);
        $company->company_name = $request->input('company_name');
        $company->email = $request->input('email');
        $company->telephone = $request->input('telephone');
        $company->facebook = $request->input('facebook');
        $company->instagram = $request->input('instagram');
        $company->whatsapp = $request->input('whatsapp');
        $company->telegram = $request->input('telegram');
        $company->update();
        return redirect()->back()->with('status','Company Successfully Updated');
    }

    //delete company
    public function companyDelete($id)
    {
        $company = Company::find($id);
        $company->delete();
        $company = Company::get();
        return view('view_companies', ['companies'=> $company]);
    }
}
