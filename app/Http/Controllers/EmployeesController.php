<?php

namespace App\Http\Controllers;

use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Return all employees
    public function showAllEmployees(){
        $employees = Employee::all();

        return json_encode($employees);
    }

    //Return employee by id
    public function showEmployeeById($id){
        $employee = Employee::find($id);

        return json_encode($employee);
    }

    //Return employees by type
    public function showEmployeeByJob(Request $request){
        $employees = Employee::where('job', $job)->get();

        return json_encode($employees);
    }
}
