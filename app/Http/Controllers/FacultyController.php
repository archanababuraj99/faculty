<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FacultyModel;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty=FacultyModel::all();
        return view('viewallfaculty',compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
         $getFname=request('fname');

         $faculty=FacultyModel::query()
         ->where('fname','LIKE',"%{$getFname}%")
         ->get();

         return view('viewallfaculty',compact('faculty'));

     }







     public function store(Request $request)
    {
        $getName=request('fname');
        $getDes=request('fdes');
        $getContact=request('fcontact');
        $getCollege=request('fcollege');

        echo $getName;
        echo $getDes;
        echo $getContact;
        echo $getCollege;

        $faculty=new FacultyModel();
        $faculty->fname=$getName;
        $faculty->fdesig=$getDes;
        $faculty->fmob=$getContact;
        $faculty->fcollege=$getCollege;

    $faculty->save();

    return redirect('/viewallfaculty');
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
        $faculty=FacultyModel::find($id);
        return view('editfaculty',compact('faculty'));
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
        $faculty=FacultyModel::find($id);

        $getName=request('fname');
        $getDes=request('fdes');
        $getContact=request('fcontact');
        $getCollege=request('fcollege');

        

 
        $faculty->fname=$getName;
        $faculty->fdesig=$getDes;
        $faculty->fmob=$getContact;
        $faculty->fcollege=$getCollege;

    $faculty->save();
    return redirect('/viewallfaculty');

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
