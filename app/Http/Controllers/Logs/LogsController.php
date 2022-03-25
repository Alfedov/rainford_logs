<?php

namespace App\Http\Controllers\Logs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    /* Admin */
    public function bans()
    {
        $bans = DB::table('banlogs')->get();
        $params = [
            'bans' => $bans
        ];
        return view('logs.admin.bans', $params);
    }
    public function kicks()
    {
        return view('logs.admin.kicks');
    }
    public function mutes()
    {
        return view('logs.admin.mute');
    }
    public function jails()
    {
        return view('logs.admin.jail');
    }
    public function warns()
    {
        return view('logs.admin.warns');
    }
    public function reports()
    {
        return view('logs.admin.warns');
    }

    /* State */
    public function house()
    {
        return view('logs.state.house');
    }
    public function businesses()
    {
        return view('logs.state.businesses');
    }
    public function cars()
    {
        return view('logs.state.cars');
    }

    /* Players */
    public function nickname()
    {
        return view('logs.players.nickname');
    }
}
