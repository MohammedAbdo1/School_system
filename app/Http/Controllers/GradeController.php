<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Classroom;

use Illuminate\Http\Request;
use App\Http\Requests\StoreGrades;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Grades= Grade::all();
        return view('pages.Grades.Grades',compact('Grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrades $request)
    {
        if (Grade::where('Name->ar', $request->Name)->orWhere('Name->en',$request->Name_en)->exists()) {

        return redirect()->back()->withErrors(trans('Grades_trans.exists'));
    }


        try {
            $validated = $request->validated();
            $Grade = new Grade();
            /*
            $translations = [
                'en' => $request->Name_en,
                'ar' => $request->Name
            ];
            $Grade->setTranslations('Name', $translations);
            */
            $Grade->Name = ['en' => $request->Name_en, 'ar' => $request->Name];
            $Grade->Notes = $request->Notes;
            $Grade->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Grades.index');
        }
        
      catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGrades $request)
    {
        
   try {
    $validated = $request->validated();
    $Grades = Grade::findOrFail($request->id);
    $Grades->update([
      $Grades->Name = ['ar' => $request->Name, 'en' => $request->Name_en],
      $Grades->Notes = $request->Notes,
    ]);
    toastr()->success(trans('messages.Update'));
    return redirect()->route('Grades.index');
}
catch
(\Exception $e) {
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $MyClass_id = Classroom::where('Grade_id',$request->id)->pluck('Grade_id');

      if($MyClass_id->count() == 0){

          $Grades = Grade::findOrFail($request->id)->delete();
          toastr()->error(trans('messages.Delete'));
          return redirect()->route('Grades.index');
      }

      else{

          toastr()->error(trans('Grades_trans.delete_Grade_Error'));
          return redirect()->route('Grades.index');

      }


  }
}
