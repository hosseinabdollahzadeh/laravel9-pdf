<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class EmployeeController extends Controller
{
    // Display user data in view
    public function showEmployees(){
        $employees = Employee::all();
        $users = User::all();
        return view('index', compact('employees', 'users'));
    }
    // Generate PDF
    public function createPDF() {
        // retrieve all records from db
        $data1 = Employee::all()->toArray();
        $data2 = User::all()->toArray();
        // share data to view
        view()->share('employees',$data1);
        view()->share('users',$data2);
        $pdf = PDF::loadView('pdf_view', [$data1, $data2]);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
