<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }
     
    public function index()
    {

        $employeedata = Employee::get()->toArray();
      

        
        return view('employee.index',compact('employeedata'));
    }
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required', 
            'date' => 'required', 
          ]);




        $employeedata = $request->all();



        $existingemployeedata = Employee::where('email','=',$request['email'])->first();


if(isset($existingemployeedata))
{
    return redirect()->back()
        ->with('error', 'Email Id Already Exist');
}
   
        Employee::create($employeedata);

        return redirect()->route('index')
        ->with('success', 'Data created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $existingemployeedata = Employee::where('id','=',$id)->first()->toArray();
       
      return view('employee.edit',compact('existingemployeedata'));
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $updatedemployeedata = $request->all();
        $existingemployeedata = Employee::where('id','=',$request['existing_id'])->first();
        if(isset($existingemployeedata)){
            $existingemployeedata->update($updatedemployeedata);
            return redirect()->route('index')
            ->with('success', 'Data Updated successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

       
        $existingemployeedata = Employee::where('id','=',$id)->first();
       
$existingemployeedata->delete();

return redirect()->back()->with('warning','The record has been deleted !');

    
        
    }
}
