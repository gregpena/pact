<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	 /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
	
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $github_user = Socialite::driver('github')->user();
		if($github_user->getName()==""){
			$data = "Your github profile is missing your name, Please update your Github profile and try to log in again?";
			return back()->withErrors(['field_name' => $data]);
			//return redirect::route('login')->with(['data'=>$data]);
		}
		//
		$user = $this->userFindOrCreate($github_user);
		
		// login the user
		Auth::login($user, true);
		
		
		
		// redirect to (home or dashboard)
		//echo $this->redirectTo;
		return redirect("/dashboard");
		
		
		//
        // $user->token;
    }
	public function userFindOrCreate($github_user){
		
		$user = User::where('provider_id', $github_user->id)->first();
		
		if(!$user){
			$user = new User;
			$user->name = $github_user->getName();
			$user->email = $github_user->getEmail();
			$user->provider_id = $github_user->getId();
		//print_r($user);
			$user->save();
		}
		return $user;
		
	}
}