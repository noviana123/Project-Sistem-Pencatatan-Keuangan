<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PencatatanController extends Controller
{
    public function pencatatan()
    {
        $pencatatan = DB::table('pencatatan')->get();
        //return $pencatatan;
        //dd($pencatatan);
        return view('master.pencatatan', ['pencatatan'->$pencatatan]);
    }

    public function users()
    {
        $users = DB::table('users')->get();
        //return $users;
        //dd($users);
        return view('master.user', ['users' => $users]);
    }

    public function AddUser()
    {
        return view('master.AddUser');
    }

    public function AddUserProcess(Request $_request)
    {
        return $_request;
    }
}
