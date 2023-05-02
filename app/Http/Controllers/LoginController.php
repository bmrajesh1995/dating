<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Temp_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {

        return view('login/login');

    }

    public function home(Request $request)
    {
        
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|min:8'
        ], [
            'username.required' => __('username required'),
            'password.required' => __('password required')
        ]);

       if (Temp_user::guard('user')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

            return response()->json([
                'msg' => __('Login Success Redirecting'),
                'type' => 'success',
                'status' => 'ok'
            ]);
        }
    //     return response()->json([
    //         'msg' => __('Your Username or Password Is Wrong !!'),
    //         'type' => 'danger',
    //         'status' => 'not_ok',
    //     ]);
    }


//     public function homelog(Request $request)
//     {
//         $this->validate($request, [
//             'username' => 'required|string',
//             'password' => 'required|min:8'
//         ], [
//             'username.required' => __('username required'),
//             'password.required' => __('password required')
//         ]);


//  $credentials['email'] =  $request->username  ;
//   $credentials['password'] = $request->password  ;

//         if ( Auth::guard('user')->attempt($credentials)) {
//             $minutes = 120;
//             return redirect()->intended('login/dashboard')
//                         ->withSuccess('You have Successfully loggedin');
//         }else{
//               return redirect()->intended('login/user')->withErrors('You have Enter Invalid Credentials');
//         }

//     }



    public function register()
    { 
        return view('login/register');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|unique:users|email|max:255',
            'phone' => 'required|max:12|min:10',
            'password' => 'required|max:16|min:8',
            'terms_and_conditions' => 'required',
        ]);

        if($request->fails){
            // $data = [
            //     'error_class' => 'danger',
            //     'message' => 'Form data not validate. Kinldy check the data you entered',
            //  ];
            return back()->with('error_class', 'danger')->with('message', 'Form data not validate. Kinldy check the data you entered');
            // return back()->with($data);

        } else {
            $input['password'] = bcrypt($input['password']);
            $input['otp'] = rand(0,999999);
            $input['expiry_at'] = date('Y-m-d H:i:s',strtotime('+10 minutes'));
            // dd($input);
            Temp_user::create($input);
            Session::put('otp', $input['otp']);
            // $data = [
            //    'error_class' => 'success',
            //    'message' => 'Form data has been saved successfully',
            // ];
            return redirect('/otp')->with('error_class', 'success')->with('message', 'Form data has been saved successfully');
            // return redirect('/otp')->with($data);

        }
    }


    public function forgetpassword()
    {
        return view('login/forget-password');
    }

    

    public function otpforlogin()
    {
        $session_otp = Session::get('otp');
        if(!empty($session_otp)){
            return view('login/otp-for-login');
        } else {
            return redirect('/login');
        }
    }




   public function verifyotp(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'otp' => 'required|max:6|min:6',
        ]);

        if($request->fails){
            return back()->with('error_class', 'danger')->with('message', 'Form data not validate. Kinldy check the data you entered');
        } else {
            $entered_otp = $input['otp'];
            $session_otp = $request->session()->get('otp');
            $q = DB::table('temp_users')->where('otp', $input['otp'])->first();
            if($q->expiry_at >= date('Y-m-d h:i:s')){
                if($session_otp == $entered_otp){
                    $input = array(
                        'name' => $q->name,
                        'email' => $q->email,
                        'phone' => $q->phone,
                        'password' => $q->password,
                        'terms_and_conditions' => $q->terms_and_conditions,
                        'email_verified_at' => date('Y-m-d h:i:s'),
                        'password' => $q->password,
                    );
                    User::create($input);
                    DB::table('temp_users')->where('otp', $entered_otp)->delete();
                    Session::pull('otp');
                    Session::flash('error_class', 'alert-success');
                    Session::flash('message', 'OTP verified successfully');
                    return redirect('/login');
                } else {
                    Session::flash('error_class', 'alert-danger');
                    Session::flash('message', 'Please enter valid OTP');
                    return back();
                }
            } else {
                Session::flash('error_class', 'alert-danger');
                Session::flash('message', 'OTP has been expired');
                return back();
            }
        }
    }


    

    public function accountsetting()
    {
        return view('login/account-setting');
    }

    public function dashboard()
    {
        
        {
            return view('login/dashboard');
        }
        // $user_details  = array();     
        // return view('/dashboard')->with([
        //     'user_details' => $user_details,
        // ]);

    }

    // public function loginUsingId($id, $remember = false)
    // {
    //     $this->session->set($this->getname(), $id);
    //     $this->login($user = $this->provider->retrieveById($id), $remember);
    //     return $user;

    //     User::loginUsingId($id);

    //     if(User::check()){
    
    //         session()->flash('message', 'Welcome!');
    //         return redirect()->to(url('/dashboard'));
    //     }
    //     return redirect ('/');
    
    

    // }

    public function discoverysetting()
    {
        return view('login/discovery-setting');
    }

    public function membership()
    {
        return view('login/membership');
    }

    public function onboarding()
    {
        return view('login/onboarding');
    }
}
