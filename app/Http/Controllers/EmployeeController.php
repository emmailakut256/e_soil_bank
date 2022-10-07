<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use Redirect,Response,File;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $this->setPageTitle('Employees', 'List of all Employees');
      $employees = DB::table('users')->where(['Role' => 1])->get();
        return view('site.Employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->setPageTitle('Employees', 'Create Employee Account');
        
        return view('site.Employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('PHOTO')) {
            //  Let's do everything here
            if ($request->file('PHOTO')->isValid()) {

        $validated = $request->validate([
            'name'      =>  'required|max:191',
            'email'     =>  'required|max:191',
            'password'  =>  'required|min:7',
            'Role'      =>  'required|max:191',
            'address'      =>  'required|max:191',
            'Phone'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $photoPath=Storage::putFile('public/photos',$request->file('PHOTO'));
        $PHOTO_url=Storage::url($photoPath);

        $adverts = User::create([
         'name' => $validated['name'],
         'Phone' => $validated['Contact'],
         'email' => $validated['email'],
         'password' => Hash::make($validated['password']),
         'address' => $validated['address'],
         'image' => $image_file,
         'url' => $PHOTO_url,
         'Role' => 0,
     ]);

        $employee = $request->all();
        // dd($employee);
        $emplo =User::create($employee);


        if (!$emplo) {
            return $this->responseRedirectBack('Error occurred while creating Employee.', 'error', true, true);
        }
        return back()->with('site.Employees.index', 'Employees details added successfully' ,'success',false, false);
    
            }
        }
        abort(500, 'Could not upload image :(');
    
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
         $employee = User::findOrFail($id);
        //  $this->setPageTitle('Employee', 'Edit Employee');
        return view('site.Employees.edit', compact('employee'));
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
        $employee = $request->validate([

            'name'      =>  'required|max:191',
            'email'     =>  'required|max:191',
            'password'  =>  'required|max:191',
            'Phone'=>  'required|max:191',
            'Role'      =>  'required|max:191',
            'image'     => 'jpeg,png,jpg,gif,svg|max:2048',
            
            ]);
       Employee::whereId($id)->update($employee);

        // return redirect('/coronas')->with('success', 'Corona Case Data is successfully updated');
        return $this->responseRedirect('site.Employees.index', 'Employee updated successfully' ,'success',false, false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = User::findOrFail($id);
        $employee->delete();
        return $this->responseRedirect('site.Employees.index', 'Employee Account deleted successfully' ,'success',false, false);
    }
}
