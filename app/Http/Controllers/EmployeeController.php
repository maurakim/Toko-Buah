<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        //echo "asaoy geboyu";
        $employee = Employee::get(['employee_id', 'employee_name', 'employee_address', 'employee_phone_number']);
        //var_dump($customer);
        return view('employee.index', compact('employee'));
    }
    function create(){
        //echo "telo";
        return view('employee.create');
    }
    
    public function store(Request $request){
        //echo "jatimiko";
        $txtEmployee_id = $request->input('txt_employee_id');
        $txtEmployee_name = $request->input('txt_employee_name');
        $txtEmployee_address = $request->input('txt_employee_address');
        $txtEmployee_phone_number = $request->input('txt_employee_phone_number');

        echo $txtEmployee_id."<br/>".
        $txtEmployee_name."<br/>".
        $txtEmployee_address."<br/>".
        $txtEmployee_phone_number;

        Employee::create([
            'employee_id' => $txtEmployee_id, 
            'employee_name' => $txtEmployee_name,
            'employee_address' => $txtEmployee_address,
            'employee_phone_number'=> $txtEmployee_phone_number
            ]);

        return redirect('/Employee');
    }

    public function update(Request $request, $employee_id)
    {
        $txtEmployee_id = $request->input('txt_employee_id');
        $txtEmployee_name = $request->input('txt__employee_name');
        $txtEmployee_address = $request->input('txt_employee_address');
        $txtEmployee_phone_number = $request->input('txt_employee_phone_number');

        Employee::where('employee_id', $Employee_id)->update([
            'employee_name'=>$txtEmployee_name,
            'employee_address'=>$txtEmployee_address,
            'employee_phone_number'=>$txtEmployee_phone_number]);
            
        return redirect('/Employee');
    }

    public function destroy($Employee_id)
    {
        $employee = Employee::where('employee_id', $Employee_id)->first();
        $employee->delete();
        return redirect('/Employee');
    }

    public function show($Employee_id){
        
        $employee = Employee::where('employee_id', $Employee_id)->get();
        return view('employee/show', compact('employee'));
    
    }

    public function edit($Employee_id){
       
        $employee = Employee::where('employee_id', $Employee_id)->get();
        return view('employee/edit', compact('employee'));
    
    }

}
