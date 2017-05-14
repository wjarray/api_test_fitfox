<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\Query\Builder;

class UserController extends Controller
{
  function unbooking($user_id,$lesson_id){

    // find all the subscription of the user
    $id_lesson_sub=\DB::table('lesson_user')->select('lesson_id')->where('user_id','=',$user_id);
    // look if the user is subscribed to a specific lesson
    $is_subscribed=array_has($id_lesson_sub,$lesson_id);


    if ($is_subscribed==true) {
 //user unbook the lesson so we decremente it's number of subscription
    \DB::table('lessons')->decrement('nb_sub',['id'=>$lesson_id]);
    // Delete from pivot table the entries corresponding
    \DB::table('lesson_user')->where('user_id','=',$user_id)->where('lesson_id','=',$lesson_id)->delete();
  }
    return redirect()->route('lessons.index');
  }

  function booking($user_id,$lesson_id){
    // inserting in the pivot table both of the id
    \DB::table('lesson_user')->insert(['user_id'=>$user_id, 'lesson_id'=>$lesson_id]);
    // we increment the number of subscription
    \DB::table('lessons')->increment('nb_sub',['id'=>$lesson_id]);
     return redirect()->route('lessons.index');
  }
}
