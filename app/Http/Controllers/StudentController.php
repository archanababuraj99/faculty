<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StudentModel;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=StudentModel::all();
        return view('viewallstudent',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
         $getRoll=request('srollno');

         $student=StudentModel::query()
         ->where('srollno','LIKE',"%{$getRoll}%")
         ->get();
         
         return view('viewallstudent',compact('student'));




     }

    public function store(Request $request)
    {
        $getName=request('sname');
        $getRollno=request('srollno');
        $getAdmission=request('sadm');
        $getCollege=request('scollege');

        echo $getName;
        echo $getRollno;
        echo $getAdmission;
        echo $getCollege;

        $student=new StudentModel();
        $student->sname=$getName;
        $student->srollno=$getRollno;
        $student->sadmno=$getAdmission;
        $student->scollege=$getCollege;

        $student->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
