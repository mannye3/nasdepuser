<?php

namespace App\Http\Controllers;
use App\Models\DdaKyc;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $userId = DdaKyc::find($user_id);
        return view('home',compact('userId'));
    }
}
