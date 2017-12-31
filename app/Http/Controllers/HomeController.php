<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // if( $request->user()->hasRole('employee')) {
       //  return redirect('/employer');
       // }

       //  $request->user()->authorizeRoles(['employee', 'manager']);
       //  return view('home');

        return view('home');
    }

    public function employer(Request $request)
    {
        return 'Hello Employee';
    }
}
