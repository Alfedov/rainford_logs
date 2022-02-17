<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ban;
use Illuminate\Support\Facades\Auth;
use App\Models\Accounts;
use App\Models\Admin;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$user = (new User())->get();
        $params = [
          'user' => $user,
        ];
        return view('home', $params);
    }

	public function logout(Request $request) {
		Auth::logout();
		return redirect('/welcome');
	  }

	public function actions()
	{
		return view('pages.actions');
	}
	public function actions_users()
	{
		$user = (new Accounts())->get();
        $params = [
          'user' => $user
        ];
		return view('pages.players', $params);
	}

	public function update_user(Request $request)
    {
        //$user = User::findOrFail($id);
		$admin = new Admin();
		$admin->Name = $request->Name;
		$admin->adminTag = $request->adminTag;
		$admin->rank = $request->rank;

        $admin->save();
        return back();
    }
	public function destroy($id)
	{
		Admin::where('id', $id)->delete();
		return back();
	}


	public function nickname()
	{
		return view('pages.category.nickname');
	}
	
	public function actions_login()
	{
		return view('pages.category.login');
	}
	public function actions_pm()
	{
		return view('pages.category.pm');
	}

	public function punish()
	{
		return view('pages.punish');
	}
	public function punish_bans()
	{
		$ban = (new Ban())->get();
		
        $params = [
            'ban' => $ban
        ];
		return view('pages.category.ban', $params);
	} 
	public function punish_kick()
	{
		return view('pages.category.kick');
	} 
	public function punish_mute()
	{
		return view('pages.category.mute');
	}
	public function punish_jail()
	{
		return view('pages.category.jail');
	} 

	public function player($id)
	{
		$data['user'] = Accounts::findOrFail($id);
		return view('pages.user', $data);
	}
} 
