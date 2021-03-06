<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Company;
use App\Company_address;
use App\Company_social_media;
use Image;
use App\User;
use App\Transaction;
use App\Motor_bike;
use App\Companies_rider;
use App\Rating;
use App\Subscription;
use Hash;
use Carbon\Carbon;
use App\SmsMessaging;

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


    private function subscriptionGet($companies_id){
        $subscriptions = Subscription::where('companycompanies_id',$companies_id)
        ->select('subscription_id','subscription_type','renewal_duration','created_at')
        ->latest()
        ->first();


      $created_at = date_format(date_create($subscriptions->created_at),"Y-m-d");
      $renewal_date = date_format(date_create($subscriptions->renewal_duration),"Y-m-d");
       $difference = date_diff(date_create($created_at),date_create($renewal_date))->format("%m");

       $subs = [
           "subscription_id" => $subscriptions->subscription_id,
           "subscription_type" => $subscriptions->subscription_type,
           "subscription_duration" => $difference
       ];

      return $subs;
    }


    //method to view and send companies data to the list of companies page
    public function companies(){
      $company_data = Company::join('company_addresses','companies.companies_id','company_addresses.companiescompanies_id')
                      ->join('users', 'companies.companies_id', 'users.companiescompanies_id')
                      ->select('companies_id','company_name', 'company_phone_one', 'address', 'company_phone_two', 'email')
                      ->get();
      return view('company', compact('company_data'));
    }

    public function viewCompany($companies_id){
      $company_data = Company::where('companies_id', $companies_id)
                      ->join('company_addresses','companies.companies_id','company_addresses.companiescompanies_id')
                      ->join('users', 'companies.companies_id', 'users.companiescompanies_id')
                      ->join('company_socialmedia_handles', 'companies.companies_id', 'company_socialmedia_handles.companiescompanies_id')
                      ->select('companies_id','company_name','area','region','address','city','company_abbreviation','company_phone_one','company_phone_two','email','twitter_handle','instagram_handle', 'facebook_handle')
                      ->first();
      $cancelled_errands = Transaction::where('companiescompanies_id', $companies_id)
                            ->where('delivery_status', 'CANCELLED')
                            ->get()
                            ->count();

      $active_errands = Transaction::where('companiescompanies_id', $companies_id)
                            ->where('delivery_status', 'DELIVERED')
                            ->get()
                            ->count();

        $sub_logs = Subscription::where('companycompanies_id',$companies_id)->get();
      $company_rating = Rating::where('company_id', $companies_id)->sum('rate_value');
      $company_rating_size = Rating::where('company_id', $companies_id)->get()->count();
      $company_rating_size = ($company_rating_size == 0) ? 1 : $company_rating_size;
      $company_rating =  round(($company_rating / ($company_rating_size * 5)) * 5, 0);

      $total_bikes = Motor_bike::where('companiescompanies_id',$companies_id)
                      ->where('delete_status','NOT DELETED')
                      ->get()
                      ->count();

      $total_employees = Companies_rider::where('companiescompanies_id', $companies_id)
                        ->get()
                        ->count();
      $daily_transactions = Transaction::where('companiescompanies_id', $companies_id)
                           ->whereDay('transactions.created_at', date_format(Carbon::now()->toDate(),'d'))
                           ->get()
                           ->count();

      $total_transactions = Transaction::where('companiescompanies_id', $companies_id)->get()->count();

      $total_commission = Transaction::join('payments', 'transactions.transaction_id','payments.transactionstransaction_id')
                          ->where('transactions.companiescompanies_id', $companies_id)
                          ->get()
                          ->sum('commission_charge');

     $daily_commission = Transaction::join('payments', 'transactions.transaction_id','payments.transactionstransaction_id')
                        ->where('transactions.companiescompanies_id', $companies_id)
                        ->whereDay('transactions.created_at', date_format(Carbon::now()->toDate(), 'd'))
                        ->sum('commission_charge');
     $subscriptions = json_encode($this->subscriptionGet($companies_id));

      return view('viewCompany', compact('company_data','cancelled_errands',
                    'active_errands','company_rating','total_bikes','total_employees',
                    'daily_transactions','total_transactions',
                    'total_commission','daily_commission',
                    'subscriptions','sub_logs'
                ));
    }

    public function addSubscription(Request $request){
        Subscription::create([
            "subscription_type" => $request->subscription_type,
            "renewal_duration" => new Carbon("+ $request->subscription_duration month"),
            "companycompanies_id" => $request->companies_id
        ]);

        $message = "Hi ". $request->company_name. "\nYour subscription has been renewed for the next ";
        $message .= $request->subscription_duration. " months";

        $this->sendMessage($message, $this->processphonenumber($request->phone_number));

        return back()->with('success','Subscription added successfully');
    }

    public function viewSupport(){
      return view('support');
    }

    public function promotions(){
      return view('promotions');
    }



    public function addCompany(Request $request){

     $renewal = new Carbon("+". $request->subscription_duration . " month");

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

      Subscription::create([
          "subscription_type" => $request->subscription_type,
          "companycompanies_id" => $company_data->id,
          "renewal_duration" => $renewal
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

      $message = "Welcome ". $request->company_name . ".\nYour account with DeliPack ";
      $message .= "has been set up successfully. \nLogin Email: ". $request->company_email;
      $message .= "\nLogin at https://delivpackport.com";

      $this->sendMessage( $message,$this->processphonenumber($request->company_phone));
      return redirect()->back()->with('success','Company Information saved successfully ');
    }


    private function sendMessage ($message, $companyphone){
      $from =  "DELIPACK";
      $sendsms = new SmsMessaging($message, $companyphone, $from);
      $res = $sendsms->sendSMS();
    }

    private function processphonenumber($phonenumber){
        $phone = str_split($phonenumber);
        if (count($phone) == 10){
            $phone = substr($phonenumber, 1);
            $phone = "233". $phone;
        }
        return $phone;
    }


    public function updateCompany(Request $request){
      // request()->validate([
      //       'company_logo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
      //  ]);

       $company_data = Company::where('companies_id', $request->company_id)
       ->update([
         'company_name' => $request->company_name,
         'company_abbreviation' => $request->company_abbreviation,
         'company_phone_one' => $request->company_phone_one,
         'company_phone_two' => $request->company_phone_two,
       ]);

       $circle = Image::canvas(150,150);
       $circle->circle(150,75,75,function($draw){
         $draw->background('#fff');
       });


       if ($file = $request->file('company_logo_path')) {
           $destinationPath = 'company_logos/'; // upload path or ?
           $company_logo = strtolower(str_replace(' ','',$request->company_name)) . $request->company_id."." . $file->getClientOriginalExtension();
           $file = Image::make($request->file('company_logo_path'))->resize(150,150);
           $file->mask($circle,false);
           $file->save(public_path($destinationPath.$company_logo));
           Company::where('companies_id', $request->company_id)->update(["company_logo_path"=>$company_logo]);
        }

      Company_address::where('companiescompanies_id', $request->company_id)->update([
        "address"=>$request->address,
        "region"=>$request->region,
        "area"=>$request->area,
        "city"=>$request->city,
      ]);

      // User::create([
      //   'email' => $request->company_email,
      //   'password' => Hash::make("123456789"),
      //   'companiescompanies_id' => $company_data->id
      // ]);


      Company_social_media::where('companiescompanies_id', $request->company_id)->update([
        'twitter_handle' => $request->twitter_handle,
        'instagram_handle' => $request->instagram_handle,
        'facebook_handle' => $request->facebook_handle,
      ]);

      return redirect()->back()->with('success','Company Information updated successfully');
    }




    function saveImage(){

    }










}
