<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lesson;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\RedirectResponse;
use Collective\Html\HtmlFacade;
use Collective\Html\FormFacade;


class LessonController extends Controller
 {

    public function index(){
      $lessons=Lesson::all();
      return view('lessons.index',[
        'lessons'=>$lessons
      ]);
    }


    function addLesson(Request $req) {

      $name=$req->input('lessonName');
      $descript=$req->input('description');
      $nb_place=$req->input('placeAvailable');
      $beg=$req->input('beginning');
      $end=$req->input('end');
      $reservations=0;

      $data = array('lesson_name'=>$name,'description'=>$descript,'nb_places'=>$nb_place,'nb_sub'=>$reservations,'start_time'=>$beg,'end_time'=>$end);


      \DB::table('lessons')->insert($data);
      $lessons=Lesson::all();
      return view('lessons.index',[
        'lessons'=>$lessons
      ]);

    }


}
