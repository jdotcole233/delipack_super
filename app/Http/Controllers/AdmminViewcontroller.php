<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Company;
use App\Company_address;
use App\Company_social_media;
use Image;

class AdmminViewcontroller extends Controller{
    //Methods that would help manipulate the views of the
    //Admin Dashboard

    public function __construct(){
        $this->middleware('auth');
    }


    //method to view the index page
    public function index(){
        return view('welcome');
    }

    //method to view and send companies data to the list of companies page
    public function viewCompany(){
      $company_data = Company::join('company_addresses','companies.id','company_addresses.company_id')->get();
      return view('company',\compact('company_data'));
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
           $company_logo = strtolower(str_replace(' ','',$company_data->company_name)) . $company_data->id ."." . $file->getClientOriginalExtension();
           $file = Image::make($request->file('company_logo_path'))->resize(150,150);
           $file->mask($circle,false);
           $file->save(public_path($destinationPath.$company_logo));
        }



        $company_data->update(["company_logo_path"=>$company_logo]);


      Company_address::create([
        "address"=>$request->address,
        "region"=>$request->region,
        "area"=>$request->area,
        "city"=>$request->city,
        "company_id"=>$company_data->id,
      ]);

      return redirect()->back()->with('success','Company Information saved successfully');
    }


    function saveImage(){

    }

}
