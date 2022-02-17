<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accounts;
use App\Models\User;

class AdminCenter extends Controller
{
    public function index()
	{
		return view('admin.index');
	}

	public function accounts()
	{
		$user = (new User())->get();
        $params = [
          'user' => $user
        ];
		return view('pages.accounts', $params);
	}

	public function player($id)
	{
		$data['user'] = Accounts::findOrFail($id);
		return view('pages.player', $data);
	}
}
