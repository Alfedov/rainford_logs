<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ban;
use Illuminate\Support\Facades\Auth;
use App\Models\Accounts;
use App\Models\Admin;
use App\Models\User;
use DB;

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

	// Other
    public function index()
    {
		$accounts = DB::table('accounts')->get();
		$user = (new User())->get();
		$params = [
          'user' => $user,
		  'accounts' => $accounts
        ];
        return view('home', $params);
    }

	public function logout(Request $request) {
		Auth::logout();
		return redirect('/login');
	  }

	public function actions()
	{
		return view('pages.actions');
	}
	public function actions_users()
	{
		$users = DB::table('accounts')->get();
        $params = [
          'user' => $users
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

	public function player($id)
	{
		$data['user'] = Accounts::findOrFail($id);
		return view('pages.user', $data);
	}

	public function monitoring()
	{
		$user = DB::table('accounts')->get();
		$params = [
            'users' => $user
        ];
		return view('pages.monitoring', $params);
	}

	public function players()
	{
		return view('pages.users');
	}

	public function wating()
	{
		return view('wating');
	}

	// Наказания
	public function punish()
	{
		return view('pages.punish');
	}
	public function punish_bans()
	{
		$ban = DB::table('bans')->get();
		
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

	public function punish_warn()
	{
		return view('pages.category.warn');
	}
	public function punish_awarn()
	{
		return view('pages.category.awarn');
	}
	public function punish_lwarn()
	{
		return view('pages.category.lwarn');
	}

	// Недвижимость 
	public function house()
	{
		return view('pages.category.house');
	}
	public function business()
	{
		return view('pages.category.business');
	}
	public function car()
	{
		return view('pages.category.car');
	}
	
} 
