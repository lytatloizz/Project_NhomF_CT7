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
        //$users = User::all();
        //dd($users);
        $users = User::simplePaginate(5);
 
        $users->appends(['sort' => 'votes']);

        // trả về view hiển thị danh sách user
        return view('users.users', compact('users'));
    }

    //Chi tiet users
    public function detail($id){
        // Tìm đến đối tượng muốn update
        $users = User::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('users.detail_users', compact('users'));
    }

    //Xoa users
    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $user = User::findOrFail($id);

        $user->delete();
        echo"success delete user";
        return redirect('/users');
    }

    public function edit($id){
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('users.users_edit', compact('user'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        // Update user
        $user->update($data);
        echo"success update user";
        return redirect('/users');
    }
}