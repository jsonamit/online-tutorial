<?php

namespace App\Http\Controllers;

use App\Hello_lang;
use App\Sub_topic;
use App\Topic;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Lang;
use App\Loginuser;

class AdminController extends Controller
{
    public function langinsert(Request $request)
    {
        $body = $request->all();
        if (!empty($request->langname)) {
            unset($body['_token']);
            $user = new Lang($body);
            $user->save();
        } else {

        }

        return view('admin/home');
    }

    public function dropdownlang()
    {
        $lang = Lang::select('id', 'langname')->get();
        return view('admin/topics')->with(['lang' => $lang]);
    }

    public function dropdowntopics()
    {
        $lang=Lang::select('*')->get();
        $topic = Topic::select('*')->get();
        return view('admin/subtopics')->with(['topic' => $topic,'lang'=>$lang]);
    }

    public function topicinsert(Request $request)
    {

        $body = $request->all();
        //echo $body;
        unset($body['_token']);
        $user = new Topic($body);
        $user->save();
        return redirect(route('topic.get'));
    }

    public function bindlang()
    {
        $lang = Lang::select('*')->get();
        return view('admin/bindlang')->with(['lang' => $lang]);
    }

    public function delete(Request $request)
    {
        Lang::where('id', $request->id)->delete();
        return view('admin/home');
    }

    public function update(Request $request)
    {
        $user = Lang::where('id', $request->id)->get();

        return view('admin/update')->with(['lang' => $user]);

    }

    public function updatesubmit(Request $request)
    {
        Lang::where('id', $request->id)->update(
            [
                "langname" => $request->langname
            ]
        );
        return view('admin/home');
    }

    public function bindtopics(Request $request)
    {
        $id = $request->lang_id;
        $lang = Lang::select('*')->get();
        $lg = Lang::where('id', $request->lang_id)->first();
        $topic = Topic::select('*')->get();
        $topicbylangid = Topic::where('lang_id', $request->lang_id)->get();
        return view('admin/bindtopics')->with(['topic' => $topic, 'lang' => $lang, 'langname' => $lg, 'langid' => $id, 'topicbylangid' => $topicbylangid]);
    }

    public function deletetopics(Request $request)
    {
        Topic::where('id', $request->id)->delete();
        return view('admin/home');
    }

    public function sidebar(Request $request)
    {
        $hellopage = Hello_lang::where('lang_id', $request->id)->first();
        $topic = Topic::where('lang_id', $request->id)->get();
        $subtopic = Sub_topic::where('topics_id', $request->topicid)->first();
        return view('home')->with(['langs' => $topic, 'lang_id' => $request->id, 'subtopic' => $subtopic, 'hellopage' => $hellopage]);
    }

    public function bindsubtopic(Request $request)
    {

        $topic = Sub_topic::select('*')->get();
        $subtopicbyid = Sub_topic::where('topics_id',$request->topic_id)->get();
        $lang=Lang::select('*')->get();
        $langbyid=Lang::where('id',$request->lang_id)->first();
        $topicbyid=Topic::where('id',$request->topic_id)->first();
        return view('admin/bindsubtopics')->with(['subtopic' => $topic,'subtopicbyid'=>$subtopicbyid,'lang'=>$lang,'langid'=>$request->lang_id,'langname'=>$langbyid,'topicname'=>$topicbyid]);
    }

    public function indexlang()
    {
        $lang = Lang::select('*')->get();
        return view('index')->with(['lang' => $lang]);
    }

    public function subtopicinsert(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $subdata = new Sub_topic($data);
        $subdata->save();
        return view('admin/home');
    }

    public function deletesubtopic(Request $request)
    {
        Sub_topic::where('id', $request->id)->delete();
        return view('admin/home');
    }

    public function dropdownuptopic(Request $request)
    {
        $topics = Sub_topic::where('id', $request->id)->first();
        $topic = Topic::select('*')->get();
        return view('admin/updatesubtpic')->with(['topic' => $topic, 'sub' => $topics]);

    }

    public function fillsubtopic(Request $request)
    {

        Sub_topic::where('id', $request->id)->update(
            [
//                "topics_id" => $request->id,
                "title" => $request->title,
                "description" => $request->description,
                "quest_headone" => $request->quest_headone,
                "quest_headtwo" => $request->quest_headtwo,
                "quest_headthree" => $request->quest_headthree,
                "quest_headfour" => $request->quest_headfour,
                "quest_headfive" => $request->quest_headfive,
                "example_quest" => $request->example_quest,
                "example" => $request->example,
                "features_one_question" => $request->features_one_question,
                "features_one_ans" => $request->features_one_ans,
                "features_two_question" => $request->features_two_question,
                "features_two_ans" => $request->features_two_ans,
                "features_three_question" => $request->features_three_question,
                "features_three_ans" => $request->features_three_ans
            ]
        );
        return view('admin/home');
    }

    public function hellolang()
    {
        $lang = Lang::select('id', 'langname')->get();
        return view('admin/hellolang')->with(['lang' => $lang]);
    }

    public function helloinsert(Request $request)
    {
        $lang = Lang::select('id', 'langname')->get();
        $body = $request->all();
        unset($body['_token']);
        $insert = new Hello_lang($body);
        $insert->save();
        return view('admin/hellolang')->with(['lang' => $lang]);
    }

    public function login(Request $request)
    {
        $login = Loginuser::where('password', $request->password)->where('username', $request->username)->first();
        if (!empty($login)) {
            return view('admin/home');
        } else {
            return view('admin/login');
        }

    }

    public function signup()
    {
        return view('admin/signup');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function topicupdate(Request $request)
    {
        $top = Topic::where('id', $request->id)->first();
        return view('admin/topicupdate')->with(['topic' => $top]);
    }

    public function topicupdateubmit(Request $request)
    {
        Topic::where('id', $request->id)->update(
            [
                "topic" => $request->topic
            ]
        );
        return redirect(route('topic.get'));
    }

    public function subtopicgetbyid(Request $request)
    {
        $topic=Topic::where('lang_id',$request->langid)->get();
        return response()->json($topic);
      //return view('admin/bindsubtopics')->with(['ab'=>$ab]);
    }


}
