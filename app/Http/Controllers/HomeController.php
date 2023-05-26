<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmail;

class HomeController extends Controller
{

    //Login checked
    public function customLogin(Request $request)
    {
        $request->validate([
            'user_email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('user_email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashbroad')
                ->withSuccess('Signed in');
        }
        return redirect("register")->withSuccess('Login details are not valid');
    }

    //Register custom

    public function customRegistration(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email|unique:users',
            'user_phone' => 'required',
            'user_image' => 'required|mimes:jpg,jpeg,png,pdf',
            'user_rule' => 'required',
            'password' => 'required|min:6',
        ]);

        $request->file('user_image')->move(public_path('assets/img'), $request->file('user_image')->getClientOriginalName());

        $data = $request->all();
        $this->create($data);

        $this->send_email($request);

        return Redirect('/');
    }

    public function create(array $data)
    {
        return User::create([
            'user_name' => $data['user_name'],
            'user_email' => $data['user_email'],
            'user_phone' => $data['user_phone'],
            'user_image' => $data['user_image']->getClientOriginalName(),
            'user_rule' => $data['user_rule'],
            'password' => Hash::make($data['password'])
        ]);
    }
    //Sig-out action
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    //Get all users
    function getAllUser()
    {
        $users = User::all();
        return view('dashbroad', compact('users'));
    }
    //Get user by id
    function getUserById()
    {
        if (Auth::check()) {
            $user = User::find(Auth::id());
            return view('dashbroad', compact('user'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    //Get subject by user_id
    function getTimeTable()
    {
        //
        $subjectS = array(); //ket qua cuoi cung
        $checkclassroom = array(); //kiem tra class da lay ra chua
        $subjects = Subject::findbyuserid(Auth::id())->get(); //lay mon hoc theo user id
        foreach ($subjects as $subject) {
            //Kiem tra class da ton tai hay chua
            if (in_array($subject->classroom_id, $checkclassroom) == false) {
                //luu ket qua kiem tra
                array_push($checkclassroom, $subject->classroom_id);
                //lay mon hoc theo class
                $getSubjectsbyClassroom = Subject::findbyclassroomid($subject->classroom_id)->get();
                if (count($getSubjectsbyClassroom) > 1) {
                    foreach ($getSubjectsbyClassroom as $subjec) {
                        $subjectS[$subjec->classroom_id][] = $subjec;
                    }
                } else {
                    $subjectS[$subject->classroom_id] = $getSubjectsbyClassroom;
                }
            }
        }
        return view('timetable', compact('subjectS', 'checkclassroom'));
    }

    function send_email(Request $request)
    {
        Mail::to($request->user_email)->send(new UserEmail($request));
    }
}
