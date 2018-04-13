<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Lang;
class MailController extends Controller
{

   public function sendmail(Request $request)
   {
       Mail::send(new SendMail());
       return view('index');
   }
}
