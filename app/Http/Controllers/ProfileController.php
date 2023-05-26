<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function ProfileDashboard() {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function EditProfile() {
        $id = Auth::user()->user_id;
        $editData = User::find($id);
        return view('profile.edit_profile', compact('editData'));
    }

    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->user_id;
        $data = User::find($id);
        $data->user_name = $request->user_name;
        $data->user_email = $request->user_email;
        $data->user_phone = $request->user_phone;
        // $data->username = $request->username;

        if ($request->file('user_image')) {
            $file = $request->file('user_image');

            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['user_image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('profile.dashbroad')->with($notification);
    } // End Method
}
