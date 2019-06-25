<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Company;
use App\Project;
use App\User;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home',[

            'company'=>Company::all(),
            'project'=>Project::all(),
            'comment'=>Comment::all(),
            'users'=>User::all(),

            ]);
    }
}
