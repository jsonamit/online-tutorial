<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lang;
use  DB;
//use App\Address;

class HomeController extends Controller
{
   public function user()
   {
       $user=User::with('Address')->get();
       return view('user')->with(['users'=>$user]);
   }

   public function lang()
   {
         $lang=Lang::with('topic','topic.sub_topic')->get();
         echo $lang;
   }
   public function create(Request $request)
   {
       $body=$request->all();
       unset($body['_token']);
       $user =new User($body);
       $user->save();
       return view('welcome');
   }
    public function submit()
    {
       return view('createuser');
    }
    public function update($uid)
    {
        $user=user::with('address')->find($uid);
        return view('update')->with(['users'=>$user]);
    }
    public function submitUpdate(Request $request)
    {
        $id=$request->id;
        User::where('id',$id)->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
            "city"=>$request->city,
            "date"=>$request->date
        ]);
        return view('welcome');
    }
}
