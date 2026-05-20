<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\finalprac_jabla_viray;
class studentmngtController extends Controller
{
public function index()
    {   
        $students = finalprac_jabla_viray::get();
        return view ('student.index', compact('students'));
    }

    public function create()
    {
        return view ('student.create');
    }


    public function store(Request $request)
    {
    $request->validate([
        'fname' => 'required|max:255',
        'lname' => 'required|max:255',
        'midname' => 'required|max:255',
        'address' => 'required|max:255',
        'dob' => 'required',
        
    ]);

    finalprac_jabla_viray::create($request->all());
    return redirect()->back()->with('status','Student Created Successfully!');
    }

    public function edit( int $id)
    {
        $students = finalprac_jabla_viray::find($id);
        return view ('student.edit', compact('students'));
    }

    public function update(Request $request, int $id) {
        {
            $request->validate([
                'fname' => 'required|max:255',
                'lname' => 'required|max:255',
                'midname' => 'required|max:255',
                'address' => 'required|max:255',
                'dob' => 'required|date',
            ]);
        
            finalprac_jabla_viray::findOrFail($id)->update($request->all());
            return redirect ()->back()->with('status','Student Updated Successfully!');
            }
    }

    public function destroy (int $id){
        $students = finalprac_jabla_viray::findOrFail($id);
        $students->delete();
        return redirect ()->back()->with('status','Student Deleted');
    }
}
