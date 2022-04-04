<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use session;
use App\Models\Kyc;
use App\Models\Pool;
use App\Models\State;
use App\Models\Upool;
use App\Models\DdaKyc;
use App\Models\Sector;
use App\Models\Analyst;
use App\Models\Company;
use App\Models\Country;
use App\Models\Industry;
use App\Models\Investor;
use App\Models\Incubator;
use App\Models\CompanyDoc;
use App\Models\Enterprise;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }







            public function profile()
            {
                  $states = State::all();
                return view('users.profile', compact('states'));
            }



            public function profileUpdate(Request $request)
                {
                $user = Auth::user();


                        $user->name = $request['name'];
                        $user->phone = $request['phone'];
                        $user->member_type = $request['member_type'];
                        $user->gender = $request['gender'];
                        $user->phone = $request['phone'];
                        $user->dob = $request['dob'];
                        $user->user_company = $request['user_company'];
                        $user->state_id = $request['state_id'];



                        $user->save();




                  return redirect()->back()->with('success', 'Profile Updated');
                }





                    public function profilePassword(Request $request)
                    {
                    $user = Auth::user();


                    if($request['password'] !=""){
                        if(!(Hash::check($request['password'], Auth::user()->password))){
                            return redirect()->back()->with('error', 'Your current Password does not match');
                        }

                        if(strcmp($request['password'], $request['new_password']) == 0){
                            return redirect()->back()->with('error', 'New password cannot be the same as current password');
                        }

                        $validation = $request->validate([
                            'password' => 'required',
                            'new_password' => 'required|string|min:6'
                        ]);

                        $user->password = bcrypt($request['new_password']);
                        $user->save();

                        return redirect()->back()->with('success', 'Password Updated');
                    }

                    return back();
                    }






                public function profilePicture(Request $request){

                    $user = Auth::user();

                    $fileExt = $request->avatar->getClientOriginalExtension();
                    $email = $user->email.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                    $avatarName = config('app.url').'/images/'.$email;


                    $request->avatar->move(public_path('images'),$avatarName);

                    $user->avatar = $avatarName;

                    $user->save();

                    return back()->with('success','You have successfully upload image.');

                }








             public function investors()
                {

                      $investors = Investor::all();
                    return view('users.investors', compact('investors'));

                }

                public function investor($id)
                {


                    $company = Company::where('id', $id)->first();
                    $countries = Country::all();
                    $states = State::all();
                    return view('users.investor' , compact('company', 'countries','states'));
                }




                     public function analysts()
            {

                $analysts = Analyst::all();
                return view('users.analysts', compact('analysts'));

            }


            public function analyst($id)
                {


                    $company = Company::where('id', $id)->first();
                    $countries = Country::all();
                    $states = State::all();
                    return view('users.analyst' , compact('company', 'countries','states'));
                }





                 public function incubators()
                    {

                        $incubators = Incubator::all();
                        return view('users.incubators', compact('incubators'));

                    }


            public function incubator($id)
                {



                    $company = Company::where('id', $id)->first();
                    $incubators = Incubator::whereIn('company_id', $company)->get();
                    $pools = Pool::whereIn('incubator_id', $incubators)->get();
                    $enterprises = Enterprise::whereIn('company_id', $company)->get();
                    $countries = Country::all();
                    $states = State::all();



                    return view('users.incubator' , compact('company','countries', 'states', 'pools', 'enterprises'));
                }





                 public function pools()
            {



                $pools =  Pool::with('incubator.company')->get();

                return view('users.pools', compact('pools'));

            }




            public function pool($id)
            {


                $pool = Pool::where('id', $id)->first();
                $industries = Industry::all();
                $incubators = Incubator::all();
                $countries = Country::all();
                return view('users.pool' , compact('pool', 'industries','incubators','countries'));
            }




              public function upools()
            {



                $upools =  Upool::all();

                return view('users.upools', compact('upools'));

            }




            public function upool($id)
            {

                $message = Upool::find($id);






                $upool = Upool::where('id', $id)->first();

                $industries = Industry::all();
                $countries = Country::all();
                $states = State::all();


                return view('users.upool' , compact('upool', 'industries', 'countries','states'));
            }






                 public function add_enterprise()
                        {
                            $industries = Industry::all();
                            $state_list = DB::table('states')->pluck("name","id");
                            return view('users.add_enterprise',compact('state_list', 'industries'));
                        }







            public function submitKYC(Request $request)
            {
               $kyc = new Kyc();
                $user = Auth::user();
                $user_id = $user->id;
                $user_email = $user->email;
                $user_name = $user->name;
                $app_id = 'NASD' . mt_rand(1000000000, 9999999999);




                $kyc->name = $request['name'];
                $kyc->user_id = $user_id;
                $kyc->profile = $request['profile'];
                $kyc->growth_stage = $request['growth_stage'];
                $kyc->exp = $request['exp'];
                $kyc->number = $request['number'];
                $kyc->toi = $request['toi'];
                $kyc->tof = $request['tof'];
                $kyc->ylaf = $request['ylaf'];
                $kyc->ylaf_turnover = $request['ylaf_turnover'];
                $kyc->amount = $request['amount'];
                $kyc->state_id = $request['state_id'];
                $kyc->industry_id = $request['industry_id'];
                $request['slug'] = Str::slug($kyc->name);
                $kyc->slug =  $request['slug'];
                $link = config('app.url').'/enterprise/'.$kyc->slug;
                $kyc->app_id =  $app_id;

                $kyc->save();

                 $pool_id = $kyc->id;




                if($request['logo'] !=""){
                    $fileExt = $request->logo->getClientOriginalExtension();
                    $compname = $kyc->slug.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                    $logoName = config('app.url').'/images/'.$compname;
                    $request->logo->move(public_path('images'),$logoName);
                    $kyc->logo = $logoName;
                    $kyc->save();
                    }


                     if($request['doc'] !=""){

                       $fileExt = $request->doc->getClientOriginalExtension();
                        $docname = $kyc->slug.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                        $DocName = config('app.url').'/docs/'.$docname;
                        $request->doc->move(public_path('docs'),$DocName);
                        $kyc->doc = $DocName;
                        $kyc->save();



                     }

                                $email_data = array(
                        'user_name' => $user_name,
                        'user_email' => $user_email,
                        'link' => $link,
                        'nasd_admin' => 'admin@nasdep.com'

                    );



            Mail::send('emails.kyc_notification', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['user_email'], $email_data['user_name'])
                    ->subject('Application under Process')
                    ->from('info@nasdep.com', 'NASDEP');
            });


             Mail::send('emails.admin_notification', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['nasd_admin'], $email_data['user_name'], $email_data['link'] )
                    ->subject('EnterPrise KYC')
                    ->from('info@nasdep.com', 'NASDEP');
            });




                 return redirect('/home')->withSuccess('Enterprise Added Successfuly');
              // return back()->with('success', 'Company Details Updated');



            }


                 public function ddakyc()
                        {
                            $industries = Industry::all();
                            $state_list = DB::table('states')->pluck("name","id");
                            return view('users.dda_kyc',compact('state_list', 'industries'));
                        }




                                public function submitDDAKYC(Request $request)
                    {
                        $kyc = new DdaKyc();
                        $user = Auth::user();
                        $user_id = $user->id;
                        $user_email = $user->email;
                        $user_name = $user->name;
                        $app_id = 'NASD' . mt_rand(1000000000, 9999999999);




                        $kyc->name = $request['name'];
                        $kyc->user_id = $user_id;
                        $kyc->profile = $request['profile'];
                        $kyc->number = $request['number'];
                        $kyc->state_id = $request['state_id'];
                        $request['slug'] = Str::slug($kyc->name);
                        $kyc->slug =  $request['slug'];
                        $link = config('app.url').'/dda/'.$kyc->slug;
                        $kyc->app_id =  $app_id;

                        $kyc->save();

                        $pool_id = $kyc->id;



                            if($request['doc'] !=""){

                            $fileExt = $request->doc->getClientOriginalExtension();
                                $docname = $kyc->slug.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                                $DocName = config('app.url').'/docs/'.$docname;
                                $request->doc->move(public_path('docs'),$DocName);
                                $kyc->doc = $DocName;
                                $kyc->save();



                                }

                                            $email_data = array(
                                    'user_name' => $user_name,
                                    'user_email' => $user_email,
                                     'link' => $link,
                                    'nasd_admin' => 'admin@nasdep.com'

                                );



                            Mail::send('emails.kyc_notification', $email_data, function ($message) use ($email_data) {
                                $message->to($email_data['user_email'], $email_data['user_name'])
                                    ->subject('Application under Process')
                                    ->from('info@nasdep.com', 'NASDEP');
                            });


                            Mail::send('emails.admin_notification', $email_data, function ($message) use ($email_data) {
                                 $message->to($email_data['nasd_admin'], $email_data['user_name'], $email_data['link'] )
                                    ->subject('DDA KYC')
                                    ->from('info@nasdep.com', 'NASDEP');
                            });

                            return redirect('/home')->withSuccess('KYC Submiited');

                            //return redirect('/ddakyc')->withSuccess('Success message');

                            // session()->flash("success","Success Message");
                            // return redirect('ddakyc');

                            // return back()->with('success', 'Company Details Updated');



                            }






}
