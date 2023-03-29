<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class StudentController extends Controller
{
    //
    public function index(){
    //     $data_student = Student::all();
    //    return($data_student);
       
        return view ('students', [
            'iniV' => Student::all(), 
        ]);
    }

    public function buat(){

        return view('create');
    }

    public function store(Request $request){
        // return($request);
        $murid = new Student();
        //kiri dari db kanan dari form
        $murid -> name = $request -> name;
        $murid -> addres=$request-> addres;
        $murid -> phone_number=$request -> phone_number;
        $murid -> class=$request -> kelas;

        $murid -> save();

        return view('students', [
            'iniV' => Student::all()]);
    }

    public function edit($id){
        // dd($id);
        $murid = Student::find($id);
        return view('edit',[
            'inid' =>  $murid,
        ]);
        //   return($murid);
    }

    public function update(Request $request, $id){
        $murid = Student::find($id);
        //kiri dari db kanan dari form
        $murid -> name = $request -> name;
        $murid -> addres=$request-> addres;
        $murid -> phone_number=$request -> phone_number;
        $murid -> class=$request -> kelas;

        $murid -> save();

        return view('students', [
            'iniV' => Student::all()]);
    }

    public function destroy($id){
        $murid = Student::find($id);
        $murid->delete();

        return view('students', [
            'iniV' => Student::all()]);
    }
}
