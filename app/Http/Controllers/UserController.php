<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// Thêm thư viện để mã hóa password
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function index(){
        // lấy ra toàn bộ user
        $users = User::all();
        //dd($users);

        // trả về view hiển thị danh sách user
        return view('users', compact('users'));
    }
}