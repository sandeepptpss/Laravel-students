<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
public function Student(){
return view('auth.AddStudent');  
}
public function index(){
return view('auth.index');
}
 ////////add data function///////
public function Adddetail(Request $request){
    $student =new Student;
    $student->name = $request->name;
    $student->email= $request->email;
    $student->branch= $request->branch;
    $student->phone= $request->phone;
    $student->address= $request->address;
   $res= $student->save();
   return redirect('index');
//    return "success','Student has been add successfully";
    // return redirect()->route('index')
    // ->with('success','Student has been add successfully');
}
 ////////show data function///////
public function show(){
 $data =   Student::all();
    return view('auth.index',['students'=> $data]);
    // return Student::all();
}
 ////////Edit data function///////
public function editData($id){
    $data = Student::find($id);
    return view('auth.edit',['data'=>  $data ]);
}
 ////////Update data function///////
public function UpdateData(Request $req){
    $data = Student::find($req->id);
    $data->name = $req->name;
    $data->email = $req->email;
    $data->branch = $req->branch;
    $data->phone = $req->phone;
    $data->address = $req->address;
    $data->save();
    return redirect('index');
    }
    ////////Delete function///////
    function delete($id){
$student =Student::
        $students= Student::find($id);
        $students->delete();
    return redirect('/index')->with('Data delete Successfulluy');
}
}

