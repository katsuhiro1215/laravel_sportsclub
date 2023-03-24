<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Company $company)
    {
        $company = Company::latest()->first();

        return view('admin.company.index', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('admin.company.edit', compact('company'));
    }

    public function update(UpdateCompanyRequest $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->name = $request->name;
        $company->postcode = $request->postcode;
        $company->address1 = $request->address1;
        $company->address2 = $request->address2;
        $company->address3 = $request->address3;
        $company->phone_number = $request->phone_number;
        $company->email = $request->email;
        $company->establish_date = $request->establish_date;
        $company->website = $request->website;
        $company->facebook = $request->facebook;
        $company->twitter = $request->twitter;
        $company->instagram = $request->instagram;
        $company->youtube = $request->youtube;
        $company->line = $request->line;

        // Image
        if($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/company_images/' .$company->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/company_images'), $filename);
            $data['image'] = $filename;
        }

        $company->save();

        $notification = array(
            'message' => '更新に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('admin.company.index', compact('company'))->with($notification);
    }

    public function destroy($id)
    {
        Company::findOrFail($id)->delete();

        $notification = array(
            'message' => '削除に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('admin.company.index')->with($notification);
    }
}
