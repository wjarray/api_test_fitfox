<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Collective\Html\HtmlFacade;
use Collective\Html\FormFacade;
use App\Lesson;

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
    public function index(Request $req)
    {
        $lessons=Lesson::all();
      // if the user is an admin he can create a table
      // if (Auth::user()->admin==true) {
      //   // We store all the lessons of the database
      //
      //   return view('lessons.index',[
      //     'lessons'=>$lessons
      //   ]);
      // }
      // // Else he is a customer so he can choose his lesson if there is
      // // else {
      // //   if (count($lessons)==0 && Auth::user()->name!=null) {
      // //     return "There is no lesson available";
      // //   }
      //   return view('lessons.lessonavailable',[
      //     'lessons'=>$lessons
      //   ]);


      return view('lessons.index',[
         'lessons'=>$lessons
       ]);


    }
}
