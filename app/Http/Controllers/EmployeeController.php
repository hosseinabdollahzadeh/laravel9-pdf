<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;

class EmployeeController extends Controller
{
    // Display user data in view
    public function showEmployees(){
        $employees = Employee::all();
        return view('index', compact('employees'));
    }
    // Generate PDF
    public function createPDF() {
        // retrieve all records from db
        $data = Employee::all()->toArray();
        // share data to view
        view()->share('employees',$data);
        $pdf = PDF::loadView('pdf_view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
