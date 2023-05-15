<?php

namespace App\Http\Controllers;

// use App\Models\Subject;
use App\Models\Classroom;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;

class ClassroomController extends Controller
{ 
    public function index(){
        // lấy ra toàn bộ classroom
        $classrooms = Classroom::all();
        //dd($classrooms);

        // trả về view hiển thị danh sách Classroom
        return view('classroom.classrooms', compact('classrooms'));
    }

    public function DetailClassroom($classroom_id){
        // Tìm đến đối tượng 
        $classrooms = Classroom::findOrFail($classroom_id);

        // điều hướng đến view edit Classroom và truyền sang dữ liệu về Classroom muốn sửa đổi
        return view('classroom.detail_classroom', compact('classrooms'));
    }

    public function create(){
        return view('classroom.addClassrooms');
    }

    //Add Classrooms
    public function store(Request $request)
    {
         $classrooms = new Classroom;
         $classrooms->class_name = $request->class_name; 

         $classrooms->save();
         return redirect('/classrooms');
    }

    public function delete($classroom_id){
        // Tìm đến đối tượng muốn xóa
        $classroom = Classroom::findOrFail($classroom_id);

        $classroom->delete();
        echo"success delete classroom";
        return redirect('/classrooms');
    }

    public function editClassroom($id){
        // Tìm đến đối tượng muốn update
        $classrooms = Classroom::findOrFail($id);

        // điều hướng đến view edit Classroom và truyền sang dữ liệu về Classroom muốn sửa đổi
        return view('classroom.updateClassrooms', compact('classrooms'));
    }

    public function updateClassroom(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $classrooms = Classroom::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB      
        // Update Classroom
        $classrooms->update($data);
        echo"success update Classroom";
        return redirect('/classrooms');
    }
}