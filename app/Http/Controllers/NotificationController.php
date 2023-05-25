<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{

        public function index()
    {
      
        $notification = Notification::orderBy('name', 'asc')->paginate(5);

        return view('notification.index', compact('notification'));
    }

    public function AddNotification()
    {

        return view('notification.add_notification');
    }

    public function StoreNotification(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
        ]);

        Notification::insert([
            'name' => $request->name,
            'title' => $request->title,
        ]);

        $notification = array(
            'message' => 'notification Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.notification')->with($notification);
       
    }

    public function EditNotification($id)
    {
        $notification = Notification::find($id);
        return view('notification.edit_notification', compact('notification'));
       
    }

    public function UpdateNotification(Request $request)
    {
        $noti_id = $request->id;

        Notification::find($noti_id)->update([
            'name' => $request->name,
            'title' => $request->title,
        ]);

        $notification = array(
            'message' => 'notification Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.notification')->with($notification);
       
    }

    public function DeleteNotification($id)
    {

        $notification = Notification::find($id);

        Notification::find($id)->delete();

        $notification = array(
            'message' => 'Notification Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method 

    public function DetailNotification($notification_id){

        $notification = Notification::findOrFail($notification_id);

        return view('notification.detail_notification', compact('notification'));
    }
}