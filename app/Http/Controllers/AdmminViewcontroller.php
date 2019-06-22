<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Company;
use App\Company_address;
use App\Company_social_media;
use Image;
use App\User;
use Hash;

class AdmminViewcontroller extends Controller{
    //Methods that would help manipulate the views of the
    //Admin Dashboard

    public function __construct(){
        $this->middleware('auth:superusers');
    }


    //method to view the index page
    public function index(){
        return view('welcome');
    }

    //method to view and send companies data to the list of companies page
    public function viewCompany(){
      $company_data = Company::join('company_addresses','companies.companies_id','company_addresses.companiescompanies_id')->get();
      return view('company', compact('company_data'));
    }

    public function addCompany(Request $request){
      //validate the image file coming in
      request()->validate([
            'company_logo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
       ]);
       //register the company into companies table and return the data
       $company_data = Company::create($request->all());
       $circle = Image::canvas(150,150);
       $circle->circle(150,75,75,function($draw){
         $draw->background('#fff');
       });
       //check to see it the file
       if ($file = $request->file('company_logo_path')) {
           $destinationPath = 'company_logos/'; // upload path or ?
           $company_logo = strtolower(str_replace(' ','',$company_data->company_name)) . $company_data->id."." . $file->getClientOriginalExtension();
           $file = Image::make($request->file('company_logo_path'))->resize(150,150);
           $file->mask($circle,false);
           $file->save(public_path($destinationPath.$company_logo));
        }
      Company::where('companies_id', $company_data->id)->update(["company_logo_path"=>$company_logo]);
      Company_address::create([
        "address"=>$request->address,
        "region"=>$request->region,
        "area"=>$request->area,
        "city"=>$request->city,
        "companiescompanies_id"=> $company_data->id,
      ]);

      User::create([
        'email' => $request->company_email,
        'password' => Hash::make("123456789"),
        'companiescompanies_id' => $company_data->id
      ]);


      Company_social_media::create([
        'twitter_handle' => $request->twitter_handle,
        'instagram_handle' => $request->instagram_handle,
        'facebook_handle' => $request->facebook_handle,
        'companiescompanies_id' => $company_data->id
      ]);

      return redirect()->back()->with('success','Company Information saved successfully');
    }


    function saveImage(){

    }




}
